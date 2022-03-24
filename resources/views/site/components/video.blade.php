    <!--video -->
    <section class="video">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="video-box"><a data-fancybox
                            href="{{$video->video}}"><img
                                src="{{asset($video->image)}}"></a></div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="video-text">
                        <h2>{{$video->title}}</h2>
                        <p>
                            {!! $video->description !!}
                        </p>
                        <div class="item-btn mt-5"><a class="btn" href="{{route('contacts')}}">{{trans('frontend.more')}}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
