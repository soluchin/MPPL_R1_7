<!DOCTYPE html>
<html>


<head>
    <title>Login Admin</title>
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
<body class="gray"><!--<div class="alert_w_p_u"></div>-->

<div class="container-page login">
    <div class="mp-pusher" id="mp-pusher">
        <header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="{{url('/dashboard')}}">
                                    <img src="{{asset('images/voucher.png')}}" width="180" alt="$SITE_NAME"/>
                                </a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--end: header.mod-header -->
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-register">
                    <h3 class="rs title-mod">Hello admin! Welcome to MyVoucher</h3>
                    <div class="wrap-form-reg clearfix">
                        <form method="" action="">
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email">
                                    <input id="email" type="email" class="input-txt" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                
                                </label>
                                <label class="wrap-txt" for="sys_pass">
                                    <input id="password" type="password" class="input-txt" name="password" required autocomplete="current-password">

                                </label>
                                <label class="wrap-check" for="sys_chk_news">
                                    <input id="sys_chk_news" class="input-chk" type="checkbox"/> Remember me
                                    <i class="icon iUncheck"></i>
                                    <a class="lost-pass" href="#">Forgot password ?</a>
                                </label>
                                <div class="wrap-login-btn">
                                    <button type="submit" class="btn-flat gr btn-submit-reg">
                                    {{ __('Login') }}
                                </button>

                                </div>
                            </div>
                            <div class="right-create-acc">
                                <img class="account" src="{{asset('images/null.gif')}}" alt="Couponday.com"/>
                                <p class="lbl-dung-lo rs">Not a admin? Don’t worry</p>
                                <a href="{{url('/admin/register')}}" class="btn-flat yellow btn-submit-reg">Create an account</a>
                                <div id="sys_warning_sms" class="warning-sms" data-warning-txt="No spam guarantee,No disturb,Promotion News"></div>
                            </div>
                        </form>
                        <i class="line-sep"></i>
                    </div>
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