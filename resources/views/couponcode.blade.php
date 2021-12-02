        @extends('master')
        @section('couponcodeactive')
        active
        @endsection
        @section('content')
                <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Coupon Codes</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="layout-2cols clearfix">
                    <div class="grid_8 content">
                        <div class="mod-coupons-code">
                            <div class="wrap-list">
                                @foreach ($couponcode as $cc)
                                <div class="coupons-code-item flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="{{$cc->image}}" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">{{$cc->name}}</a></p>
                                        <p class="rs coupon-desc">Diskon Rp{{$cc->nominal}}</p>
                                        <p class="rs coupon-desc">{{$cc->description}}</p>
                                        <div class="bottom-action">
                                        <a class="btn btn-blue btn-view-coupon" id="myBtn" href="#">VIEW <span>COUPON</span> CODE</a>
                                        </div>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                @endforeach
                            </div>
                            <div class="pagination">
                                <a class="page-nav" href="#"><i class="icon iPrev"></i></a>
                                <a class="page-num active" href="#">1</a>
                                <a class="page-num" href="#">2</a>
                                <a class="page-num" href="#">3</a>
                                <a class="page-num" href="#">4</a>
                                <a class="page-num" href="#">5</a>
                                <a class="page-nav" href="#"><i class="icon iNext"></i></a>
                            </div>
                        </div><!--end: .mod-coupons-code -->
                    </div>
                    <div class="grid_4 sidebar">
                        <h3 class="title-block">Latest coupon</h3>
                            <div class="block-content">
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-13.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-14.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-15.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-16.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                                <div class="coupons-code-item simple flex">
                                    <div class="brand-logo thumb-left">
                                        <div class="wrap-logo">
                                            <div class="center-img">
                                                <span class="ver_hold"></span>
                                                <a href="#" class="ver_container"><img src="images/ex/04-13.jpg" alt="$BRAND_NAME"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-content flex-body">
                                        <p class="rs save-price"><a href="#">Save 10% Off a New Hotel Booking at Participating Price Match Guarantee Hotels</a></p>
                                    </div>
                                </div><!--end: .coupons-code-item -->
                            </div>
                        </div><!--end: .mod-simple-coupon -->
                    </div>
                </div>
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