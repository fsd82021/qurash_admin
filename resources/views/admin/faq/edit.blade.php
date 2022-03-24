@extends('admin.components.form')
@section('module_name', trans('faq.faq'))
@section('page_type', trans('general.edit'))
@section('title') @lang('faq.faq') @endsection
@section('index_route', route('faq.index'))
@section('store_route', route('faq.update', $data))
@section('form_type', 'POST')

@section('fields_content')
    @method('put')
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.edit')</h3>
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
                            <label>@lang('faq.question') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[question]' }}" placeholder="@lang('faq.question')" class="form-control  pl-5 min-h-40px @error($locale . '.question') is-invalid @enderror" value="{{ old($locale . '.question', $data->translate($locale)->question) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('faq.answer') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[answer]' }}" placeholder="@lang('faq.answer')" class="form-control  pl-5 min-h-40px @error($locale . '.answer') is-invalid @enderror" value="{{ old($locale . '.answer', $data->translate($locale)->answer) }}">
                            </div>
                        </div>
                       
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-custom">
     
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('faq.index') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
