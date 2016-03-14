@extends('preview-page::layouts.bootswatch')

@section('content')
    <div class="container">
        <div class="row">
            @foreach(app('preview-page')->bootswatch()['themes'] as $theme)
                <div class="col-xs-6 col-md-3">
                    <a href="{{ route('preview-page::theme', ['theme' => $theme['name']]) }}" class="thumbnail">
                        <img src="{{ $theme['thumbnail'] }}" alt="{{ $theme['name'] }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@stop
