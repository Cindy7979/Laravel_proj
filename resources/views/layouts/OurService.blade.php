@extends('master')

@section('link_css')
@endsection

@section('navigation')
	<div id="our_service">
	@include('layouts.navigationVer2')
	</div>
@endsection

@section('page_title')
	<div class="page_title_bg">
	  	<div class="container">
	  		<h1 class="float_left">OUR SERVICE</h1>
	  		<input type="button" name="get_in_touch" value="GET IN TOUCH" class="button_deco float_right" />
			</div>
	</div>
@endsection

@section('breadcrumbs')
	<div class="breadcrumbs">
		<div class="container">
			<div><span class="text_dark_gray_bold_12">Construction Theme  &nbsp;&nbsp;> &nbsp;</span> <span class="text_dark_gray_12"> Our Service</span></div>
		</div>
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="page_btm_padding_80">
			<div class="ser_container">
				<div><img src="../../images/our_service/service_img_1.png"></div>
				<div class="ser_image_padding">
					<p class="text_dark_gray_18">Metal Roofing</p>
					<p class="ser_des_txt">Homeowners can have confidence in their choice of a metal roofing cantractor knowling they have met certain requirements in their service.</p>
				</div>
				<div class="ser_txt_padding"><a href="#">VIEW SERVICE DETAIL</a></div>
			</div>
			<div class="ser_container">
				<div><img src="../../images/our_service/service_img_2.png"></div>
				<div class="ser_image_padding">
					<p class="text_dark_gray_18">General Contracting</p>
					<p class="ser_des_txt">As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
				</div>
				<div class="ser_txt_padding"><a href="#">VIEW SERVICE DETAIL</a></div>
			</div>
			<div class="ser_container">
				<div><img src="../../images/our_service/service_img_3.png"></div>
				<div class="ser_image_padding">
					<p class="text_dark_gray_18">Construction Consultant</p>
					<p class="ser_des_txt">Construction consultants provide expert proactive and forensic support for construction projects and construction claims.</p>
				</div>
				<div class="ser_txt_padding"><a href="#">VIEW SERVICE DETAIL</a></div>
			</div>
			<div class="ser_container">
				<div><img src="../../images/our_service/service_img_4.png"></div>
				<div class="ser_image_padding">
					<p class="text_dark_gray_18">House Renovation</p>
					<p class="ser_des_txt">With over thirty years of experience in residential renovation design and over 16,000 renovation plans delivered to this day.</p>
				</div>
				<div class="ser_txt_padding"><a href="#">VIEW SERVICE DETAIL</a></div>
			</div>
			<div class="ser_container">
				<div><img src="../../images/our_service/service_img_5.png"></div>
				<div class="ser_image_padding">
					<p class="text_dark_gray_18">Green Building</p>
					<p class="ser_des_txt">Green construction refers to a structure and using process that is environmentally responsible and resource-efficient throughout a building's life-cycle.</p>
				</div>
				<div class="ser_txt_padding"><a href="#">VIEW SERVICE DETAIL</a></div>
			</div>
			<div class="ser_container">
				<div><img src="../../images/our_service/service_img_6.png"></div>
				<div class="ser_image_padding">
					<p class="text_dark_gray_18">Laminate Flooring</p>
					<p class="ser_des_txt">The flooring professionals at Construction offering laminate flooring and timber flooring with award winning flooring installation services.</p>
				</div>
				<div class="ser_txt_padding"><a href="#">VIEW SERVICE DETAIL</a></div>
			</div>
		</div>
	</div>
@endsection



