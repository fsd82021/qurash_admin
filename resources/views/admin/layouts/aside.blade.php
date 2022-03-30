<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <a href="{{ route('front') }}" class="brand-logo">
            <img alt="Logo" style="max-height: 45px" src="{{ asset(settings()->logo) }}" />
        </a>
        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
            <span class="svg-icon svg-icon svg-icon-xl">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path
                            d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                            fill="#000000" fill-rule="nonzero"
                            transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                        <path
                            d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                            fill="#000000" fill-rule="nonzero" opacity="0.3"
                            transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                    </g>
                </svg>
            </span>
        </button>
    </div>
    <!--end::Brand-->

    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
            data-menu-dropdown-timeout="500">
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.square_icon')
                        </span>
                        <span class="menu-text">@lang('general.home')</span>
                    </a>
                </li>
                <li class="menu-section">
                    <h4 class="menu-text">{{ trans('general.aside.page') }}</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.slider') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('slider.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_slider') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.service') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            {{-- <li class="menu-item">
                                <a href="{{ route('page.service') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span
                                        class="menu-text">{{ trans('general.aside.pages.our-services') }}</span>
                                </a>
                            </li> --}}
                            <li class="menu-item">
                                <a href="{{ route('service.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_service') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.team') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('team.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_team') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.feature') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            {{-- <li class="menu-item">
                                <a href="{{ route('page.feature') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.pages.feature') }}</span>
                                </a>
                            </li> --}}
                            <li class="menu-item">
                                <a href="{{ route('feature.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_feature') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.testimonial') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('testimonial.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span
                                        class="menu-text">{{ trans('general.aside.create_testimonial') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.partner') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('partner.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_partner') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                {{-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.categories') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('categories.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span
                                        class="menu-text">{{ trans('general.aside.create_categories') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                {{-- <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.gallery') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                             <li class="menu-item">
                                <a href="{{ route('page.projects') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.pages.projects') }}</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('gallery.index') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.create_gallery') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}


                <!--<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">-->
                <!--    <a href="javascript:;" class="menu-link menu-toggle">-->
                <!--        <span class="svg-icon menu-icon">-->
                <!--            @include('admin.components.dot_icon')-->
                <!--        </span>-->
                <!--        <span class="menu-text">{{ trans('general.aside.faq') }}</span>-->
                <!--        <i class="menu-arrow"></i>-->
                <!--    </a>-->
                <!--    <div class="menu-submenu">-->
                <!--        <i class="menu-arrow"></i>-->
                <!--        <ul class="menu-subnav">-->
                <!--            <li class="menu-item">-->
                <!--                <a href="{{ route('faq.index') }}" class="menu-link">-->
                <!--                    <i class="menu-bullet menu-bullet-dot">-->
                <!--                        <span></span>-->
                <!--                    </i>-->
                <!--                    <span class="menu-text">{{ trans('general.aside.create_faq') }}</span>-->
                <!--                </a>-->
                <!--            </li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</li>-->
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.pages') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('page.about') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.pages.about') }}</span>
                                </a>
                            </li>
                            {{-- <li class="menu-item">
                                <a href="{{ route('page.ourMission') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span
                                        class="menu-text">{{ trans('general.aside.pages.our-mission') }}</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('page.construction') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span
                                        class="menu-text">{{ trans('general.aside.pages.construction') }}</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('page.renovation') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span
                                        class="menu-text">{{ trans('general.aside.pages.renovation') }}</span>
                                </a>
                            </li> --}}
                            {{-- <li class="menu-item">
                                <a href="{{ route('page.contact') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.pages.contact') }}</span>
                                </a>
                            </li> --}}
                            <!--<li class="menu-item">-->
                            <!--    <a href="{{ route('page.faq') }}" class="menu-link">-->
                            <!--        <i class="menu-bullet menu-bullet-dot">-->
                            <!--            <span></span>-->
                            <!--        </i>-->
                            <!--        <span class="menu-text">{{ trans('general.aside.pages.faq') }}</span>-->
                            <!--    </a>-->
                            <!--</li>-->
                            {{-- <li class="menu-item">
                                <a href="{{ route('page.subscribe') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.pages.subscribe') }}</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('page.video') }}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">{{ trans('general.aside.pages.video') }}</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </li>


                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.contact') }}</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item">
                                <a href="{{ route('contact.index') }}" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        @include('admin.components.dot_icon')
                                    </span>
                                    <span class="menu-text">{{ trans('general.aside.contact') }}</span>
                                </a>
                            </li>

                            <li class="menu-item">
                                <a href="{{ route('page.contact') }}" class="menu-link">
                                    <span class="svg-icon menu-icon">
                                        @include('admin.components.dot_icon')
                                    </span>
                                    <span class="menu-text">{{ trans('general.aside.pages.contact') }}</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>



                <li class="menu-item">
                    <a href="{{ route('settings.edit') }}" class="menu-link">
                        <span class="svg-icon menu-icon">
                            @include('admin.components.dot_icon')
                        </span>
                        <span class="menu-text">{{ trans('general.aside.settings') }}</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
