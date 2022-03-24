@extends('admin.components.form')
@section('module_name', trans('service.serveImages'))
@section('page_type', trans('general.edit'))
@section('title') @lang('service.serveImages') @endsection
@section('index_route', route('servImages.index'))
@section('store_route', route('servImages.update', $data))
@section('form_type', 'POST')

@section('fields_content')
    @method('put')
    <div class="card card-custom mb-2">
       
    </div>
    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="col-form-label d-block">@lang('service.serveImages')</label>
                        @if (isset($data->images))
                            @include('admin.components.service_images_edit')
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('service.index') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
