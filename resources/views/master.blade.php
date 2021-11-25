<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/font.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <!--css plugin-->
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link rel="stylesheet" href="css/jquery.nouislider.css"/>
    <link rel="stylesheet" href="css/jquery.popupcommon.css"/>

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/style-dark.css">
    <link rel="stylesheet" href="css/style-gray.css">
    <!--[if IE 9]>
    <link rel="stylesheet" href="css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="css/res-menu.css"/>
    <link rel="stylesheet" href="css/responsive.css"/>
    <link rel="stylesheet" href="css/modal.css"/>
    <link rel="stylesheet" href="css/modalcopy.css"/>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->

</head>
<body class="gray"><!--<div class="alert_w_p_u"></div>-->
<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        <header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('images/voucher.png')}}" width="150" alt="$SITE_NAME"/>
                                </a>
                            </h1>
                            @if (Route::has('login'))
                
                    @auth
                        
                          <a id="sys_head_login" class="btn btn-green type-login btn-login" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="lnr lnr-exit" ></i> <span>{{ __('Logout') }}</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></a>
                            <nav class="main-nav">
                                <ul id="main-menu" class="nav nav-horizontal clearfix">
                                  <li class="@yield('homeactive')">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="@yield('couponactive')">
                                        <a href="{{url('/voucher')}}">Voucher</a>
                                    </li>
                                    <li class="@yield('couponcodeactive')">
                                        <a href="{{url('/couponcode')}}">Coupon Codes</a>
                                    </li>
                                     <li class="@yield('cashbackactive')">
                                        <a href="{{url('/cashback')}}">Cashback</a>
                                    </li>
                                    <li class="@yield('mycouponsactive')">
                                        <a href="{{url('/mycoupons')}}">My coupons</a>
                                        <i class="icon iPickRed lbl-count"><span>12</span></i>
                                    </li>
                                </ul>
                                <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                            </nav>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-green type-login btn-login">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-green type-login btn-login"style="margin-right: 10px;">Register</a>
                        @endif
                    @endauth
                
            @endif
                        </div>
                    </div>
                </div>
            </div>
            </header><!--end: header.mod-header -->
        @yield('content')
        <footer class="mod-footer">
            <div class="footer-top">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_9">
                            <div class="company-info">
                                <img src="images/logo-gray.png" alt="CouponDay"/>
                                <p class="rs">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
                                <p class="rs">
                                    1200 Balh Blah Avenue <br />
                                    Hanoi, Vietnam 12137
                                </p>
                            </div>
                        </div>
                        <div class="grid_3">
                            <div class="block social-link">
                                <h3 class="title-block">Follow us</h3>
                                <div class="block-content">
                                    <ul class="rs">
                                        <li>
                                            <i class="fa fa-facebook-square fa-2x"></i>
                                            <a href="#" target="_blank">Our Facebook page</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-twitter-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Tweets</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-pinterest-square fa-2x"></i>
                                            <a href="#" target="_blank">Follow our Pin board</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--end: Follow us -->
                    </div>
                </div>
            </div><!--end: .foot-top-->
            <div class="foot-copyright">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="left-link">
                            <a href="#">Home</a>
                            <a href="#">Term of conditions</a>
                            <a href="#">Privacy</a>
                            <a href="#">Support</a>
                            <a href="#">Contact</a>
                        </div>
                        <div class="copyright">
                           <a href="templateshub.net">Templates Hub</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.nouislider.js"></script>
<script type="text/javascript" src="js/jquery.popupcommon.js"></script>
<script type="text/javascript" src="js/html5lightbox.js"></script>
<!--//js for responsive menu-->
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/mlpushmenu.js"></script>

<script type="text/javascript" src="js/script.js"></script>
@yield('script')
<!--[if lte IE 9]>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/create.placeholder.js"></script>
<![endif]-->
<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie8.js"></script>
<![endif]-->

</body>
</html>