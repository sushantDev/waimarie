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
                <h2>
                    Gallery - All Items
                </h2>
            </div>

            <div class="row">

                <div class="tz-gallery">

                    <div class="row">

                        @foreach($galleries as $gallery)
                            {{--{{dd($gallery)}}--}}
                            <div class="col-sm-6 col-md-4">
                                <a class="lightbox" href="{{asset($gallery->image->path)}}">
                                    <img src="{{asset($gallery->image->path)}}" alt="{{$gallery->title}}" class="img-gallery">
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>


            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
@endsection