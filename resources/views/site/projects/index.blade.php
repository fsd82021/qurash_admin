@extends('site.layouts.master')
@section('title')
    @lang('frontend.projects')
@endsection
<style>
    section.intro-section {
    padding:  20px 0 50px !important;
}
   .projects-section {
    padding: 0 20px 0 50px !important;
}
.top-bar {
    padding:7px;
}
</style>
@section('content')
    <!--header-->
    @include('site.components.breadcrumb', ['breadcrumb' => trans('frontend.projects')])

    <section class="intro-section">
        <div class="container">
            <div class="main-title ">
                <div class="top-title mb-5">
                    <h2>{{ $project->title }}</h2>
                </div>
                <p>{!! $project->description !!}</p>
            </div>
        </div>
    </section>
    <section class="projects-section">
        <div class="container">
            <div class="projects-filter">
                <ul>
                    <li class="control" data-filter="all">@lang('frontend.all')</li>
                    @foreach ($categories as $category)
                        <li class="control" data-filter=".{{ trim(str_replace(' ', '_', $category->title)) }}">
                            {{ $category->title }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="projects-container">
                @foreach ($gallery as $gall)
                    <div class="mix {{ trim(str_replace(' ', '_', $gall->category->title)) }}">
                        <div class="filter-img"><img class="img-fluid" src="{{ asset($gall->image) }}"
                                alt="{{ $gall->img_alt }}" srcset="" style="height: 450px;">
                            <div class="filter-content">
                                <div class="content">
                                    <div class="filter-text">
                                        <h4>{{ $gall->title }}</h4>
                                        <p class="justify-content-center">{!! $gall->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>

    @include('site.components.subscribe')
@endsection
