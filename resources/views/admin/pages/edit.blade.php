@extends('admin.components.form')
@section('module_name', trans('pages.'.$data->identifier))
@section('page_type', trans('general.edit'))
@section('title') @lang('pages.pages') @endsection
@section('index_route', route('page.index'))
@section('store_route', route('page.update', $data))
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
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                        role="tabpanel">
                        <div class="form-group">
                            <label>@lang('pages.title') - @lang('general.'.$locale)<span class="text-danger"> *
                                </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[title]' }}" placeholder="@lang('pages.title')"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                    value="{{ old($locale . '.title', $data->translate($locale)->title) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('pages.description') - @lang('general.'.$locale)<span class="text-danger"> *
                                </span></label>
                            <textarea name="{{ $locale . '[description]' }}"
                                @error($locale . '.description') is-invalid @enderror
                                class="{{ $locale }}-kt-ckeditor-5">
                                    {{ old($locale . '.description', $data->translate($locale)->description) }}
                                </textarea>
                        </div>
                        @if ($haveImage)
                            <div class="form-group">
                                <label>@lang('pages.img_alt') - @lang('general.'.$locale)<span class="text-danger"> *
                                    </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                    </div>
                                    <input type="text" name="{{ $locale . '[img_alt]' }}"
                                        placeholder="@lang('pages.img_alt')"
                                        class="form-control  pl-5 min-h-40px @error($locale . '.img_alt') is-invalid @enderror"
                                        value="{{ old($locale . '.img_alt', $data->translate($locale)->img_alt) }}">
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                @if (request()->route()->getName() == 'page.video')
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('pages.video') <span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="video" id="video" class="form-control  pl-5 min-h-40px"
                                    value="{{ $data->video }}">
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('general.phone') <span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="video" id="video" class="form-control  pl-5 min-h-40px"
                                    value="{{ $data->video }}">
                            </div>
                        </div>
                    </div>
                @endif
                @if ($haveImage)
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="col-form-label d-block">@lang('general.image')</label>
                            @if (isset($data->image))
                                @include('admin.components.image_edit')
                            @endif
                        </div>
                    </div>
                @endif

            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('page.index') }}"
                class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
