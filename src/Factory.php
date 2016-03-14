<?php
namespace Laradic\PreviewPage;

use Illuminate\Contracts\Foundation\Application;

class Factory
{

    protected $app;

    protected $bootswatchCacheTime = 60 * 24;

    protected $bootswatchResource = '/api/3.json';

    protected $bootswatchHost = null;


    /**
     * Factory constructor.
     *
     * @param $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function bootswatch()
    {
        $jsonContent = $this->app[ 'cache' ]->remember(md5(static::class), $this->bootswatchCacheTime, function () {
            return $this->downloadBootswatchJson();
        });
        return json_decode($jsonContent, true);
    }

    protected function downloadBootswatchJson()
    {
        if (class_exists('Buzz\\Client\\Curl')) {
            $curl     = new \Buzz\Client\Curl();
            $request  = new \Buzz\Message\Request(\Buzz\Message\Request::METHOD_GET, '/api/3.json', 'https://bootswatch.com');
            $response = new \Buzz\Message\Response;
            $curl->send($request, $response);
            $jsonContent = $response->getContent();
        } else {
            $jsonContent = file_get_contents('https://bootswatch.com/api/3.json');
        }
        return $jsonContent;
    }

    /**
     * @return int
     */
    public function getBootswatchCacheTime()
    {
        return $this->bootswatchCacheTime;
    }

    /**
     * Set the bootswatchCacheTime value
     *
     * @param int $bootswatchCacheTime
     *
     * @return Factory
     */
    public function setBootswatchCacheTime($bootswatchCacheTime)
    {
        $this->bootswatchCacheTime = $bootswatchCacheTime;
        return $this;
    }
}
