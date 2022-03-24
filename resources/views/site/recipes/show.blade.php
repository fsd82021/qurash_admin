@extends('site.layouts.master')
@section('title')
    @lang('site.recipes')
@endsection
@section('content')
    <!--breadcrumb-->
    <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('{{ asset('site') }}/images/bgs/broad.jpg')">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>@lang('site.recipes')</h2>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url(app()->getLocale()) }}">@lang('site.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('site.recipes')</li>
                </ol>
            </nav>
        </div>
    </nav>
    <!--breadcrumb-->

    <!--single recipe page-->
    <section class="single-recipe-page">
        <div class="container">
            <div class="single-recipe-content">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="single-recipe-box">
                            <div class="image">
                                <img class="img-fluid" data-src="{{ asset($recipe->image) }}" alt="{{ $recipe->image_alt }}">
                            </div>
                            <div class="text">
                                <h3 class="title">{{ $recipe->title }}</h3>
                                <div class="details">{!! $recipe->description !!}</div>
                            </div>
                            <div class="meta">
                                <div class="single"><i class="bi bi-calendar-event"></i><span>{{ $recipe->date }}</span></div>
                                <div class="single"><i class="bi bi-check2"></i><span>{{ count($recipe->view) }} @lang('site.views')</span></div>
                            </div>
                            <hr>
                            <div class="ingredients">
                                <h3 class="subtitle">@lang('site.ingredients')</h3>
                                {!! $recipe->ingredients !!}
                            </div>
                            <div class="instructions">
                                <h3 class="subtitle">@lang('site.instructions')</h3>
                                {!! $recipe->instructions !!}
                            </div>
                            <hr style="margin-top: 150px;">
                            <div class="comments-list">
                                @if ($recipe->comment->count() > 0)
                                    <h4 class="comment-title">{{ $recipe->comment->count() }} @lang('site.comments')</h4>
                                @endif
                                <ul class="comments_list_ul">
                                    @foreach ($comments as $comment)
                                        <li class="comment-item">
                                            @if (isset($comment->users->image))
                                                <img data-src="{{ asset($comment->users->image) }}" alt="comment author">
                                            @else
                                                <img data-src="{{ asset('admin') }}/assets/media/users/blank.png" alt="">
                                            @endif
                                            <div class="comment-body">
                                                <h5>{{ $comment->name }}</h5><span>{{ $comment->created_at }}</span>
                                                <p>{{ $comment->comment }}</p>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @auth
                                <div class="comment-form">
                                    <div class="alert alert-danger alert-dismissible fade show failedMessage" style="display: none" role="alert">
                                        <ul></ul>
                                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    <form id="commentsForm">
                                        @csrf
                                        <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input class="form-control" name="name_user" value="{{ auth()->user()->name }}" type="hidden" placeholder="Full Name">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input class="form-control" name="email" value="{{ auth()->user()->email }}" type="hidden" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" name="comment" placeholder="@lang('site.type_your_comment')" rows="7"></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-form">
                                            <button class="btn primary" id="commentBtn" type="button" name="button">@lang('site.send')</button>
                                            <span class="successMessage" style="display: none">
                                                <i class="bi bi-hand-thumbs-up"></i> @lang('site.comment_has_been_sent')
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            @endauth
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sidebar-widget">
                            <div class="tags">
                                <div class="subtitle">
                                    <h3>@lang('site.categories')</h3>
                                </div>
                                @foreach ($categories as $key => $category)
                                    <a href="{{ route('site.category.recipes', $category->id) }}">{{ $category->title }} <span class="badge badge-pill badge-danger">{{ $category->recipe->count() }}</span></a>
                                @endforeach
                            </div>
                            <div class="relative-recipes">
                                @foreach ($all_recipes as $key => $recipe)
                                    <div class="relative-recipe-box">
                                        <div class="image"><img class="img-fluid" data-src="{{ asset($recipe->image) }}" alt="{{ $recipe->image_alt }}"></div>
                                        <div class="text">
                                            <a href="{{ route('site.recipes.details', $recipe->id) }}">
                                                <h3 class="subtitle">{{ $recipe->title }}</h3>
                                                <div class="details">{!! $recipe->description !!}</div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--single recipe page-->

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on("click", "#commentBtn", function(e) {
                    e.preventDefault();
                    var _token = $("input[name='_token']").val();
                    var recipe_id = $("input[name='recipe_id']").val();
                    var user_id = $("input[name='user_id']").val();
                    var name = $("input[name='name_user']").val();
                    var email = $("input[name='email']").val();
                    var comment = $("textarea[name='comment']").val();

                    $.ajax({
                        url: "{{ route('site.send-comment') }}",
                        type: "POST",
                        data: {
                            _token: _token,
                            recipe_id: recipe_id,
                            user_id: user_id,
                            name: name,
                            email: email,
                            comment: comment
                        },

                        success: function(data) {
                            $.each(data, function(index, value) {
                                $(".comments_list_ul").append(`<li class="comment-item">
                                    @if (isset($comment->users->image))
                                        <img src="{{ asset($comment->users->image) }}" alt="comment author">
                                    @else
                                        <img src="{{ asset('admin') }}/assets/media/users/blank.png" alt="">
                                    @endif
                                    <div class="comment-body">
                                        <h5>${value.comment_data.name}</h5><span>${value.comment_data.created_at}</span>
                                        <p>${value.comment_data.comment}</p>
                                        {{-- <a class="reply-link" href="#!"> Reply </a> --}}
                                    </div>
                                </li>`);

                                $('.successMessage').css('display', 'block');
                                $("#commentsForm")[0].reset();
                                $('.failedMessage').css('display', 'none');
                            });
                        },
                        error: function(error) {
                            $(".alert-danger").find("ul").html('');
                            $('.failedMessage').css('display', 'block').delay(5000).fadeOut();
                            $(".successMessage").css('display', 'none');

                            $.each(error.responseJSON.errors, function(key, value) {
                                $(".alert-danger").find("ul").append('<li><i class="bi bi-exclamation-circle"></i> ' + value +
                                    '</li>');

                                setTimeout(() => {

                                    $(".alert-danger").fadeOut();
                                    console.log("test");
                                }, 5000);
                            });
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
