<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Error Page - 6 | Keenthemes</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="" />
    @if (app()->getLocale() == 'ar')
        <link href="{{ asset('admin') }}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/header/base/light.rtl.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/header/menu/light.rtl.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/brand/dark.rtl.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/aside/dark.rtl.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" />
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'El Messiri', Courier, monospace
            }

        </style>
    @else
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="{{ asset('admin') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    @endif
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('admin') }}/assets/css/pages/error/error-6.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <link rel="shortcut icon" href="{{ asset('admin') }}/assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Error-->
        <div class="error error-6 d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url({{ asset('admin') }}/assets/media/error/bg6.jpg);">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-row-fluid text-center">
                <h1 class="error-title font-weight-boldest text-white mb-12" style="margin-top: 12rem;">@lang('general.oops')</h1>
                <p class="display-4 font-weight-bold text-white">@lang('general.error403')</p>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Error-->
    </div>
    <!--end::Main-->

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('admin') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('admin') }}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="{{ asset('admin') }}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
</body>
<!--end::Body-->

</html>
