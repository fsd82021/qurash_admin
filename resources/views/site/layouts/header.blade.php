<!DOCTYPE html>
@if (app()->getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en">
@endif

<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ settings()->meta_description }}">
    <meta property="og:title" content="">
    <meta property="og:type" content="The type">
    <meta property="og:url" content="http://url.com/">
    <meta property="og:image" content="http://image.jpg">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="{{ settings()->meta_keywords }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset(settings()->logo) }}">
    <style>
        body .main-wrapper {
            position: relative;
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            }

    </style>
    <!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js">
</script>
<![endif]-->
    <title>
        @yield('title')
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @if (app()->getLocale() == 'en')
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&amp;family=Open+Sans&amp;display=swap"
            rel="stylesheet">
    @else
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;400&amp;display=swap" rel="stylesheet">
    @endif
    <link rel="stylesheet" href="{{ asset('site') }}/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <!--PreLoader-->
        <div class="loader">
            <video width="auto" height="auto" muted autoplay loop>
                <source src="{{ asset('site') }}/video/loading.webm" type="video/mp4">
                <source src="{{ asset('site') }}/videos/video.ogg" type="video/ogg">Your browser does not support the
                video tag.
            </video>
        </div>
        <!--header-->
        <section class="top-bar">
            <div class="container">
                <div class="content">
                    <div class="contact-info">
                        <ul>
                            <li><a href="javascript:void(0)"> <i class="bi bi-geo-alt-fill"></i>
                                    <p> {{ settings()->address }} </p>
                                </a></li>
                            <li> <a href="mailto:{{ settings()->email }}"><i class="bi bi-envelope"></i>
                                    <p> {{ settings()->email }} </p>
                                </a></li>
                            <li> <a href="tel:{{ settings()->phone }}"><i class="bi bi-telephone"></i>
                                    <p> {{ settings()->phone }} </p>
                                </a></li>
                        </ul>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li> <a target="_black" href="{{ settings()->facebook }}"><i class="bi bi-facebook">
                                    </i></a></li>
                            <li> <a target="_black" href="{{ settings()->twitter }}"><i class="bi bi-twitter">
                                    </i></a></li>
                            <li> <a target="_black" href="{{ settings()->instagram }}"><i
                                        class="bi bi-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <header>
            <!--navbar desktop-->
            <div class="search-box">
                <div class="container">
                    <div class="form-search">
                        <form>
                            <input class="form-control" type="text" placeholder="Search Here ..." aria-label="Search">
                            <button type="submit"> <i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <nav class="navbar main-nav navbar-expand-lg">
                <div class="container">
                    <div class="logo-section"><a class="navbar-brand" href="{{ route('front') }}"> <img
                                class="img-fluid" data-src="{{ asset(settings()->logo) }}" alt=""></a></div>
                    <div class="group">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <div class="hamburger-menu"><span></span><span></span><span></span></div>
                        </button>
                        <div class="lang">
                            <div class="dropdown">
                                <button class="dropdown-toggle" id="langDropdown" type="button"
                                    data-bs-toggle="dropdown">
                                    <div class="icon">
                                        @if (app()->getLocale() == 'ar')
                                            <img class="h-20px w-20px pr-2 rounded-sm"
                                                src="{{ asset('admin/assets/media/svg/flags/ar.svg') }}"
                                                alt=""><span>العربية</span>
                                        @else
                                            <img class="h-20px w-20px pr-2 rounded-sm"
                                                src="{{ asset('admin/assets/media/svg/flags/en.svg') }}"
                                                alt=""><span>English</span>
                                        @endif
                                    </div>
                                </button>
                                <ul class="lang-content dropdown-menu" aria-labelledby="langDropdown">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                <img class="h-20px w-20px pr-2 rounded-sm"
                                                    src="{{ asset('admin/assets/media/svg/flags/' . $localeCode . '.svg') }}"
                                                    alt="{{ $localeCode }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ Route::is('front') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('front') }}" role="button">{{ trans('frontend.home') }}</a>
                            </li>
                            <li class="nav-item {{ Route::is('about') ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('about') }}">{{ trans('frontend.about') }}</a></li>
                            <li class="nav-item {{ Route::is('services') ? 'active' : '' }}"><a
                                    class="nav-link"
                                    href="{{ route('services') }}">{{ trans('frontend.services') }}</a></li>
                            <li class="nav-item {{ Route::is('projects') ? 'active' : '' }}"><a
                                    class="nav-link"
                                    href="{{ route('projects') }}">{{ trans('frontend.projects') }} </a>
                            </li>
                            <li class="nav-item {{ Route::is('contacts') ? 'active' : '' }}"><a
                                    class="nav-link"
                                    href="{{ route('contacts') }}">{{ trans('frontend.contacts') }} </a>
                            </li>
                        </ul>
                        {{-- <ul class="header-icon d-flex">
                            <li class="header-search"><a href="#"><i class="bi bi-search rounded-circle"> </i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </nav>
            <!--navbar desktop-->
            <!--side menu in mobile only-->
            <div class="offcanvas offcanvas-start" id="side_menu" data-bs-scroll="true" tabindex="-1"
                aria-labelledby="side_menu_label">
                <div class="offcanvas-header">
                    <button class="btn-close btn-close-dark" type="button" data-bs-dismiss="offcanvas"
                        data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar">
                        <div class="collapsed navbar-collapse" id="navbarNavSide">
                            <ul class="navbar-nav">
                                <li class="nav-item {{ Route::is('front') ? 'active' : '' }}"><a
                                        class="nav-link" aria-current="page"
                                        href="{{ route('front') }}">{{ trans('frontend.home') }}</a></li>
                                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('about') }}">{{ trans('frontend.about') }}</a></li>
                                <li class="nav-item {{ Route::is('projects') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('projects') }}">{{ trans('frontend.projects') }}
                                    </a></li>
                                <li class="nav-item {{ Route::is('services') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('services') }}">{{ trans('frontend.services') }}</a>
                                </li>
                                <li class="nav-item {{ Route::is('contacts') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('contacts') }}">{{ trans('frontend.contacts') }}</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">@lang('frontend.language')</a>
                                    <ul class="dropdown-menu">
                                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a class="dropdown-item" rel="alternate"
                                                    hreflang="{{ $localeCode }}"
                                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}</a>

                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header-->
