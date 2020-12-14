@extends('frontend.layouts.app')
@section('content')

    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>TEAM MEMBERS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-area ash-white-bg pdb70">
        <div class="container">
            <div class="section-heading section-padding">
                <h2><span>KNOW MORE ABOUT OUR</span>TEAM MEMBERS</h2>
            </div>



            <div class="row owl-slider">

                <div class="team-carousel owl-carousel">
                @foreach($team as $t)
                <div class="item col-md-12">
                    <div class="recent-causes-item">

                        <div id="{!! ('progress' . $loop->iteration) !!}" class="colorfull-progress-active causes-item1" data-dimension="200"
                             data-text="" data-percent="65" data-fgcolor="#ff5722" data-bgcolor="transparent"
                             data-width="10" data-bordersize="10" data-animationstep="2">
                            <span class="circle-texts owl-lazy  " style="line-height: 200px; font-size: 15px;
                                    background: url({{asset($t->image->path)}});
                                    background-size: cover;"></span>
                        </div>
                        <div class="recent-causes-text text-center">
                            <h3><a href="#">{!! ($t->name) !!}</a></h3>
                            <span class="designation yellow">{!! ($t->position) !!}</span>
                            <p>Nam sollicitudin libero eu diam faucibus, sit amet hendrerit scelerisqususcipit. </p>
                            <ul class="colorfull-social-icon">
                                <li><a href="#" class="facebook-icon"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-icon"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="google-icon"><i class="fa fa-google"></i></a></li>
                                <li><a href="#" class="linked-icon"><i class="fa fa-linkedin"></i></a></li>
                            </ul>

                        </div>
                    </div><!--/.recent-causes-item-->
                </div>

                    @endforeach
                </div>
                           </div>
        </div>
    </section><!--/.team-area-->

@endsection

