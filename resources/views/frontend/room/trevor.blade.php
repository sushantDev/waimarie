@extends('frontend.layouts.app')

@section('content')

    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Trevor Fan Club
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ash-white-bg">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    Kia Ora!
                </h2>
            </div>

            <div class="shop-detial-body mt80 pdb35">
                <div class="container">
<div class="row">
    <div class="col-md-6">
                    <div class="shop-item-detial-tab text-center">
                        <div class="tab-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tz-gallery padding-none">

                                        <div class="row mt10">
                                            @foreach($trevors as $trevor)
                                                @if($loop->first)
                                                        <a class="lightbox" href="{{asset($trevor->image->path)}}">
                                                            <img src="{{asset($trevor->image->path)}}" alt="{{$trevor->title}}"
                                                                 class="img-responsive img-large-trevor">
                                                        </a>
                                                @endif
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tz-gallery">

                            <div class="row">

                                <div class="service-carousel">
                                    @foreach($trevors as $trevor)
                                        <div class="col-md-4" style="width: 100%">
                                            <a class="lightbox" href="{{asset($trevor->image->path)}}">
                                                <img src="{{asset($trevor->image->path)}}" alt="{{$trevor->title}}"
                                                     class="img-gallery img-trevors">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
    </div>

    <div class="col-md-6">
        <h3>
            My name’s Trevor and I am a the charge in here at the Waimarie: Hamilton East community House.
        </h3>

        <p class="pdb20">
            You can drop by anytime and say hi to me!
        </p>

        <p class="pdb20">
            I am quite a friendly cat and I love it when my friends caress me.
        </p>
    </div>
                </div></div>

            </div>

        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    @endsection