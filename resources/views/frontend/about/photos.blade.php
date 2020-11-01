@extends('frontend.layouts.app')
@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>PHOTOS AND VIDEOS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deference-making-area ash-white-bg recent-news-area">
        <div class="container-fluid">
            <div class="section-heading section-padding pdb55">
                <h2>GALLERY</h2>
            </div>

            <div class="row">

                <div class="tz-gallery">

                    <div class="row">

                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset('assets/waimariedemo/images/waimarie/photo-86.jpg')}}">
                                <img src="{{asset('assets/waimariedemo/images/waimarie/photo-86.jpg')}}" alt="Bridge" class="img-gallery">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset('assets/waimariedemo/images/waimarie/Professional picture that we yellowed.jpg')}}">
                                <img src="{{asset('assets/waimariedemo/images/waimarie/Professional picture that we yellowed.jpg')}}" alt="Park"
                                     class="img-gallery">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset('assets/waimariedemo/images/waimarie/Mar P1000854.JPG')}}">
                                <img src="{{asset('assets/waimariedemo/images/waimarie/Mar P1000854.JPG')}}" alt="Tunnel" class="img-gallery">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset('assets/waimariedemo/images/waimarie/trevor 1 June 18.jpeg')}}">
                                <img src="{{asset('assets/waimariedemo/images/waimarie/trevor 1 June 18.jpeg')}}" alt="Bridge" class="img-gallery">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset('assets/waimariedemo/images/waimarie/our people 2.jpg')}}">
                                <img src="{{asset('assets/waimariedemo/images/waimarie/our people 2.jpg')}}" alt="Park" class="img-gallery">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="{{asset('assets/waimariedemo/images/waimarie/Dec DSC01034.JPG')}}">
                                <img src="{{asset('assets/waimariedemo/images/waimarie/Dec DSC01034.JPG')}}" alt="Tunnel" class="img-gallery">
                            </a>
                        </div>


                    </div>

                </div>


            </div>

        </div>
    </section>
@endsection