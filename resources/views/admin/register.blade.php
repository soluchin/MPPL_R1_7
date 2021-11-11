<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="{{asset('css/font.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}"/>
    <!--css plugin-->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/jquery.nouislider.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/jquery.popupcommon.css')}}"/>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style-dark.css')}}">
    <link rel="stylesheet" href="{{asset('css/style-gray.css')}}">
    <!--[if IE 9]>
    <link rel="stylesheet" href="css/ie9.css"/>
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/ie8.css"/>
    <![endif]-->

    <link rel="stylesheet" href="{{asset('css/res-menu.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
    <!--[if lte IE 8]>
        <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
    
</head>
<body class="gray">

<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        <header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="{{url('/dashboard')}}">
                                    <img src="{{asset('images/logo.png')}}" alt="$SITE_NAME"/>
                                </a>
                            </h1>
                            <a id="sys_head_login" class="btn btn-green type-login btn-login" href="#">Login</a>
                            <nav class="main-nav">
                                <ul id="main-menu" class="nav nav-horizontal clearfix">
                                  <li class="@yield('homeactive')">
                                        <a href="{{url('/dashboard')}}">Home</a>
                                    </li>
                                    <li class="@yield('couponactive')">
                                        <a href="{{url('/voucher')}}">Voucher</a>
                                    </li>
                                    <li class="@yield('couponcodeactive')">
                                        <a href="{{url('/couponcode')}}">Coupons Code</a>
                                    </li>
                                    <li>
                                        <a href="my-coupon.html">My coupons</a>
                                        <i class="icon iPickRed lbl-count"><span>12</span></i>
                                    </li>
                                </ul>
                                <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--end: header.mod-header -->
        <nav id="mp-menu" class="mp-menu alternate-menu">
            <div class="mp-level">
                <h2>Menu</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="coupon.html">Coupons</a></li>
                    <li class="has-sub">
                        <a href="coupon-code.html">Coupons Code</a>
                        <div class="mp-level">
                            <h2>Coupons Code</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="coupon-code.html">Coupons Code 1</a></li>
                                <li><a href="coupon-code-2.html">Coupons Code 2</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub">
                        <a href="brand-list.html">Brands</a>
                        <div class="mp-level">
                            <h2>Brands</h2>
                            <a class="mp-back" href="#">back</a>
                            <ul>
                                <li><a href="brand-detail-1.html">Brand Detail 1</a></li>
                                <li><a href="brand-detail-2.html">Brand Detail 2</a></li>
                                <li><a href="brand-detail-3.html">Brand Detail 3</a></li>
                                <li><a href="brand-detail-4.html">Brand Detail 4</a></li>
                                <li><a href="brand-detail-5.html">Brand Detail 5</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="my-coupon.html">My coupons(12)</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </nav><!--end: .mp-menu -->
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello pretty! Welcome to Couponday.com</h3>
                    <div class="desc-reg">Sign up for free and get exclusive access to members-only savings, rewards and special promotions from Coupons.com. Enter in an email and a password or sign up with Facebook.</div>
                    <div class="wrap-form-reg clearfix">
                        <form method="" action="">
                        
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email">
                                <input id="name" type="text" class="input-txt @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">

                                </label>
                                <label class="wrap-txt" for="sys_email">
                                    <input id="email" type="email" class="input-txt" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                                </label>
                                <label class="wrap-txt" for="sys_pass">
                                     <input id="password" type="password" class="input-txt" name="password" required autocomplete="new-password" placeholder="password">

                                </label>
                                <label>
                                <input id="password-confirm" type="password" class="input-txt" name="password_confirmation" required autocomplete="new-password" placeholder="confirmation password">
                            </label>
                            </div>
                            <div class="right-connect">
                                <button type="submit" class="btn-flat yellow btn-submit-reg">
                                    {{ __('Register') }}
                                </button>
                                <div class="sep-connect">
                                    <span>Or</span>
                                </div>
                                <div class="grp-connect">
                                    <p class="rs">Sign up using your account on:</p>
                                    <a class="btn-flat fb" href="#">Facebook</a>
                                    <a class="btn-flat gg" href="#">Google</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="rs wrap-link-back">
                        <a href="{{url('/login')}}" class="link-back">
                            <i class="pick-r"></i>
                            Back to login
                        </a>
                    </p>
                </div><!--end: .mod-register -->
            </div>
        </div>
       <footer class="mod-footer">
            <div class="footer-top">
                <div class="grid_frame">
                    <div class="container_grid clearfix">
                        <div class="grid_9">
                            <div class="company-info">
                                <img src="{{asset('images/logo-gray.png')}}" alt="CouponDay"/>
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

<script type="text/javascript" src="{{asset('js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.nouislider.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.popupcommon.js')}}"></script>
<script type="text/javascript" src="{{asset('js/html5lightbox.js')}}"></script>

<!--//js for responsive menu-->
<script type="text/javascript" src="{{asset('js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset('js/mlpushmenu.js')}}"></script>

<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

<!--[if lte IE 9]>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/create.placeholder.js"></script>
<![endif]-->

<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie8.js"></script>
<![endif]-->
</body>

</html>