@extends('frontend.layouts.app')
@section('content')

	<style>
		bodytest{
			height:60vh;
			display: flex;
			justify-content: space-around;
			align-items: center;
			flex-direction: column;
		}

		.forms{
			width:100%;
			position: relative;
			height:60px;
			overflow: hidden;
			margin-bottom: 40px;
		}

		.forms input{
			width: 100%;
			height:100%;
			color: #595f6e;
			padding-top:20px;
			border: none;
			outline: none;
		}

		.forms label{
			position: absolute;
			bottom: 0px;
			left:0%;
			width:100%;
			height:100%;
			pointer-events: none;
			border-bottom: 1px solid black;
		}

		.forms label::after{
			content: '';
			position: absolute;
			left:0px;
			bottom: -1px;
			height:100%;
			width:100%;
			border-bottom: 3px solid #ff5722;
			transform: translateX(-100%);
		}

		.content-name{
			position: absolute;
			bottom: 5px;
			left: 0px;
			transition: all 0.3s ease;
		}

		.forms input:focus + .label-name .content-name,
		.forms input:valid + .label-name .content-name{
			transform: translateY(-100%);
			font-size: 14px;
			color: #ff5722;

		}

		.forms input:focus + .label-name::after,
		.forms input:valid + .label-name::after {
			transform: translateX(0%);
		}
	</style>

	<section class="banner-area causes-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner-title">
						<h1>Contact
						</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<span class="messages-text active orange"> {!! Session::has('msg') ? Session::get("msg") : '' !!} </span>

	<div class="donate-page-content pdb90">
		<div class="container">

			<div class="row">
				<div class="col-md-5">
					<div class="pdt80 pdb40">
						<h3>We'd love to hear from you</h3>
					</div>

					<div class="donate-form">
						<form action="{{route('contact.contactrequest')}}"
							  method="post" class="form-newsletter">
							@csrf
							<div class="forms">

								<input type="text" name="name" autocomplete="off" required/>
								<label for="name" class="label-name">
			<span class="content-name">
				Name
			</span>
								</label>

							</div>

							<div class="forms">

								<input type="number" name="phonenumber" autocomplete="off" required/>
								<label for="number" class="label-name">
			<span class="content-name">
				Phone Number
			</span>
								</label>

							</div>


							<div class="forms">

								<input type="text" name="email" autocomplete="off"/>
								<label for="email" class="label-name">
			<span class="content-name">
				Email(Optional)
			</span>
								</label>

							</div>


							<div class="comment-box  pdt20">
								<div class="single-input-box">
									<textarea class="form-control" name="message" placeholder="YOUR MESSAGE ......." required></textarea>
								</div>

							</div>

							<button type="submit" class="sune-btn orange-bg fl-right">SUBMIT</button>

						</form>



					</div>

				</div>
<div class="col-md-1"></div>
				<div class="col-md-6">
					<div class="pdt80 pdb40">
						<h3>Reach out to us directly</h3>
					</div>

					<div class="row">
						<div class="col-md-6">
					<div class="collection-rate">
						<div class="fund">
							<div class="icon">
								<i class="ion-ios-location"></i>
							</div>
							<div class="text">
								<span>53 Wellington St, <br>Hamilton East 3216 </span>
							</div>
						</div>
					</div>
						</div>

						<div class="col-md-6">
							<div class="collection-rate pdt8">
								<div class="fund">
									<div class="icon">
										<i class="ion-ios-telephone"></i>
									</div>
									<div class="text">
										<span>(07) 858 3453</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="map-responsive">
						<iframe src="https://maps.google.com/maps?q=%2053%20Wellington%20St%2C%20Hamilton%20East%203216%20&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				<div class="col-md-1"></div>

			</div>
		</div>
		</div>
	</div>

@endsection
