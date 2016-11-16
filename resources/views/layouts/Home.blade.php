@extends('master')

@section('link_css')
@endsection


@section('navigation')
	@include('layouts.navigationVer1')
@endsection

@section('page_title')
@endsection

@section('breadcrumbs')
@endsection

@section('content')
	<div class="bg_color">
		<div class="header_img">
			<div class="container">
				<div class="header_title_wrap">
					<p class="header_title">YOUR DREAM HOUSE</p>
					<p class="header_sub_title">If you dream of designing a new home that takes full advantage<br />
					of the unique geography and view of land that you love<br /><br /></p>
					<input type="submit" name="our_service" value="OUR SERVICE >>" class="yellow_btn_deco_s">
					<input type="submit" name="get_a_quote" value="GET A QUOTE >>" class="white_border_btn_deco">
				</div>
			</div>
		</div>
		<div class="container up_layer">
			<div class="img_list">
				<div class="des_container">
					<img src="../../images/home/movie_img1.png" />
					<p class="text_dark_gray_18 padding_top_10">Best House Renovation</p>
					<p class="ser_des_txt">Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
					<a href="#">READ MORE</a>
				</div>
				<div class="des_container">
					<img src="../../images/home/movie_img2.png" />
					<p class="text_dark_gray_18 padding_top_10">The Effective Teamwork</p>
					<p class="ser_des_txt">As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
					<a href="#">THE BENEFITS</a>
				</div>
				<div class="des_container">
					<img src="../../images/home/movie_img3.png" />
					<p class="text_dark_gray_18 padding_top_10">The Green Building</p>
					<p class="ser_des_txt">Constructor explains how you can enjoy high end flooring trends like textured wood and realistic stones with new laminate flooring.</p>
					<a href="#">THE PROGRESS</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="heading_title">
			<p>U.S. Certified Contractors</p>
			<div class="bg_yellow_for_heading"></div>
		</div>
		<div class="img_list">
			<div class="des_container align_center padding_top_30">
				<img src="../../images/home/certi_icon1.png" />
				<p class="text_dark_gray_17 padding_top_10">Government Building</p>
				<p class="ser_des_txt">We understand you need a building that works for<br /> you and your organization, and it must function well.</p>
			</div>
			<div class="des_container align_center padding_top_30">
				<img src="../../images/home/certi_icon2.png" />
				<p class="text_dark_gray_17 padding_top_10">Health Care Construction</p>
				<p class="ser_des_txt">We are very familiar with the challenges of creating<br /> high-quality, cost-effective health care environments.</p>
			</div>
			<div class="des_container align_center padding_top_30">
				<img src="../../images/home/certi_icon3.png" />
				<p class="text_dark_gray_17 padding_top_10">Water Treatment</p>
				<p class="ser_des_txt">The most powerful things we do is help improve<br />water quality for millions of people each year.</p>
			</div>
		</div>
	</div>
	<div class="header_img2">
		<div class="container">
			<div class="header_title_wrap2">
				<p class="header_sub_title2">WORKING WITH US</p>
				<p class="header_title2">CONTRACTORS & CONSTRUCTION<br />MANAGERS SINCE 1989</p><br />
				<input type="submit" name="get_a_quote" value="GET A QUOTE >>" class="white_border_btn_deco">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="heading_title">
			<p>What We Do</p>
			<div class="bg_yellow_for_heading"></div>
		</div>
		<span class="carousel_prev carousel_color_light_gray">
			<i class="fa fa-angle-left"></i>
		</span>
		<span class="carousel_next carousel_color_light_gray">
			<i class="fa fa-angle-right"></i>
		</span>
		<div class="img_list">
			<div class="des_container">
				<img src="../../images/home/movie_img4.png" />
				<p class="text_dark_gray_18 padding_top_10">Metal Roofing</p>
				<p class="ser_des_txt">Homeowners can have confidence in their choice of a metal roofing contractor knowing they have met certain requirements in their services.</p>
				<a href="#">SERVICE DETAIL</a>
			</div>
			<div class="des_container">
				<img src="../../images/home/movie_img5.png" />
				<p class="text_dark_gray_18 padding_top_10">General Contracting</p>
				<p class="ser_des_txt">As the general contractor, we first create the highest level of trust and integrity with our clients. We value our role in the success of your project.</p>
				<a href="#">SERVICE DETAIL</a>
			</div>
			<div class="des_container">
				<img src="../../images/home/movie_img6.png" />
				<p class="text_dark_gray_18 padding_top_10">Construction Consultant</p>
				<p class="ser_des_txt">Construction consultants provide expert proactive and forensic support for construction projects and construction claims.</p>
				<a href="#">SERVICE DETAIL</a>
			</div>
		</div>
	</div>
	<div class="bg_dark_gray_color">
		<div class="container">
			<div class="heading_title_w">
				<p>Featured Works</p>
				<div class="bg_gray_for_heading"></div>
			</div>
			<span class="carousel_prev carousel_color_dark_gray">
				<i class="fa fa-angle-left"></i>
			</span>
			<span class="carousel_next carousel_color_dark_gray">
				<i class="fa fa-angle-right"></i>
			</span>
			<div class="img_list">
				<div class="des_container">
					<img src="../../images/home/movie_img7.png" />
				</div>
				<div class="des_container">
					<img src="../../images/home/movie_img8.png" />
				</div>
				<div class="des_container">
					<img src="../../images/home/movie_img9.png" />
				</div>
			</div>
		</div>
	</div>
	<div class="container bg_color">
		<div class="heading_title">
			<p>Recent News</p>
			<div class="bg_yellow_for_heading"></div>
		</div>
		<span class="carousel_prev carousel_color_light_gray">
			<i class="fa fa-angle-left"></i>
		</span>
		<span class="carousel_next carousel_color_light_gray">
			<i class="fa fa-angle-right"></i>
		</span>
		<div class="img_list">
			<div class="des_container">
				<img src="../../images/home/movie_img10.png" />
				<p class="text_dark_gray_18 padding_top_10">Finding New Buildings in the Dust</p>
				<p class="ser_des_txt">With the continued and growing emphasis on sustainability in construction we could be on the verge of a radical shift in how ...</p>
			</div>
			<div class="des_container">
				<img src="../../images/home/movie_img11.png" />
				<p class="text_dark_gray_18 padding_top_10">How To Build A Construction Plan</p>
				<p class="ser_des_txt">Learn how to market your contractor business professionally. In depth knowledge of attracting clients with online marketing strategies and deep thinking ...</p>
			</div>
			<div class="des_container">
				<img src="../../images/home/movie_img12.png" />
				<p class="text_dark_gray_18 padding_top_10">Construction Honored with AGC Builders</p>
				<p class="ser_des_txt">Last night, Construction was honored to accept a Best Builders Award from the Associated General Contractors of Vermont for the construction ...</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="colum_container">
			<div class="colum_wrap">
				<div class="heading_title">
					<p>Our Clients</p>
					<div class="bg_yellow_for_heading"></div>
				</div>
				<div class="div_table_col">
					<img src="../../images/home/client_icon1.png">
				</div>
				<div class="div_table_col">
					<img src="../../images/home/client_icon2.png">
				</div>
				<div class="div_table_col">
					<img src="../../images/home/client_icon3.png">
				</div>
				<div class="div_table_col">
					<img src="../../images/home/client_icon4.png">
				</div>
				<div class="div_table_col">
					<img src="../../images/home/client_icon5.png">
				</div>
				<div class="div_table_col	">
					<img src="../../images/home/client_icon6.png">
				</div>
			</div>
			<div class="colum_wrap">
				<div class="heading_title">
					<p>Testimonials</p>
					<div class="bg_yellow_for_heading"></div>
				</div>
				<p class="test_monial_item">Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with ‘real’ content. This is required when, for example, the final text is not yet available.</p>
				<div class="test_monial_photo">
					<img src="../../images/home/testimonial.png">
				</div>
				<p class="test_monial_name">Howard K.Stern</p>
			</div>
		</div>
	</div>

@endsection



