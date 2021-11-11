        @extends('admin.master')
        @section('couponactive')
        active
        @endsection
        @section('head')
        <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }

        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
        @endsection
        @section('content')
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
                                <span class="lbl-tab active">List Voucher</span>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="tab-content">
                            <a href="{{url('/admin/voucher/create')}}"><button>+ create</button></a>
                            <br>
                            <br>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Name</th>
                                  <th>Nominal</th>
                                  <th>Store</th>
                                  <th>Description</th>
                                  <th>Time</th>
                                  <th>Checked</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th>1</th>
                                  <td>11.11 Gratis Ongkir</td>
                                  <td>$2.00</td>
                                  <td>Wallmart</td>
                                  <td>Lorem ipsum</td>
                                  <td>7</td>
                                  <td>Yes</td>
                                  <td><a href="{{url('/admin/voucher/edit')}}"><button>edit</button></a> <button>delete</button></td>
                                </tr>
                                <tr>
                                  <th>2</th>
                                  <td>11.11 Gratis Ongkir</td>
                                  <td>$2.00</td>
                                  <td>Wallmart</td>
                                  <td>Lorem ipsum</td>
                                  <td>7</td>
                                  <td>Yes</td>
                                  <td><button>edit</button> <button>delete</button></td>
                                </tr>
                                <tr>
                                  <th>3</th>
                                  <td>11.11 Gratis Ongkir</td>
                                  <td>$2.00</td>
                                  <td>Wallmart</td>
                                  <td>Lorem ipsum</td>
                                  <td>7</td>
                                  <td>Yes</td>
                                  <td><button>edit</button> <button>delete</button></td>
                                </tr>
                                </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
                    </div><!--end block: Featured Coupons-->
                </div>
        </div>
        @endsection