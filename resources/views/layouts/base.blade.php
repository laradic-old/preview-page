@section('doctype')<!DOCTYPE html>@show
@section('html')<html lang="en">@show
@section('head-outer')
    <head>
        @section('head')
            @section('meta')
            <meta charset="UTF-8">
            @show
            <title>
                @section('title')
                @show
            </title>
            @section('stylesheets')
            @show
            @section('styles')
            @show
        @show
    </head>
@show
@section('body-outer')
    <body>
        @section('body')
            @section('content')
            @show
            @section('javascripts')
            @show
            @section('scripts')
            @show
        @show
    </body>
@show
</html>
