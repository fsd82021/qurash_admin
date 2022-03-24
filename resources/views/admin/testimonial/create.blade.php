@extends('admin.components.form')
@section('module_name', trans('testimonial.testimonial'))
@section('page_type', trans('general.add_new'))
@section('title') @lang('testimonial.testimonial') @endsection
@section('index_route', route('testimonial.index'))
@section('store_route', route('testimonial.store'))
@section('form_type', 'POST')

@section('fields_content')
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.add_new')</h3>
            </div>
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    @foreach (config('translatable.locales') as $key => $locale)
                        <li class="nav-item">
                            <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab" href="{{ '#' . $locale }}">@lang('general.'.$locale)</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}" role="tabpanel">
                        
                        <div class="form-group">
                            <label>@lang('testimonial.name') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[name]' }}" placeholder="@lang('testimonial.name')" class="form-control  pl-5 min-h-40px @error($locale . '.name') is-invalid @enderror" value="{{ old($locale . '.name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('testimonial.description') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[description]' }}" placeholder="@lang('testimonial.description')" class="form-control  pl-5 min-h-40px @error($locale . '.description') is-invalid @enderror" value="{{ old($locale . '.description') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('testimonial.img_alt') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[img_alt]' }}" placeholder="@lang('testimonial.img_alt')" class="form-control  pl-5 min-h-40px @error($locale . '.testimonial.img_alt') is-invalid @enderror" value="{{ old($locale . '.testimonial.img_alt') }}">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-custom">
        <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="col-form-label d-block">@lang('testimonial.image')</label>
                        @include('admin.components.image_create')
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('testimonial.index') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
