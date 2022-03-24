@extends('site.layouts.master')
@section('title')
    @lang('site.contact')
@endsection
@section('content')
    <!--header-->
    @include('site.components.breadcrumb', ['breadcrumb' => trans('frontend.contacts')])

    <section class="contact-us">
        <div class="container">
            <div class="main-title">
                <div class="top-title mb-5">
                    <h2>{{ $contact_text->title }}</h2>
                </div>
                <p>{!! $contact_text->description !!}
                </p>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-7 wow slideInRight">
                        <div class="contact-form">
                            <form method="post" id="submit-contact" id="complain">
                                @csrf
                                <div class="row">
                                    <span class="text-success d-none" id="message-success"></span>
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <input class="form-control" type="text" name="name" id="name"
                                                placeholder="@lang('frontend.name')">
                                            <span class="error text-danger d-none"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <input class="form-control" type="email" name="email" id="email"
                                                placeholder="@lang('frontend.email')">
                                            <span class="error text-danger d-none"></span>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group position-relative">
                                            <input class="form-control" type="text" name="subject" id="subject"
                                                placeholder="@lang('frontend.subject')">
                                            <span class="error text-danger d-none"></span>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" name="message" id="message"
                                                placeholder="@lang('frontend.message')"></textarea>
                                            <span class="error text-danger d-none"></span>

                                        </div>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button class="btn" type="submit">@lang('frontend.send') </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInLeft">
                        <div class="contact-info">
                            <div class="content">
                                <div class="details">
                                    <div class="info-box">
                                        <div class="icon"><i class="bi bi-geo-alt"> </i></div>
                                        <div class="info">
                                            <p>{{ settings()->address }} </p>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <div class="icon"><i class="bi bi-envelope"> </i></div>
                                        <div class="info">
                                            <p>{{ settings()->email }} </p>
                                        </div>
                                    </div>
                                    <div class="info-box">
                                        <div class="icon"><i class="bi bi-telephone"> </i></div>
                                        <div class="info">
                                            <p>{{ settings()->phone }} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('site.components.subscribe')

    </section>
    <!--footer part-->
    @push('scripts')
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#submit-contact').submit(function(e) {

                e.preventDefault();
                let formData = new FormData(this);
                $('.error').text('');
                $('#message-success').text('');
                $.ajax({
                    type: 'POST',
                    url: "{{ route('site.contactForm') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        if (response) {
                            this.reset();
                            $('#message-success').text(response);
                            $('.text-success').removeClass('d-none');
                        }
                    },
                    error: function(response) {
                        $.each(response.responseJSON.errors, function(key, value) {
                            $("#" + key).next().html(value[0]);
                            $("#" + key).next().removeClass('d-none');
                        });
                    }
                });

            });
        </script>
    @endpush
@endsection
