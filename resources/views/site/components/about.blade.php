    <!--about us-->
    <section class="about">

        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-img"><img class="img-fluid"
                                data-src="{{ asset($construction->image) }}" alt=""></div>
                        <div class="wow slideInUp about-content" data-wow-duration="1.3s" data-wow-delay=".3s">
                            <h2 class="top-title">{{ $construction->title }}</h2>
                            <p class="text-justify">{!! $construction->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-img"><img class="img-fluid"
                                data-src="{{ asset($renovation->image) }}" alt=""></div>
                        <div class="wow slideInUp about-content" data-wow-duration="1.3s" data-wow-delay=".3s">
                            <h2 class="top-title">{{ $renovation->title }}</h2>
                            <p class="text-justify">{!! $renovation->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-text wow slideInUp" data-wow-duration="1.3s" data-wow-delay=".4s">
                            <h4> <b>{{ $about->title }}</b></h4>
                            <p class="mt-3 text-justify">{!! $about->description !!} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us-->
