<section class="main-slider">
    <div class="main-slider-carousel owl-carousel owl-theme">
        @foreach ($sliders as $slider)
            <div class="slider-item"><img class="img-fluid" data-src="{{ asset($slider->image) }}"
                    alt="{{ $slider->title }}">
                <div class="item-details ">
                    <div class="container">
                        <div class="item-text">
                            <h1 class="title">{{ $slider->title }}</h1>
                            <p>{!! $slider->description !!}</p>
                            <div class="item-btn"><a class="btn"
                                    href="{{route('about')}}">{{ trans('frontend.more') }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>
<!--main slider-->
