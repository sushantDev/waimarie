@extends('frontend.layouts.app')
@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>FUNDERS AND SUPPORTERS</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-area ash-white-bg pdb80">
        <div class="container">

                <div class="section-heading section-padding pdb55 pages-style-heading">
                    <h1>Funders</h1>
                    <p>A big thank you to our funders and supporters for 2015/2016
                    </p>
                </div>
            <div class="all-client">
                <div class="row no-margin row-eq-tab">
                    @foreach($funders as $funder)
                    <div class="col-lg-3 col-xs-6 pdl0 pdr0 client-parent">
                        <div class="single-client">
                            <div class="company-logo">
                                <img src="{{asset($funder->image->path)}}" alt="Responsive image" class="img-rounded img-responsive img-funders">
                            </div>
                            <div class="company-name">
                                <span>{!!$funder -> title  !!}</span>
                            </div>
                        </div><!--/.single-client-->
                    </div>

                        @endforeach
                </div>
            </div>
        </div>

    </section>

    <section class="partner-area grey-ash pdb80">
        <div class="container">

            <div class="section-heading section-padding pages-style-heading">
                <h1>Supporters</h1>

                    <div class="content pages-style-heading">

                        <ul style="list-style: none;">

                        @foreach($supporters as $supporter)

                                <li><i class="ion-android-arrow-forward"></i>
                                   &nbsp;&nbsp;<span> {!! $supporter->title !!}</span>
                                </li>

                            @endforeach
                        </ul>

                    </div>
            </div>

            <p>Also a big thank you to all those neighbours and volunteers who have given their time and energy to Waimarie.

            </p>

                </div>
    </section>
@endsection