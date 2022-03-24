@extends('site.layouts.master')
@section('title')
    @lang('site.recipes')
@endsection
@section('content')
    <!--breadcrumb-->
    <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('{{ asset('site') }}/images/bgs/broad.jpg')">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>@lang('site.recipes')</h2>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">@lang('site.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('site.recipes')</li>
                </ol>
            </nav>
        </div>
    </nav>
    <!--breadcrumb-->

    <!--recipes-->
    <section class="recipes">
        <div class="container">
            <div class="recipes-content">
                <div class="row">
                    @if (count($recipes) > 0) 
                        @foreach ($recipes as $key => $recipe)
                            <div class="box col-lg-4 col-md-6">
                                <div class="recipe-box">
                                    <div class="image">
                                        <a href="{{ route('site.recipes.details', $recipe->id) }}">
                                            <img class="img-fluid" data-src="{{ asset($recipe->image) }}" alt="{{ $recipe->image_alt }}">
                                        </a>
                                        @auth
                                            <form>
                                                @csrf
                                                @php
                                                    $check = checkFavoriate($recipe->id);
                                                @endphp
                                                <button class="fav-btn favoriteBtn {{ $check ? 'added' : '' }}" type="submit" title="@lang('site.favorite')">
                                                    <input type="hidden" name="favorite" value="{{ $recipe->id }}">
                                                    <i class="bi bi-heart{{ $check ? '-fill' : '' }}"></i>
                                                </button>
                                            </form>
                                        @endauth
                                    </div>
                                    <div class="text">
                                        <a href="{{ route('site.recipes.details', $recipe->id) }}">
                                            <h3 class="subtitle">{{ $recipe->title }}</h3>
                                        </a>
                                        <div class="details">{!! $recipe->description !!}</div>
                                        <hr>
                                        <div class="meta">
                                            <div class="single">
                                                <i class="bi bi-calendar-event"></i>
                                                <span>{{ $recipe->date }}</span>
                                            </div>
                                            <div class="single"><i class="bi bi-eye"></i><span>{{ count($recipe->view) }} @lang('site.views')</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h4 class="nothing">@lang('site.no_data_found')</h4>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--recipes-->
@endsection
