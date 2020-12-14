{{--@extends('frontend.layouts.app')--}}

{{--<!--=================================--}}
{{--banner -->--}}
{{--@section('content')--}}

    {{--<section class="news-content section-padding single-service-page our-features in-wrapper no-container no-pb">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}

                {{--<div class="col-md-12">--}}
                    {{--<div class="card-container">--}}
                        {{--<div class="row" style="border: 5px solid #f1f1f1; border-bottom: 5px solid #0787a5;">--}}
                            {{--@foreach($album->Photos as $photo)--}}
                                {{--<a href="/albums/{{$photo->image}}" data-lightbox="gallery"--}}
                                   {{--style="width:1000px; height:500px;">--}}
                                    {{--<div class="col-lg-3">--}}
                                        {{--<img class="thumbnail" style="height: 200px;" alt="{{$album->title}}"--}}
                                             {{--src="{{asset('/albums/'. $photo->image)}}">--}}
                                        {{--<div class="caption">--}}
                                            {{--<p>{{$photo->description}}</p>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

{{--@endsection--}}

{{--@push('scripts')--}}
    {{--<script type="text/javascript" src="{{asset('js/lightbox.min.js')}}"></script>--}}
{{--@endpush--}}

@extends('frontend.layouts.app')
@section('content')

    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


<section class="deference-making-area recent-news-area">
    <div class="container-fluid">
        <div class="section-heading section-padding pdb55">
            @foreach($gallerytitles as $gallerytitle)
                <h2>{!! $gallerytitle->title !!}</h2>
            @endforeach
        </div>

        <div class="row">

            <div class="tz-gallery">

                <div class="row">

                    @foreach($albums as $album)
                        {{--{{dd($album)}}--}}
                    <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="{{asset($album->image->path)}}">
                            <img src="{{asset($album->image->path)}}" alt="{{$album->title}}" class="img-gallery">
                        </a>
                    </div>
                        @endforeach

                </div>

            </div>


        </div>
    </div>
</section>

@endsection