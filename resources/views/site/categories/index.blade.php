@extends('site.layouts.master')
@section('title')
    @lang('site.categories')
@endsection
@section('content')
    <!--breadcrumb-->
    <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('{{ asset('site') }}/images/bgs/broad.jpg')">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>@lang('site.categories')</h2>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">@lang('site.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('site.categories')</li>
                </ol>
            </nav>
        </div>
    </nav>
    <!--breadcrumb-->

    <!--categories-->
    <section class="categories">
        <div class="container">
            <div class="categories-content">
                <div class="row">
                    @foreach ($categories as $key => $category)
                        <div class="col-lg-3 col-md-6">
                            <div class="category-outer">
                                <a href="{{ route('site.category.recipes', $category->id) }}">
                                    <div class="category-inner">
                                        <div class="icon">
                                            <img class="img-fluid" data-src="{{ asset($category->image) }}" alt="{{ $category->image_alt }}">
                                        </div>
                                        <div class="text">
                                            <h3 class="subtitle">{{ $category->title }}</h3>
                                            <p class="sum">
                                                {{ $category->recipe->count() }} @lang('site.post')
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <h4 class="nothing">no notifications !</h4> --}}
            </div>
        </div>
    </section>
    <!--categories-->
@endsection
