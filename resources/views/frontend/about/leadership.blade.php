@extends('frontend.layouts.app')
@section('content')
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('assets/images/jcb8.jpg')}}" >
		<div class="container">
	    	<div class="row align-items-center">
	        	<div class="col-sm-6">
	            	<div class="page-title">
	            		<h1>Leadership</h1>
	                </div>
	            </div>
	            <div class="col-sm-6">
	                <nav aria-label="breadcrumb">
	                  <ol class="breadcrumb justify-content-sm-end">
	                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
	                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Leadership</a></li>
	                  </ol>
	                </nav>
	            </div>
	        </div>
	    </div> 
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single_event">
                    
                    <div class="event_title">
                        <div class="row align-items-end">
                            <div class="col-md-8">
                                <h2>Leadership</h2>
                                
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="row justify-content-center">
                            @foreach($leadership as $data)
                            <div class="col-lg-4 col-sm-6">
                                <div class="team_box team_style1 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                                    <div class="team_img ">
                                        <img class="new_img" src="{{asset($data->image->path)}}" alt="team1">
                                         
                                    </div>
                                     <div class="team_title radius_lbrb_10 text-center">
                                        <p class="team_name">  {{$data->name}}</p>
                                        <p class="team_position"> {{ $data->position }} </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                           
                            
                     </div>
                    
                    
                    
                </div>
            </div>
            <div class="col-lg-4 mt-lg-0 mt-4 pt-3 pt-lg-0">
                <div class="sidebar">
                    <div>
                        <h5 class="widget_title">Our Feeds</h5>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMAW-Academy-for-Skills-Development-102428581395086&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION COURSE DETAIL -->


@endsection
@push('scripts')
<script>
    $(function() {
    var $a = $(".tabs li");
    $a.click(function() {
        $a.removeClass("active");
        $(this).addClass("active");
    });
});

    
</script>

@endpush