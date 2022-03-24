@extends('admin.components.form')
@section('module_name', trans('service.serveImages'))
@section('page_type', trans('general.show'))
@section('title') @lang('service.serveImages') @endsection
@section('index_route', route('servImages.index'))

@section('fields_content')
    
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-body p-10">
            <div class="card-title">
                <h5 class="font-weight-bolder text-dark">@lang('service.image'):</h5>
            </div>
            <!--begin::Image-->
            @if (isset($data->images))
                <div class="card-body p-0 px-1 py-1">
                    <img src="{{ asset($data->images) }}" style="max-width: 100%" class="rounded img-fluid">
                </div>
            @endif
            <!--end::Image-->
        </div>
    </div>
@endsection
