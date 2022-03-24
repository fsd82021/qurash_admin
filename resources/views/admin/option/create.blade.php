@extends('admin.components.form')
{{-- Preparing page properties --}}
@section('module_name', trans('service.option'))
@section('index_route', getRoute('service.index'))
@section('store_route', route('option.store'))
@section('page_type', trans('general.add_new'))
@section('form_type', 'POST')
@section('title') @lang('service.option') @endsection
{{-- Fields --}}
@section('fields_content')
    <div class="card card-custom">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.add_new')</h3>
            </div>
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    @foreach (config('translatable.locales') as $key => $locale)
                        <li class="nav-item">
                            <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                href="{{ '#' . $locale }}">@lang('general.'.$locale)</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                    @foreach (config('translatable.locales') as $key => $locale)
                     <input type="hidden" name="service_id" value="{{$service_id}}">
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}" role="tabpanel">
                        <div class="form-group">
                            <label>@lang('service.value') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[value]' }}" id="{{ $locale . '[value]' }}" placeholder="@lang('service.value')" class="form-control pl-5 min-h-40px @error($locale . '.value') is-invalid @enderror" value="{{ old($locale . '.value') }}">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="card card-custom">
            <div class="card-footer text-center">
                <button type="submit" class="btn btn-light-success active">
                    <i class="far fa-save fa-sm"></i>
                    @lang('general.save')
                </button>
            </div>
        </div>

    @endsection
