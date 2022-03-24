 <!--footer part-->
 <div id="toTop">
     <button> <i class="bi bi-chevron-double-up"></i></button>
 </div>
 <footer>
     <div class="container">
         <div class="footer-content">
             <div class="row">
                 <div class="col-lg-3 col-md-3">
                     <div class="footer-box  wow slideInUp"><a class="footer-logo" href="{{ route('front') }}"> <img
                                 class="img-fluid mb-4" data-src="{{ asset('site') }}/images/footer/footer-crane.png"
                                 alt="{{ settings()->website_title }}"></a></div>
                 </div>
                 <div class="col-lg-3 col-md-3">
                     <div class="footer-box">
                         <h3>{{ trans('frontend.web_links') }}</h3>
                         <div class="text">
                             <p>{!! settings()->footer_description !!}</p><a href="{{ route('about') }}"
                                 class="read-more btn">{{ trans('frontend.more') }}</a>
                         </div>
                         <div class="social-links">
                             <a  target="_blank" href="{{ settings()->facebook }}"><i class="bi bi-facebook"></i></a>
                             <a  target="_blank" href="{{ settings()->twitter }}"><i class="bi bi-twitter"></i></a>
                             <a  target="_blank" href="{{ settings()->instagram }}"><i class="bi bi-instagram"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-3">
                     <div class="footer-box">
                         <h3>{{ trans('frontend.services') }}</h3>
                         <ul class="map-links">
                             @foreach (services() as $service)
                                 <li><a href="{{route('services')}}">{{$service->title}}</a></li>
                             @endforeach
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-3">
                     <div class="footer-box">
                         <h3>{{ trans('frontend.contacts') }}</h3>
                         <ul class="info-content">
                             <li><i class="bi bi-geo-alt-fill"></i>
                                 <p>{{ settings()->address }}</p>
                             </li>
                             <li><i class="bi bi-telephone"></i>
                                <a href="tel:{{ settings()->phone}}"> <p>{{ settings()->phone }}</p></a>
                             </li>
                             <li><i class="bi bi-envelope"></i>
                                <a href="mailto:{{ settings()->email}}"> <p>{{ settings()->email }}</p></a>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <div class="copyright">
     <div class="container">
         <div class="row">
             <div class="col-md-12 created-by mr-auto text-center">
                 <p> <a target="_blank" href="https://marwan.tech/ar">{{ settings()->copyrights }}</a> </p>
             </div>
         </div>
     </div>
 </div>
 <!--footer part-->
 </div>
 <!--scripts-->
 <script src="{{ asset('site') }}/js/jquery-3.6.0.min.js"></script>
 <script src="{{ asset('site') }}/js/jquery.lazy.min.js"></script>
 <script src="{{ asset('site') }}/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('site') }}/js/owl.carousel.min.js"></script>
 <script src="{{ asset('site') }}/js/jquery.fancybox.min.js"></script>
 <script src="{{ asset('site') }}/js/jquery.waypoints.min.js"></script>
 <script src="{{ asset('site') }}/js/jquery.counterup.min.js"></script>
 <script src="{{ asset('site') }}/js/mixitup.min.js"> </script>
 <script src="{{ asset('site') }}/js/wow.min.js"></script>
 <script src="{{ asset('site') }}/js/script.js"></script>
 @stack('scripts')
 <script type="text/javascript">
     $('#direct_contact').submit(function(e) {
         console.log("Dasdasd");
         e.preventDefault();
         let formData = new FormData(this);
         $('.error').text('');
         $('#message-success').text('');
         $.ajax({
             type: 'POST',
             url: "{{ route('site.contactForm') }}",
             data: formData,
             success: (response) => {
                 if (response) {
                     this.reset();
                     $('#message-success').text(response);
                     setTimeout(() => {
                         $('.text-success').fadeOut('fast');
                     }, 2000);
                 }
             },
             error: function(response) {
                 $.each(response.responseJSON.errors, function(key, value) {
                     $("#" + key).next().html(value[0]);
                     $("#" + key).next().removeClass('d-none');
                 });
             }
         });
         setTimeout(() => {
             $('.show-message').fadeOut('fast');
         }, 2000);

     });
 </script>
 @stack('scripts')
 </body>

 </html>
