@extends('site.layouts.master')

@section('title')
    @lang('site.home')
@endsection

@section('content')
    <!--main slider-->
    @include('site.components.slider')

    @include('site.components.about')

    @include('site.components.service_page')

    @include('site.components.projects')

    @include('site.components.video')

    @include('site.components.construct')

    @include('site.components.testimonial')

    @include('site.components.team')

    @include('site.components.partners')

    @include('site.components.subscribe')
@endsection
