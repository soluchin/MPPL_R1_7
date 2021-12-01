        @extends('master')
        @section('homeactive')
        active
        @endsection
        @section('content')
        <div class="top-area">
            <div class="mod-head-slide">
                <div class="grid_frame">
                    <div class="wrap-slide">
                        <p class="ta-c"><img src="{{asset('images/ajax-loader.gif')}}" alt="loading"></p>
                        <div id="sys_head_slide" class="head-slide flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="{{asset('images/ex/01_banner.jpg')}}" alt=""/>
                                </li>
                                <li>
                                    <img src="{{asset('images/ex/02_banner.jpg')}}" alt=""/>
                                </li>
                                <li>
                                    <img src="{{asset('images/ex/03_banner.jpg')}}" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            New Coupons
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_01.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$2.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon"
                                @if (Route::has('login'))
                                    @auth 
                                id="myBtn" 
                                @else
                                href="{{url('/login')}}"
                                @endauth
                                @endif
                                >Take Coupon</a>
                                </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_02.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">Save $1.50 on two</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_03.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$5.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_04.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$7.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                    </div>
                </div><!--end block: New Coupons-->
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            Featured Coupons
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_02.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$12.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">VIEW COUPON CODE</a>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$17.50 off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">17GH0097</a>
                            </div>
                            <i class="stick-lbl trust-brand-y"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_01.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$3.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                            <i class="stick-lbl trust-brand-b"></i>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_04.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$7.00 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_04.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$2.00 Off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_01.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$11.50 off</div>
                                <div class="coupon-brand">Lindt Chocolate</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">9 days 4 hours left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_03.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$12.00 Off</div>
                                <div class="coupon-brand">SunMart</div>
                                <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                <div class="time-left">2 days 14 hours left</div>
                                <a class="btn btn-blue btn-take-coupon dismiss" href="#">Dismiss Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                        <div class="coupon-item grid_3">
                            <div class="coupon-content">
                                <div class="img-thumb-center">
                                    <div class="wrap-img-thumb">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="{{asset('images/ex/01_02.jpg')}}" alt="$COUPON_TITLE"></a>
                                    </div>
                                </div>
                                <div class="coupon-price">$4.5 Off</div>
                                <div class="coupon-brand">Wallmart</div>
                                <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                <div class="time-left">12 days 1 hour left</div>
                                <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                            </div>
                        </div><!--end: .coupon-item -->
                    </div>
                    </div><!--end block: Featured Coupons-->
                <div class="mod-brands block clearfix">
                    <div class="grid_12">
                    </div>
                </div><!--end: .mod-brand -->
            </div>
        </div>

        <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <!-- If failed complete the quest -->
        <!-- <h2>Quest: Belanja 3x di Tokopedia</h2> -->
        <!-- <a class="btn btn-blue btn-view-coupon OK" href="#">OK</a> -->
        <!-- If success complete the quest -->
        <h2>Selamat Anda berhasil menyelesaikan quest.</h2>
        <h2>Kode promo: </h2>
        <input type="text" value="" id="myInput" class="randomcode" disabled>

        <div class="tooltip">
        <button onclick="myFunction()" onmouseout="outFunc()">
        <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
        Copy text
        </button>
        </div>
        <a class="btn btn-blue btn-view-coupon OK" href="#">OK</a>
      </div>
    </div>
@endsection
@section('script')
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

var a=document.getElementsByClassName("OK")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

a.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
    function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * 
 charactersLength));
   }
   return result;
}
var code = document.getElementById("myInput");
code.value = makeid(8);
</script>
<script>
    var copyText = document.getElementById("myInput");
    function myFunction() {
    copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}
</script>

@endsection