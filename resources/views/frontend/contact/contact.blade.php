@extends('frontend.layouts.app')
@section('content')
<!-- START SECTION BREADCRUMB -->
	<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Contact</h1>
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <nav aria-label="breadcrumb">
	                  <ol class="breadcrumb justify-content-sm-end">
	                    <li class="breadcrumb-item"><a href="#">Home</a></li>
	                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Contact</a></li>
	                  </ol>
	                </nav>
	            </div>
	        </div>
	    </div>
	</section>
	<!-- END SECTION BANNER -->
	<!-- START SECTION CONTACT -->
	<section class="small_pb">
		<div class="container">
	    	<div class="row justify-content-center">
	        	<div class="col-xl-6 col-lg-8">
	            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
	                    <div class="heading_s1 text-center">
	                        <h2>Get In Touch</h2>
	                    </div>
	                    <p></p>
	                    <div class="small_divider"></div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	        	<div class="col-12">
	            	<div class="box_shadow1 radius_all_10">
	                	<div class="row no-gutters">
	                    	<div class="col-md-6 animation" data-animation="fadeInLeft" data-animation-delay="0.02s">
	                        	<div class="padding_eight_all">
	                                <div class="field_form">
                                        <form action="{{route('contact.inquiry')}}" method="post" name="enq">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Name" id="first-name"
                                                           class="form-control" name="name" type="text">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Email" id="email"
                                                           class="form-control" name="email" type="email">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input required="required" placeholder="Phone No." id="phone"
                                                           class="form-control" name="phone" type="tel">
                                                </div>
                                                <div class="form-group col-12">
                                                    <input placeholder="Subject" id="subject" class="form-control"
                                                           name="subject" type="text">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <textarea required="required" placeholder="Message" id="description"
                                                              class="form-control" name="message" rows="3"></textarea>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" title="Submit Your Message!"
                                                            class="btn btn-default" id="submitButton" name="submit"
                                                            value="Submit">Submit
                                                    </button>
                                                </div>
                                                <div class="col-lg-12 text-center">
                                                    <div id="alert-msg" class="alert-msg text-center"></div>
                                                </div>
                                            </div>
                                        </form>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-6 animation" data-animation="fadeInRight" data-animation-delay="0.4s">
	                            <div class="contact_map map_radius_rtrb overflow-hidden h-100">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3532.771274363564!2d85.311878664538!3d27.69346333270995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smaw!5e0!3m2!1sen!2snp!4v1579776272111!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
<!-- END SECTION CONTACT -->
	<!-- START SECTION CONTACT -->
	<section class="small_pt">
		<div class="container">
	    	<div class="row justify-content-center">
	        	<div class="col-xl-6 col-lg-8">
	            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
	                    <div class="heading_s1 text-center">
	                        <h2>Contact Information</h2>
	                    </div>
	                    <p></p>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-4" style="margin: auto;">
	                <div class="overlay_bg_default_90 icon_box text-center text_white radius_all_10 background_bg animation overlay_card" data-img-src="{{asset('assets/images/address_img.jpg')}}" data-animation="fadeInUp" data-animation-delay="0.02s">
	                	<div class="box_icon mb-3">
	                		<img style="width: 40px;" src="{{asset('assets/images/map_icon.png')}}" alt="map_icon">
	                    </div>
	                    <div class="intro_desc">
	                        <p>{!! setting('address') !!} </p>

	                    </div>
	                </div>
	            </div>
	            <!-- <div class="col-md-4">
	            	<div class="overlay_bg_light_green_90 icon_box text-center text_white radius_all_10 background_bg animation overlay_card" data-img-src="{{asset('assets/images/call_img.jpg')}}" data-animation="fadeInUp" data-animation-delay="0.03s">
	                	<div class="box_icon mb-3">
	                		<img src="{{asset('assets/images/phone_icon.png')}}" alt="phone_icon">
	                    </div>
	                   <div class="intro_desc">
	                        <h5>Call Us</h5>
	                        <p>{{setting('phone')}}</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-4">
	            	<div class="overlay_bg_default_90 icon_box text-center text_white radius_all_10 background_bg animation overlay_card" data-img-src="{{('assets/images/email_img.jpg')}}" data-animation="fadeInUp" data-animation-delay="0.04s">
	                	<div class="box_icon mb-3">
	                        <img src="{{asset('assets/images/email_icon.png')}}" alt="email_icon">
	                    </div>
	                    <div class="intro_desc">
	                        <h5>Email</h5>
	                        <p>{{setting('email')}}</p>
	                    </div>
	                </div>
	            </div> -->
	        </div>
	    </div>
	</section>
<!-- END SECTION CONTACT -->
@endsection
