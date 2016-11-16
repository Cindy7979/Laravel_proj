@extends('master')

@section('link_css')
<link rel="stylesheet" type="text/css" href="../../css/hover_effect.css">
<link rel="stylesheet" type="text/css" href="../../css/hover_effect_common.css">
@endsection


@section('navigation')
	<div id="project">
		@include('layouts.navigationVer2')
	</div>
@endsection

@section('page_title')
	<div class="page_title_bg">
	  	<div class="container">
	  		<h1 class="float_left">PROJECTS</h1>
	  		<input type="button" name="get_in_touch" value="GET IN TOUCH" class="button_deco float_right" />
			</div>
	</div>
@endsection

@section('breadcrumbs')
	<div class="breadcrumbs">
		<div class="container">
			<div><span class="text_dark_gray_bold_12">Construction Theme  &nbsp;&nbsp;> &nbsp;</span> <span class="text_dark_gray_12"> Project</span></div>
		</div>
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="project_sort_menu">
			<ul>
				<li><a href="#">All Projects</a></li>
				<li><a href="#">Interior Design</a></li>
				<li><a href="#">Education</a></li>
				<li><a href="#">Green Building</a></li>
				<li><a href="#">Healthcare</a></li>
				<li><a href="#">Office</a></li>
			</ul>
		</div>
		<div class="img_list">
			<section class="main">
				<ul class="ch-grid">
					<li>
						<div class="ch-item ch-img-1">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-2">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-3">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-4">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-5">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-6">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-7">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-8">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item ch-img-9">
							<div class="ch-info">
								<h4>FRANCH QUARTER INN</h4>
								<input type="button" name="read_more" value="Read More" class="ch_btn" />
							</div>
						</div>
					</li>
				</ul>
			</section>
		</div>
	</div>
@endsection



