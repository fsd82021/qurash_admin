@extends('admin.layouts.master')

@section('content')
    <style>
        i {
            font-size: 2.25rem;
            color: #000000;
        }

    </style>
    {{-- <div class="row justify-content-center align-items-center h-100" style="text-align: center;margin: 0 auto;">
        <div class="page-content m-atuo text-center">
            <img style="width: 450px;" src="{{ asset(settings()->logo) }}" class="img-fluid logo">
            <h2 style="font-size: 40px;" class="text-capitalize">@lang('general.hi') {{ auth()->user()->name }}</h2>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-xl-4">
            <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                <div class="card-body">
                    <i class="flaticon-folder"></i>
                    <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $categories_count }}</span>
                    <span class="font-weight-bold font-size-sm">@lang('service.service')</span>
                </div>
            </div>
        </div>
        <!--<div class="col-xl-4">-->
        <!--    <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">-->
        <!--        <div class="card-body">-->
        <!--            <i class="fas fa-question"></i>-->
        <!--            <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $faq_count }}</span>-->
        <!--            <span class="font-weight-bold font-size-sm">@lang('faq.faq')</span>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="col-xl-4">
            <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                <div class="card-body">
                    <i class="flaticon-earth-globe"></i>
                    <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $features_count }}</span>
                    <span class="font-weight-bold font-size-sm">@lang('feature.feature')</span>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-4">
            <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                <div class="card-body">
                    <i class="fas fa-camera"></i>
                    <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $galleries_count }}</span>
                    <span class="font-weight-bold font-size-sm">@lang('general.aside.gallery')</span>
                </div>
            </div>
        </div> --}}
        <div class="col-xl-4">
            <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                <div class="card-body">
                    <i class="fas fa-photo-video"></i>
                    <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $sliders_count }}</span>
                    <span class="font-weight-bold font-size-sm">@lang('slider.slider')</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                <div class="card-body">
                    <i class="fas fa-users-cog"></i>
                    <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $teams_count }}</span>
                    <span class="font-weight-bold font-size-sm">@lang('team.team')</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                <div class="card-body">
                    <i class="fas fa-comment"></i>
                    <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $testimonials_count }}</span>
                    <span class="font-weight-bold font-size-sm">@lang('testimonial.testimonial')</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-custom card-stretch gutter-b wave wave-primary wave-animate-slow">
                <div class="card-body">
                    <i class="flaticon-email"></i>
                    <span class="card-title font-weight-bolder text-dark-75 font-size-h1 mb-0 mt-6 d-block">{{ $contacts_count }}</span>
                    <span class="font-weight-bold font-size-sm">@lang('contact.contact')</span>
                </div>
            </div>
        </div>
    </div>
@endsection
