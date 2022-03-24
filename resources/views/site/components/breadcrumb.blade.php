<section class="main-breadcrumb">
    <div class="container">
        <div class="content">
            <div class="breadcrumb-title">
                <h1> {{$breadcrumb}}</h1>
            </div>
            <div class="breadcrumb-navigation">
                <ul>
                    <li class="breadcrumb-item"> <a class="home" href="{{route('front')}}"><i
                                class="bi bi-house-fill"></i>{{trans('frontend.home')}}</a></li>
                    <li class="breadcrumb-item active"> {{$breadcrumb}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
