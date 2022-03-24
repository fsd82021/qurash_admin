<!--clients-->
<section class="clients">
    <div class="container">
        <div class="main-title">
            <div class="top-title mb-5">
                <h2>{{ trans('frontend.partner') }} </h2>
            </div>
        </div>
        <div class="content">
            <div class="clients-carousel owl-carousel owl-theme">
                @foreach ($partners as $partner)
                    <div class="item"><img class="img-fluid" data-src="{{ asset($partner->image) }}"
                            alt="{{ $partner->img_alt }}"></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--clients-->
