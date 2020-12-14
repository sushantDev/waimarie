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

    <section class="deference-making-area recent-news-area">
        <div class="container-fluid">
            <div class="section-heading section-padding pdb55">
                <h2>PHOTOS</h2>
            </div>

            <div class="banner-preduct-wrapper">
                <div class="container">
                    <div class="row">


                        @foreach( $gallerycategorys->chunk(7) as  $slide)
                            @foreach($slide as $sl)
                            @if($loop -> first)
                                    <div class="col-md-9">
                                <div class="banner-product-image mt-10">
                                    <a href="{{$sl->url?$sl->url:route('gallery', ['slug'=>$sl->slug])}}">
                                        <img src="{{$sl->image->path}}"
                                             class="img-fluid img-responsive img-large" alt="Banner images">

                                    </a>
                                    {{--<div class="overlay"></div>--}}
                                    {{--{{route('show_album_view', ['id'=>$album->id])}}--}}
                                    <div class="product-banner-title">
                                        <h3><a href="{{$sl->url?$sl->url:route('gallery', ['slug'=>$sl->slug])}}" class="topic-photos">{{$sl->title}}</a></h3>
                                    </div>
                                </div>
                            </div>
                            @else

                                    <div class="col-md-3">
                                <div class="banner-product-image mt-10">
                                    <a href="{{$sl->url?$sl->url:route('gallery', ['slug'=>$sl->slug])}}">
                                        <img src="{{$sl->image->path}}"
                                             class="img-fluid img-responsive" alt="Banner images">

                                    </a>
                                    {{--<div class="overlay"></div>--}}

                                    <div class="product-banner-title">
                                        <h3><a href="{{$sl->url?$sl->url:route('gallery', ['slug'=>$sl->slug])}}" class="topic-photos">{{$sl->title}}</a></h3>
                                    </div>
                                </div>

                            </div>
                                @endif
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="partner-area ash-white-bg pdb80 video-area">
            <div class="section-heading section-padding pdb55 pages-style-heading">
                <h1>Videos</h1>
                <p>Movies from Storytelling Workshop for kids with They call me ninu
                </p>
            </div>
            {{--<div class="all-client">--}}

        @foreach($videos as $video)
            @if($loop -> first)
            <iframe src="{{asset($video->url)}}" frameborder="0" allowfullscreen=""
            id="fitvid199437" class="pdt40 videosurl"></iframe>
            @endif
            @endforeach



                <div class="row no-margin row-eq-tab video-carousel">
                    @foreach($videos as $video)
                            @if(!$loop -> first)

                                    <div class="col-md-3 pdt70">
                                    <iframe src="{{asset($video->url)}}" frameborder="0" allowfullscreen=""
                                    id="fitvid199437"></iframe>
                                    </div>

                        @endif
                    @endforeach
                </div>
    </section>
@endsection