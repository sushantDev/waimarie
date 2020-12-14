@extends('frontend.layouts.app')

@section('content')

    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Services</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ash-white-bg">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    Room Hire
                </h2>
            </div>

            <div class="shop-detial-body pdb80">
                <div class="row">
                    <div class="col-md-12">
                        <div class="image">
                            <img src="{{asset('assets/waimariedemo/images/waimarie/room-hire.jpg')}}"
                                 class="img-responsive" alt="blog image">
                        </div>

                        <div class="event-text pdt20">

                            <ul style="list-style: none">
                                <li class="pdb20">
                                    Please advise of any cancellations as soon as possible. We require a minimum of 24hours (delete cancellation) notice prior to the booking date. Failure to give adequate notice of a cancellation will result in your group being invoiced for the booking as other groups may have used your timeslot.                                    </li>

                                <li class="pdb20">
                                    1 change of your booking is free. Every subsequent change will result in a $5 administration fee.
                                </li>
                            </ul>

                            <h5>
                                NB Any bookings that need to be invoiced attract 15% GST. Donations (cash and cheque paid without an invoice) are called “room donation” and do not attract GST.
                            </h5>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
    <div class="container">
        <div class="text-center pdt65">
            <h2 class="service-title">
                Lounge
            </h2>
        </div>

        <div class="shop-detial-body pdb80 video-area">

            <div class="row">
                <div class="col-md-12">
                    <div class="tz-gallery">

                        <div class="row">
                            @foreach($lounges as $lounge)

                                @if($loop->first)

                                    <div class="col-md-12">
                                        <a class="lightbox" href="{{asset($lounge->image->path)}}">
                                            <img src="{{asset($lounge->image->path)}}" alt="{{$lounge->title}}"
                                                 class="img-responsive img-large-room">
                                        </a>
                                    </div>
                                @endif

                            @endforeach

                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                    <div class="tz-gallery">

                        <div class="row">
                            <div class="service-carousel">

                            @foreach($lounges as $lounge)

                                @if(!$loop->first)

                                    <div class="col-md-4" style="width:100%">
                                        <a class="lightbox" href="{{asset($lounge->image->path)}}">
                                            <img src="{{asset($lounge->image->path)}}" alt="{{$lounge->title}}"
                                                 class="img-responsive img-large-room">
                                        </a>
                                    </div>
                                @endif

                            @endforeach
                            </div>
                        </div>

                    </div>
            </div>

        </div>

    </div>
</section>

    <section class="ash-white-bg">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    RAUMATI(outside room):
                </h2>
            </div>

            <div class="shop-detial-body pdb80 video-area">

                <div class="row">
                    <div class="col-md-12">
                        <div class="tz-gallery">

                            <div class="row">
                                @foreach($rumatis as $rumati)

                                    @if($loop->first)

                                        <div class="col-md-12">
                                            <a class="lightbox" href="{{asset($rumati->image->path)}}">
                                                <img src="{{asset($rumati->image->path)}}" alt="{{$rumati->title}}"
                                                     class="img-responsive img-large-room">
                                            </a>
                                        </div>
                                    @endif

                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="tz-gallery">

                        <div class="row">
                            <div class="service-carousel">

                                @foreach($rumatis as $rumati)

                                    @if(!$loop->first)

                                        <div class="col-md-4" style="width:100%">
                                            <a class="lightbox" href="{{asset($rumati->image->path)}}">
                                                <img src="{{asset($rumati->image->path)}}" alt="{{$rumati->title}}"
                                                     class="img-responsive img-large-room">
                                            </a>
                                        </div>
                                    @endif

                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    MEETING/INTERVIEW ROOM:
                </h2>
            </div>

            <div class="shop-detial-body pdb80 video-area">

                <div class="row">
                    <div class="col-md-12">
                        <div class="tz-gallery">

                            <div class="row">
                                @foreach($meetings as $meeting)

                                    @if($loop->first)

                                        <div class="col-md-12">
                                            <a class="lightbox" href="{{asset($meeting->image->path)}}">
                                                <img src="{{asset($meeting->image->path)}}" alt="{{$meeting->title}}"
                                                     class="img-responsive img-large-room">
                                            </a>
                                        </div>
                                    @endif

                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="tz-gallery">

                        <div class="row">
                            <div class="service-carousel">

                                @foreach($meetings as $meeting)

                                    @if(!$loop->first)

                                        <div class="col-md-4" style="width:100%">
                                            <a class="lightbox" href="{{asset($meeting->image->path)}}">
                                                <img src="{{asset($meeting->image->path)}}" alt="{{$meeting->title}}"
                                                     class="img-responsive img-large-room">
                                            </a>
                                        </div>
                                    @endif

                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="ash-white-bg">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    TABLES & CHAIRS, URN:
                </h2>
            </div>

            <div class="shop-detial-body pdb80 video-area pdt40">

                <div class="row">
                    <p>Trestle tables $10 per table</p>
                    <p>Chairs $3 per chair</p>
                    <p>$40 refundable deposit for 5 chairs</p>
                    <p>$40 refundable deposit per table</p>
                    <p>Payable before hiring. Any damages deductible from deposit.
                        Any further damage must be paid in addition to hire charges.</p>
                    <p>Must be returned by 10am during the week. For weekend hireage  pick up before 4pm on Friday and return
                        by 10am on Monday. Payment for these items by cash or cheque only.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    MEDIA EQUIPMENT HIRE:
                </h2>
            </div>

            <div class="shop-detial-body pdb80 video-area pdt40">

                <div class="row">
                    <h3>Multi Media Projector
                    </h3>
                    <p>$ 50 Bond (refunded)
                    </p>
                    <p>$ 25 half day/evening
                    </p>
                    <p>
                        $ 50 full day
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ash-white-bg">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    CONTACT:
                </h2>
            </div>

            <div class="shop-detial-body pdb80 video-area pdt40">

                <div class="row text-center">
                    <p>Waimarie: Hamilton East Community House, 53 wellington street, Hamilton East
                    </p>
                    <P>
                        contact: Ekta – (07) 858 3453 – <span class="active orange">admin@waimarie.org</span>
                    </P>
                </div>

                <div class="donate-form pdt40">
                        <div class="donate-duration">

                            <div class="donate-item one-time center-item">
                                <label for="donate-one-time" class="donate-one-time-buttons">
                                    <a href="http://waimarieham.wainet.org/wp-content/uploads/2018/09/Room-hire-SE-Hamilton.pdf" target="_blank">
                                        <i class="fa fa-link"></i>   More Venue Hire</a>
                                </label>

                            </div>
                            <div class="clear"></div>

                            <div class="donate-item one-time center-item">
                                <label for="donate-one-time" class="donate-one-time-buttons"><a href="http://www.glenviewcommunitycentre.co.nz/" target="_blank">
                                        <i class="fa fa-link"></i>   Western Community Centre (Nawton)</a>

                                </label>

                            </div>
                            <div class="clear"></div>
                        </div>
                </div>

            </div>
        </div>
    </section>

@endsection
