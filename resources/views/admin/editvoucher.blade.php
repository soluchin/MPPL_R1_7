@extends('admin.master')
@section('couponactive')
active
@endsection
@section('head')
<style>
* {
  box-sizing: border-box;
}

input[type=text],input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size: 13pt
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
@endsection
@section('content')
<div class="grid_frame page-content" style="padding-top: 10px;">
            <div class="container_grid">
                <div class="mod-grp-coupon block clearfix tabbable">
                    <div class="grid_12">
                        <h3 class="title-block">
                            <span class="wrap-tab">
                                <span class="lbl-tab active">Edit Voucher</span>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                        <div class="tab-content">
	                        <div class="container">
	                        	<form action="/action_page.php">
	                        	<div class="row">
	                        		<div class="col-25">
		                        	<label for="name">Nama:</label>	
		                        	</div>
		                        	<div class="col-75">
		                        	<input type="text" name="name">
		                        	</div>
	                        	</div>
	                        	<div class="row">
	                        		<div class="col-25">
		                        	<label for="nominal">Nominal:</label>
		                        	</div>
		                        	<div class="col-75">
		                        	<input type="number" name="nominal">
		                        	</div>
	                        	</div>
	                        	<div class="row">
	                        		<div class="col-25">
		                        	<label for="store">Store:</label>
		                        	</div>
		                        	<div class="col-75">
		                        	<input type="text" name="store">
		                        	</div>
	                        	</div>
	                        	<div class="row">
	                        		<div class="col-25">
		                        	<label for="desc">Description:</label>
		                        	</div>
		                        	<div class="col-75">
		                        	<textarea name="desc"></textarea>
		                        	</div>
	                        	</div>
	                        	<div class="row">
	                        		<div class="col-25">
		                        	<label for="time">Time:</label><br>
		                        	</div>
		                        	<div class="col-75">
		                        	<input type="number" name="time">
		                        	</div>
	                        	</div>
	                        	<div class="row">
	                        		<div class="col-25">
		                        	<label for="check">Check:</label>
		                        	</div>
		                        	<div class="col-75">
		                        	<input type="radio" name="check" value="Yes">
		                        	<label>Yes</label>
		                        	<input type="radio" name="check" value="No">
		                        	<label>No</label><br>
		                        	</div>
	                        	</div>
	                        	<div class="row">
	                        		<div class="col-25">
		                        	<label>Image</label>
		                        	</div>
		                        	<div class="col-75">
		                        	<input type="file" name="image" accept="image/*">
		                        	</div>
	                        	</div>
	                        </div>
                          <br>
						  <input type="submit" value="Update">
						</form>     
                        </div>
                    </div>
                    </div><!--end block: Featured Coupons-->
                </div>
        </div>
@endsection