@extends('master')
@section('cashbackactive')
active
@endsection
@section('content')
<div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">456 Coupons are waiting for you!</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="sys_mod_filter" class="mod-filter">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="lbl-search">
                            <input class="txt-search" id="sys_txt_search" type="search" placeholder="Search"/>
                            <input type="submit" class="btn-search" value=""/>
                        </div>
                        <div class="select-cate">
                            <div id="sys_selected_val" class="show-val">
                                <span data-cate-id="0">All type</span>
                                <i class="pick-down"></i>
                            </div>
                            <div id="sys_list_dd_cate" class="dropdown-cate">
                                <div class="first-lbl">All Categories</div>
                                <div class="wrap-list-cate clearfix">
                                    <a href="#" data-cate-id="1">Baby & Toddler</a>
                                    <a href="#" data-cate-id="2">Automotive </a>
                                    <a href="#" data-cate-id="3">Beverages</a>
                                    <a href="#" data-cate-id="4">Books & Magazines</a>
                                    <a href="#" data-cate-id="5">Foods </a>
                                    <a href="#" data-cate-id="6">Health Care</a>
                                    <a href="#" data-cate-id="7">Home Entertainment</a>
                                    <a href="#" data-cate-id="8">Personal Care </a>
                                    <a href="#" data-cate-id="9">Pet Care </a>
                                    <a href="#" data-cate-id="10">Professional Services </a>
                                    <a href="#" data-cate-id="11">Toys and Games</a>
                                    <a href="#" data-cate-id="12">Coupon Codes</a>
                                    <a href="#" data-cate-id="13">Recipes</a>
                                    <a href="#" data-cate-id="14">Household </a>
                                </div>
                            </div>
                        </div><!--end: .select-cate -->
                    </div>
                </div>
            </div>
        </div><!--end: .mod-filter -->
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix tabbable">
                    <div class="grid_12">
                        <h3 class="title-block">
                            <span class="wrap-tab">
                                <span class="lbl-tab active">New Coupons</span>
                                <span class="lbl-tab">Featured Coupons</span>
                            </span>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="tab-content">
                            <div class="tab-content-item active">
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$2.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" id ="myBtn" href="#">Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">Save $1.50 on two</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" id="myBtn" href="#">Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$5.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon untake" href="#">Un Take Coupon</a>
                                    </div>
                                    <i class="stick-lbl hot-sale"></i>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$12.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$17.50 off</div>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$3.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$12.00 Off</div>
                                        <div class="coupon-brand">SunMart</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon untake" href="#">Un Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
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
                            <div class="tab-content-item">
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$12.00 Off</div>
                                        <div class="coupon-brand">Wallmart</div>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$17.50 off</div>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$3.00 Off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">2 days 14 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                                <div class="coupon-item grid_3">
                                    <div class="coupon-content">
                                        <div class="img-thumb-center">
                                            <div class="wrap-img-thumb">
                                                <span class="ver_hold"></span>
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
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
                                                <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                            </div>
                                        </div>
                                        <div class="coupon-price">$11.50 off</div>
                                        <div class="coupon-brand">Lindt Chocolate</div>
                                        <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                        <div class="time-left">9 days 4 hours left</div>
                                        <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                    </div>
                                </div><!--end: .coupon-item -->
                            </div>
                        </div>
                    </div>
                    <a class="grid_6 btn btn-orange btn-load-more" href="#">LOAD MORE COUPON</a>
                </div><!--end block: Featured Coupons-->
                <div class="mod-brands block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            POPULAR BRANDS (129)
                            <a href="#" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-brand clearfix">
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="coupon-detail.html" class="ver_container"><img src="images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                    </div>
                </div><!--end: .mod-brand -->
            </div>
        </div>
    	<!-- The Modal -->
	
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