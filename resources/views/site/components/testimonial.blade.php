<!--testimonial-->
<section class="testimonial">
    <div class="container">
        <div class="main-title">
            <div class="top-title mb-5">
                <h2>{{ trans('frontend.testimonial') }}</h2>
            </div>
        </div>
        <div class="content">
            <div class="testimonial-carousel owl-carousel owl-theme">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-box">
                        <div class="image"><a href="single-blog.html"> <img class="img-fluid"
                                    data-src="{{asset($testimonial->image)}}" alt="{{$testimonial->img_alt}}"></a></div>
                        <div class="details">
                            <div class="text">
                                <h3>{{$testimonial->name}}</h3>
                            </div>
                            <p>{!!$testimonial->description !!}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
