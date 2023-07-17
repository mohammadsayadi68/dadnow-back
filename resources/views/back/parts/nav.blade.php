<nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div class="">
                <div class="main-menu-header">
                    @if (auth()->user()->avatar)
                    <img src="{{ asset('uploads/employee/' . auth()->user()->avatar) }}" class="img-radius"
                        alt="post_img">
                    @else
                    <img class="img-radius" src="{{url('/back/assets/images/user/avatar-2.jpg')}}"
                        alt="User-Profile-Image">
                    @endif

                    <div class="user-details px-2">
                        <div id="more-details">{{auth()->user()->name}}<i class="fa fa-caret-down"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        {{-- <li class="list-group-item"><a href="user-profile.html"><i
                                    class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a>
                        </li> --}}
                        <li class="list-group-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button class="btn logout-btn"><i class="feather icon-log-out "></i> <span
                                        class="">خروج</span></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>پنل مدیریت</label>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">داشبورد</span></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">بخش کاربری</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon">
                            <i class="fa fa-users icon-layout"></i></span><span class="pcoded-mtext">خبرها</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('admin_news')}}" target="_blank">خبرها</a></li>
                        <li><a href="{{route('admin_news_create')}}" target="_blank">ایجاد خبر</a></li>

                    </ul>
                </li>
                {{-- <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">دسته بندی
                            شغلی</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('category')}}" target="_blank">دسته بندی ها</a></li>
                        <li><a href="{{route('category.create')}}" target="_blank">ایجاد دسته بندی</a></li>
                    </ul>
                </li> --}}





                {{-- <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">حوزه های
                            شغلی</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('activity')}}" target="_blank">حوزه ها</a></li>
                        <li><a href="{{route('activity.create')}}" target="_blank">ایجاد حوزه</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-layout"></i></span><span class="pcoded-mtext">بلاگ</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('blog.create')}}" target="_blank">ایجاد بلاگ</a></li>
                        <li><a href="{{route('blog')}}" target="_blank">لیست بلاگ ها</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="fas fa-money-bill-wave icon-layout"></i></span><span class="pcoded-mtext">امور
                            مالی</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{route('offer')}}" target="_blank">کد تخفیف</a></li>
                        <li><a href="{{route('offer.create')}}" target="_blank">ایجاد کد تخفیف</a></li>
                        <li><a href="{{route('admin.payments')}}" target="_blank">پرداخت ها</a></li>
                    </ul>
                </li> --}}


                {{-- <li class="nav-item pcoded-menu-caption">
                    <label>UI Element</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="bc_alert.html">Alert</a></li>
                        <li><a href="bc_button.html">Button</a></li>
                        <li><a href="bc_badges.html">Badges</a></li>
                        <li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
                        <li><a href="bc_card.html">Cards</a></li>
                        <li><a href="bc_collapse.html">Collapse</a></li>
                        <li><a href="bc_carousel.html">Carousel</a></li>
                        <li><a href="bc_grid.html">Grid system</a></li>
                        <li><a href="bc_progress.html">Progress</a></li>
                        <li><a href="bc_modal.html">Modal</a></li>
                        <li><a href="bc_spinner.html">Spinner</a></li>
                        <li><a href="bc_tabs.html">Tabs & pills</a></li>
                        <li><a href="bc_typography.html">Typography</a></li>
                        <li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
                        <li><a href="bc_toasts.html">Toasts</a></li>
                        <li><a href="bc_extra.html">Other</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Forms &amp; table</label>
                </li>
                <li class="nav-item">
                    <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
                </li>
                <li class="nav-item">
                    <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap
                            table</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Chart & Maps</label>
                </li>
                <li class="nav-item">
                    <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
                </li>
                <li class="nav-item">
                    <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Pages</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-lock"></i></span><span
                            class="pcoded-mtext">Authentication</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                        <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample
                            page</span></a></li> --}}

            </ul>

            {{--
            <div class="card text-center">
                <div class="card-block">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="feather icon-sunset f-40"></i>
                    <h6 class="mt-3">Download Pro</h6>
                    <p>Getting more features with pro version</p>
                    <a href="https://1.envato.market/qG0m5" target="_blank"
                        class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
                </div>
            </div> --}}

        </div>
    </div>
</nav>