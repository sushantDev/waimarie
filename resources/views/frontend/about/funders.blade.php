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

    {{--<section class="deference-making-area ash-white-bg recent-news-area">--}}
        {{--<div class="container-fluid">--}}


            {{--<div class="row funders-text">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-body">--}}
                                {{--<img src="{{asset('assets/waimariedemo/images/waimarie/anz.png')}}" alt="Responsive image" class="img-rounded img-responsive img-funders">--}}
                            {{--</div>--}}
                            {{--<div class="panel-footer">ANZ Staff Foundation--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-body">--}}
                                {{--<img src="{{asset('assets/waimariedemo/images/waimarie/len.jpg')}}" alt="Responsive image" class="img-rounded img-responsive img-funders">--}}
                            {{--</div>--}}
                            {{--<div class="panel-footer">Len Reynold--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-body">--}}
                                {{--<img src="{{asset('assets/waimariedemo/images/waimarie/lions.jpg')}}" alt="Responsive image" class="img-rounded img-responsive img-funders">--}}
                            {{--</div>--}}
                            {{--<div class="panel-footer">Lion Foundation--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

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
{{--                    {{dd(fun)}};--}}
                    <div class="col-lg-3 col-xs-6 pdl0 pdr0 client-parent">
                        <div class="single-client">
                            <div class="company-logo">
                                {{--<img src="{{asset('assets/waimariedemo/images/waimarie/anz.png')}}" alt="Responsive image" class="img-rounded img-responsive img-funders">--}}

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
@endsection