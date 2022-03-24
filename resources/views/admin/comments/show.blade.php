@extends('admin.components.form')
@section('module_name', trans('comments.comments'))
@section('page_type', trans('general.show'))
@section('title') @lang('comments.comments') @endsection

@section('fields_content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.show')</h3>
            </div>
        </div>
        <div class="card-body p-10">
            <div class="tab-content">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('comments.comment'):</h5>
                            </div>
                            <p class="m-0">{{ $data->comment }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('comments.recipe_title'):</h5>
                            </div>
                            <p class="m-0">{{ $data->recipe->title }}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('comments.email'):</h5>
                            </div>
                            <p class="m-0">{{ $data->email}}</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('comments.user_name'):</h5>
                            </div>
                            <p class="m-0">{{ $data->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
