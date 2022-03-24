@extends('site.layouts.master')
@section('title')
    @lang('site.about')
@endsection
@section('content')
    @include('site.components.breadcrumb', ['breadcrumb' => trans('frontend.about')])

    <section class="our-mission">
        <div class="container">
            <div style="text-align:center">
                            <p>{!! $about->description !!} </p>
            </div>
            <div class="main-title">
                <div class="top-title mb-5">
                    <h2>{{ $mission->title }} </h2>
                </div>
            </div>
            <div class="mission-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our-mission-box">
                            <div class="mission-image"><img class="img-fluid" src="{{ asset($mission->image) }}"
                                    alt="our-mission"></div>
                            <div class="mission-box">
                                <h3>{{ $mission->title }}</h3>
                                <p>{!! $mission->description !!}
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="features">
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-md-5 p-0">
                        <div class="feature-image"><img class="img-fluid"
                                src="{{ asset('site') }}/images/feature/2.jpg" alt=""></div>
                    </div>
                    <div class="col-md-7">
                        <div class="feature-content">
                            @foreach ($features as $feature)
                                <div class="feature-box">
                                    <div class="icon"><img class="img-fluid"
                                            src="{{ asset($feature->icon) }}" alt="feature-img" srcset=""></div>
                                    <div class="text">
                                        <h4>{{ $feature->name }}</h4>
                                        <p>{!! $feature->description !!} </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('site.components.testimonial')

    @include('site.components.team')

    @include('site.components.partners')

    {{-- <section class="testimonial-section">
        <div class="container">
            <div class="container">
                <div class="main-title">
                    <div class="top-title mb-5">
                        <h2>Testimonials</h2>
                    </div>
                    <p>
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum
                        quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tem</p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="testis-info">
                                <div class="testis-box d-flex">
                                    <div class="testi-icon"><i class="bi bi-bar-chart"></i></div>
                                    <div class="testi-text">
                                        <h4>WE HAVE 15 YEARS EXPERIENCE</h4>
                                        <p>Adipisci velit, sed quia non numquam eius modi pora incidunt ut labore et dolore
                                            magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                </div>
                                <div class="testis-box d-flex">
                                    <div class="testi-icon"><i class="bi bi-box-arrow-in-up-right"></i></div>
                                    <div class="testi-text">
                                        <h4>WE HAVE 15 YEARS EXPERIENCE</h4>
                                        <p>Adipisci velit, sed quia non numquam eius modi pora incidunt ut labore et dolore
                                            magnam aliquam quaerat voluptatem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">PERFECT BLOG PLATFORM</button>
                                    </h2>
                                    <div class="accordion-collapse collapse show" id="collapseOne"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci
                                                semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida
                                                Pellentesque eros quis massa convallis feugiat eu quis urna.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">FULLY RESPONSIVE WORDPRESS THEME</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci
                                                semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida
                                                Pellentesque eros quis massa convallis feugiat eu quis urna.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">CAREFULLY CRAFTED ELEMENTS</button>
                                    </h2>
                                    <div class="accordion-collapse collapse" id="collapseThree"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci
                                                semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida
                                                Pellentesque eros quis massa convallis feugiat eu quis urna. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    @include('site.components.subscribe')
@endsection
