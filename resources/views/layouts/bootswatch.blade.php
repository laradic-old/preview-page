@extends('preview-page::layouts.base')

@push('stylesheets')
@include('preview-page::partials/stylesheets/bootswatch', [
    'theme' => isset($bootswatch) ? $bootswatch : config('laradic.preview-page.defaults.bootswatch.theme', 'superhero'),
    'version' => config('laradic.preview-page.defaults.bootswatch.version', '3.3.5')
])
@endpush

@push('javascripts')
@include('preview-page::partials/javascripts/jquery', ['version' => '1.11.3'])
@include('preview-page::partials/javascripts/bootstrap', ['version' => '3.3.5'])
@endpush
