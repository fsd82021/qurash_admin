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

    <!--recipes page-->
    <section class="recipes recipes-page">
        <div class="container">
            <div class="recipes-content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="sidebar-widget">
                            <div class="filter-recipes">
                                <form method="GET">
                                    <div class="recipe-dropdowns">
                                        <div class="subtitle">
                                            <h3>@lang('site.recipe_type')</h3>
                                        </div>
                                        <div class="form-group position-relative">
                                            <div class="input-group has-validation">
                                                <select class="select" name="category" placeholder="select">
                                                    <option value="" selected>@lang('site.all')</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipe-dropdowns">
                                        <div class="subtitle">
                                            <h3>@lang('site.recipe_kitchen')</h3>
                                        </div>
                                        <div class="form-group position-relative">
                                            <div class="input-group has-validation">
                                                <select class="select" name="kitchen" placeholder="select">
                                                    <option value="" selected>@lang('site.all')</option>
                                                    @foreach ($kitchenTypes as $kitchen)
                                                        <option value="{{ $kitchen->id }}">{{ $kitchen->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipe-buttons">
                                        <button class="btn submit" id="filterRecipes" type="submit"><i class="bi bi-search"></i>@lang('site.search')</button>
                                        {{-- <button class="btn btn-outline-light reset" type="reset">reset</button> --}}
                                    </div>
                                </form>
                            </div>
                            <div class="tags">
                                <div class="subtitle">
                                    <h3>@lang('site.categories')</h3>
                                </div>
                                @foreach ($categories as $key => $category)
                                    <a href="{{ route('site.category.recipes', $category->id) }}">{{ $category->title }} <span class="badge badge-pill badge-danger">{{ $category->recipe->count() }}</span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <h4 class="nothing" style="display: none">@lang('site.no_data_found')</h4>
                        <div class="row search_result">
                            @foreach ($recipes as $key => $recipe)
                                <div class="col-lg-6 col-md-6">
                                    <div class="recipe-box">
                                        <div class="image">
                                            <a href="{{ route('site.recipes.details', $recipe->id) }}">
                                                <img class="img-fluid" data-src="{{ asset($recipe->image) }}" alt="{{ $recipe->image_alt }}">
                                            </a>
                                            @auth
                                                <form method="POST">
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
                                                <div class="single"><i class="bi bi-calendar-event"></i><span>{{ $recipe->date }}</span></div>
                                                <div class="single"><i class="bi bi-eye"></i><span>{{ count($recipe->view) }} @lang('site.views')</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {!! $recipes->links('admin.components.pagination.default') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--recipes page-->

    <!--search script ajax-->
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                function filtration(selectCategoryVal, selectKitchenVal="") {
                    selectCategoryVal = selectCategoryVal || '';
                    selectKitchenVal = selectKitchenVal || '';
                    $.ajax({
                        url: "{{ route('site.search-recipes') }}",
                        method: "get",
                        data: {
                            selectCategoryVal: selectCategoryVal,
                            selectKitchenVal: selectKitchenVal,
                        },
                        type: "json",
                        success: function(data) {
                            var originUrl = window.location.href;
                            // var hrefUrl = window.location.href.slice(0,-3);
                            console.log(data);

                            $(".recipes .search_result").empty();
                            $.each(data, function(index, value) {
                                if (value.recipe.length !== 0) {
                                    $(".recipes .nothing").fadeOut(0);
                                    for (var i = 0; i < value.recipe.length; i++) {
                                        $(".search_result").append(`<div class="col-lg-6 col-md-6">
                                            <div class="recipe-box">
                                                <div class="image">
                                                    <a href="${originUrl}/${value.recipe[i].id}">
                                                        <img class="img-fluid" src="${value.recipe[i].image}" alt="${value.recipe[i].image_alt}">
                                                    </a>
                                                    @auth
                                                        <form>
                                                            @csrf
                                                            @php
                                                                $check = checkFavoriate($recipe->id);
                                                            @endphp
                                                            <button class="fav-btn favoriteBtn {{ $check ? 'added' : '' }}" type="button" title="@lang('site.favorite')">
                                                                <input type="hidden" name="favorite" value="${value.recipe[i].id}">
                                                                <i class="bi bi-heart{{ $check ? '-fill' : '' }}"></i>
                                                            </button>
                                                        </form>
                                                    @endauth
                                                </div>
                                                <div class="text">
                                                    <a href="${originUrl}/${value.recipe[i].id}">
                                                        <h3 class="subtitle">${value.recipe[i].title}</h3>
                                                    </a>
                                                    <div class="details">${value.recipe[i].description.replace(/<\/?[^>]+>/gi, '')}</div>
                                                    <hr>
                                                    <div class="meta">
                                                        <div class="single"><i class="bi bi-calendar-event"></i><span>${value.recipe[i].date}</span></div>
                                                        <div class="single"><i class="bi bi-eye"></i><span>${value.views[i]} @lang('site.views')</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`);
                                    }
                                } else {
                                    $(".recipes .nothing").fadeIn(100);
                                }
                            });
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }
                $(document).on("click", "#filterRecipes", function(e) {
                    e.preventDefault();
                    var selectCategoryVal = $("select[name='category']").val();
                    var selectKitchenVal = $("select[name='kitchen']").val();
                    filtration(selectCategoryVal, selectKitchenVal);
                    console.log(selectCategoryVal, selectKitchenVal);
                });
            });
        </script>
    @endpush
    <!--search script ajax-->
@endsection
