@extends('preview-page::layouts.bootswatch')

@push('styles')
<style type="text/css">
    #content {
        margin-top: 20px;
    }
</style>
@endpush

@push('content')
<div class="container-fluid" id="content">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="text-center">Hello</h1>
        </div>
    </div>
</div>
@endpush
