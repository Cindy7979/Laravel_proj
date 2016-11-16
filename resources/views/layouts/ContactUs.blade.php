@extends('master')

@section('link_css')
@endsection

@section('navigation')
	<div id="contact_us">
	<div class="header_bg">
		@include('layouts.navigationver2')
		<div class="container">
			<div class="page_title_wrap">
				<p class="page_title">GET IN TOUCH WITH US.</p>
				<p class="page_sub_title">Contact The Construction Company</p>
			</div>
		</div>
	</div>
	</div>
@endsection

@section('page_title')
@endsection

@section('breadcrumbs')
	<div class="breadcrumbs">
		<div class="container">
			<div><span class="text_dark_gray_bold_12">Construction Theme  &nbsp;&nbsp;> &nbsp;</span> <span class="text_dark_gray_12"> Contact Us</span></div>
		</div>
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="page_btm_padding_80">
			<div class="heading_title">
				<p>Contact Us</p>
				<div class="bg_yellow_for_heading"></div>
			</div>
			<div class="contact_send_msg">
				<p class="text_gray_13">Call or submit our online form to request an estimate or for general questions about U.S. Certified Contractors and our services. We look forward to serving you!</p>
				<div class="contact_form">
					<form method="get" action="">
						<input type="text" name="first_name" value="First Name *" class="form_text form_text_left" required="Validation errors occurred. Please confirm the fields and submit it again.">
						<input type="text" name="last_name" value="Last Name *" class="form_text form_text_right" required="Validation errors occurred. Please confirm the fields and submit it again.">
						<input type="text" name="email" value="Your Email *" class="form_text form_text_left" required="Validation errors occurred. Please confirm the fields and submit it again.">
						<input type="text" name="phone_num" value="Your Phone Number *" class="form_text form_text_right" required="Validation errors occurred. Please confirm the fields and submit it again.">
						<input type="text" name="subject" value="Subject" class="form_text form_text_subj">
						<textarea name="message" value="Message" class="form_text form_text_area">Message</textarea>
						<input type="submit" name="submit" value="SEND MESSAGE" class="yellow_btn_deco">
					</form>
				</div>
			</div>
			<div class="contact_info">
				<div class="contact_info_wrap">
					<p class="contact_info_title">MAILING ADDRESS</p>
					<p>1600 Amphitheatre Parkway<br />
						Mountain View CA 94043<br />
						United States</p>
				</div>
				<div class="contact_info_wrap">
					<p class="contact_info_title">CONTACT INFO</p>
					<p>+1 (312) 380-6650</p>
					<p class="text_yellow_13">contact@construction.com</p>
					<p class="text_yellow_13">@construction_llc</p>
				</div>
				<div id="map" class="contact_google_map"></div>
			</div>
		</div>
	</div>

	<script>
		function myMap() {
		  var mapCanvas = document.getElementById("map");
		  var mapOptions = {
		    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
		  };
		  var map = new google.maps.Map(mapCanvas, mapOptions);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
@endsection



