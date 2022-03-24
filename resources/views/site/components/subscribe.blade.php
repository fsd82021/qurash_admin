<section class="subscribe">
    <div class="container">
        <div class="content">
            @if (app()->getLocale() == 'ar')
                <div class="row justify-content-end">
                @else
                    <div class="row ">
            @endif
            <div class="col-lg-6 p-0">
                <div class="contact-info wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".2s">
                    <div class="main-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0s">
                        <h3 class="heading">{{ $subscribe->title }}</h3>
                        <p>{!! $subscribe->description !!}</p>
                        <div class="contact-info-box d-flex align-items-center"> <b class="italic">
                                {{ $subscribe->video }}</b><span>@lang('frontend.or') </span>
                            <div class="item-btn"><a class="btn"
                                    href="{{ route('contacts') }}">@lang('frontend.more')</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
