@extends('admin.components.form')
@section('module_name', trans('faq.faq'))
@section('page_type', trans('general.show'))
@section('title') @lang('faq.faq') @endsection
@section('index_route', route('faq.index'))

@section('fields_content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.show')</h3>
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
        <div class="card-body p-10">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 mb-5">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">@lang('faq.question'):</h5>
                                    </div>
                                    <p class="m-0">{{ $data->translate($locale)->question }}</p>
                                </div>
                            </div>
                            <div class="col-md-6 mb-5">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">@lang('faq.answer'):</h5>
                                    </div>
                                    <div>{{  $data->translate($locale)-> answer  }}</div>
                                </div>
                            </div>
                          
                          
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-custom card-stretch gutter-b">
   
    </div>
@endsection
