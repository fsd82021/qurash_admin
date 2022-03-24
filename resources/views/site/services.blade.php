@extends('site.layouts.master')
@section('title')
    {{ $servicePage->title }}
@endsection
@section('content')
    <!--header-->
    @include('site.components.breadcrumb', ['breadcrumb' =>$servicePage->title])

    <section class="services services-page">
        <div class="container">
            <div class="top-title mb-5">
                <p>{!! $servicePage->description !!}</p>
            </div>
            <div class="content">
                <div class="row align-items-start justify-content-between">
                    <div class="col-md-3 col-sm-12">
                        <div class="nav flex-column nav-pills  wow slideInRight" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            @foreach ($services as $key => $service)
                                <button class="nav-link @if ($key == 0) active @endif"
                                    id="the-{{ $key }}-tab" data-bs-toggle="pill"
                                    data-bs-target="#the-{{ $key }}" type="button" role="tab"
                                    aria-controls="the-{{ $key }}" aria-selected="true"> <i
                                        class="bi bi-arrow-right"></i>{{ $service->title }}</button>
                            @endforeach

                        </div>

                        <div class="serv-img"><img class="img-fluid" src="{{ asset($lastService->image) }}"
                                alt="{{ $lastService->title }}" srcset="{{ asset($lastService->image) }}">
                            <div class="img-text">
                                <h4>{{ $lastService->title }}</h4>
                            </div>
                        </div>
                          <div class="download-service">
                              <div class="top-title">
                                <h5>@lang('frontend.download') </h5>
                              </div>
                              <div class="download-box d-flex"><a class="d-flex" href="{{asset(settings()->brochure)}}" download><i class="bi bi-download"></i>
                                  <p>@lang('frontend.profile_download') </p></a></div>
                            </div>

                    </div>
                    <div class="col-md-8 tab-content wow slideInLeft" id="v-pills-tabContent">
                        @foreach ($services as $k => $serv)
                            <div class="tab-pane fade @if ($k == 0) show active @endif"
                                id="the-{{ $k }}" role="tabpanel" aria-labelledby="the-{{ $k }}-tab">
                                <div class="tab-grid">
                                    <div class="service-grid">
                                        <div class="img-left"><img class="img-fluid"
                                                src="{{ asset($serv->image) }}" alt="{{ $serv->title }}"></div>
                                    </div>
                                    <div class="repairing-section">
                                        <div class="text justify-content-center">
                                            <h4>{{ $serv->title }} </h4>
                                            <p>{!! $serv->description !!}
                                            </p>
                                        </div>
                                        <div class="tab-img"><img
                                                src="{{ asset('site') }}/images/services/man.png" alt="serv-man"></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('site.components.subscribe')
@endsection
