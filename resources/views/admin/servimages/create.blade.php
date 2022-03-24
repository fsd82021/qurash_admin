@extends('admin.components.form')
@section('module_name', trans('service.serveImages'))
@section('index_route', getRoute('service.index'))
@section('store_route', route('servImages.store'))
@section('page_type', trans('general.add_new'))
@section('form_type', 'POST')
@section('title') @lang('service.serveImages') @endsection
@section('fields_content')
    
    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <input type="hidden" name="service_id" value="{{$service_id}}">
                        <label class="col-form-label d-block">@lang('service.serveImages')</label>
                        @include('admin.components.service_images_create')
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('servImages.index') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
