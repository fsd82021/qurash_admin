<!--projects-->
<section class="projects">
    <div class="container">
        <div class="top-title mb-5">
            <h3>{{trans('frontend.last_project')}}</h3>
        </div>
        <div class="controls">
            <button class="control" style="margin:10px" type="button" data-filter="all">@lang('frontend.all')</button>
            @foreach ($categories as $category)
                <button class="control" style="margin:10px" type="button"
                    data-filter=".{{ trim(str_replace(' ', '_', $category->title)) }}">{{ $category->title }}</button>
            @endforeach

        </div>
    </div>
    <div class="container-fluid custom-container">
        <div class="filter-data">
            @foreach ($gallery as $gall)
                <div class="mix {{ trim(str_replace(' ', '_', $gall->category->title)) }}">
                    <div class="filter-img"><img class="img-fluid" src="{{asset($gall->image)}}" alt="{{$gall->img_alt}}" srcset="">
                        <div class="filter-content">
                            <div class="content">
                                <div class="search-icon"><a href="{{asset($gall->image)}}" data-fancybox="group2"><i
                                            class="bi bi-search"></i></a></div>
                                <div class="filter-text">
                                    <h4>{{$gall->title}}</h4>
                                    <p>{!!$gall->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="view-all text-center">
            <div class="item-btn"><a class="btn" href="{{route('projects')}}">{{ trans('frontend.more') }}</a></div>
        </div>
    </div>
</section>
