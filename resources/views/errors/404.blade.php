@extends('site.layouts.master')
@section('title')
    {{trans('frontend.page_not_found')}}
@endsection
@section('content')

@include('site.components.breadcrumb', ['breadcrumb' => trans('frontend.page_not_found')])

<div class="not-found">
    <div class="container">
      <div class="not-found-box">
        <div class="image"><img class="img-fluid" src="{{asset('site')}}/images/404/404-man.png" alt="not-found"></div>
        <div class="text">
          <h3>{{trans('frontend.not_found')}}</h3>
          <p>{{trans('frontend.not_found_desc')}}</p>
          <div class="item-btn mt-2"><a class="btn" href="{{route('front')}}"> {{trans('frontend.home')}} </a></div>
        </div>
      </div>
    </div>
  </div>


@endsection
