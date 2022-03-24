<!--team-->
<section class="team">
    <div class="container">
        <div class="main-title">
            <div class="top-title mb-5">
                <h2>{{ trans('frontend.team_work') }}</h2>
            </div>
        </div>
        <div class="content">
            <div class="team-carousel owl-carousel owl-theme">
                @foreach ($team_members as $member)
                    <div class="testimonial-box">
                        <div class="image"><img class="img-fluid" data-src="{{asset($member->image)}}" alt=""></div>
                        <div class="details">
                            <div class="text">
                                <h3>{{$member->name}}</h3>
                            </div>
                            <p>{!! $member->description!!}
                            </p>
                            <div class="team-social">
                                <ul class="d-flex">
                                    <li> <a target="_blank" class="bi bi-facebook" href="{{$member->facebook_link}}"> </a></li>
                                    <li> <a target="_blank" class="bi bi-twitter" href="{{$member->twitter_link}}"> </a></li>
                                    <li> <a target="_blank" class="bi bi-instagram" href="{{$member->instagram_link}}"> </a></li>
                                    <li> <a target="_blank" class="bi bi-linkedin" href="{{$member->linkedin_link}}"> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
