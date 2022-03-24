    <!--services-->
    <style>
        section.services {
            padding: 80px 0;
        }
        section.services .tab-grid {
            display: block;
        }
    </style>
    <section class="services">
        <div class="container">
            <div class="top-title mb-5">
                <h2>{{ $servicePage->title }}</h2>
            </div>
            <div class="content">
                <div class="row align-items-start">

                    <div class="col-md-3  nav flex-column nav-pills me-3 wow slideInRight p-0" id="v-pills-tab"
                        role="tablist" aria-orientation="vertical">

                        @foreach ($services as $key => $service)
                            <button class="nav-link @if ($key == 0) active @endif"
                                id="the-{{ $key }}-tab" data-bs-toggle="pill"
                                data-bs-target="#the-{{ $key }}" type="button" role="tab"
                                aria-controls="the-{{ $key }}"
                                aria-selected="false">{{ $service->title }}</button>
                        @endforeach

                    </div>
                    <div class="col-md-1" >
                    </div>
                    <div class="col-md-7  tab-content wow slideInLeft" id="v-pills-tabContent">

                        @foreach ($services as $k => $serv)
                            <div class="tab-pane fade @if ($k == 0) show  active @endif"
                                id="the-{{ $k }}" role="tabpanel"
                                aria-labelledby="the-{{ $k }}-tab">
                                <div class="tab-grid">
                                    <div class="text-content">
                                            {!! $serv->description !!}
                                        <div class="service-box">
                                            <div class="serv-img"><img src="{{ asset($serv->image) }}"
                                                    alt="serv-img">
                                            </div>
                                             @php
                                            $array = explode("<li>", $serv->summary);
                                            unset($array[0]);
                                            $new_arr =(str_replace("</li>", "", $array));
                                            $new_arr =(str_replace("</ul>", "", $new_arr));
                                            @endphp
                                          <div class="serv-list">
                                              <ul class="list-unstyled about-list"> 
                                              @foreach($new_arr as $arr)
                                                <li class="d-flex"> <i class="bi bi-arrow-right-circle"></i>
                                                  <p>{!! $arr !!}</p>
                                                </li>
                                             @endforeach
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="tab-img"><img src="{{asset('site')}}/images/services/man.png" alt="serv-man"></div>-->
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-->
