@push('styles')
<style type="text/css">
    #content {
        margin-top: 20px;
    }
    .list-group-preview-page .list-group-item {
        margin-bottom: 1px;
    }
</style>
@endpush

@push('content')
<div class="container-fluid" id="content">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="text-center">Workbench</h1>

            <div class="list-group list-group-preview-page">
                @section('list')
                    @if(isset($list) && is_array($list))
                        @foreach($list as $item)
                            @include('preview-page::partials.pages.list.item', ['title' => $item['list'], ])
                        @endforeach
                    @endif
                @show
            </div>
        </div>
    </div>
</div>
@endpush
