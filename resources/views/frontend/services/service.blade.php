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

    <section class="deference-making-area recent-news-area" id="coursesworkshopsgroups">
            <div class="container">
                <div class="text-center pdt65">
                <h2 class="service-title">
                COURSES/GROUPS
                </h2>
                </div>

                <div class="shop-detial-body border-bottom mt80 pdb80">

                    @foreach($courses as $course)
                    @if($course->image != null)
                        @if($loop->iteration%2 != 0)
                            <div class="row btm-line pdt40 pdb70">

                                <div class="col-md-6">
                                    <div class="shop-item-detial-tab text-center">
                                        <div class="tab-content mt20">
                                            <div id="image-1" class="tab-pane fade in active">
                                                <img src="{{asset($course->image->path)}}" alt="shop item" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                        <div class="shop-item-detail">
                                            <span class="coures-title pdt20">{!! $course->title !!}</span>
                                            <div class="product pdb30">
                                                <a href="{!! $course->url !!}" class="buy-now-button orange-bg" target="_blank">
                                                    <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Enroll Now
                                                </a>
                                            </div>

                                            <p>{!! $course->content !!}</p>


                                        </div>

                                </div>

                            </div>

                                        @else
                            <div class="row btm-line pdt40 pdb70">

                                <div class="col-md-6">

                                    <div class="shop-item-detail">
                                        <span class="coures-title pdt20">{!! $course->title !!}</span>
                                        <div class="product pdb30">
                                            <a href="{!! $course->url !!}" class="buy-now-button orange-bg" target="_blank">
                                                <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Enroll Now
                                            </a>
                                        </div>

                                        <p>{!! $course->content !!}</p>


                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="shop-item-detial-tab text-center">
                                        <div class="tab-content mt20">
                                            <div id="image-1" class="tab-pane fade in active">
                                                <img src="{{asset($course->image->path)}}" alt="shop item" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                @endif
                        @endif
                    @endforeach


                    @foreach($courses as $course)

                                @if($course->image == null && $loop->iteration%2 != 0)
                                    <div class="row btm-line pdt40 pdb70">

                                    <div class="col-md-12">

                                    <div class="shop-item-detail text-center">
                                    <span class="coures-title pdt20">{!! $course->title !!}</span>
                                    <div class="product pdb30">
                                        <a href="{!! $course->url !!}" class="buy-now-button orange-bg" target="_blank">
                                            <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Enroll Now
                                        </a>
                                    </div>

                                    <p>{!! $course->content !!}</p>

                                </div>

                                @endif

                                @if($course->image == null && $loop->iteration%2 == 0)
                                    <div class="row btm-line pdt40 pdb70">
                                        <div class="col-md-12">

                                            <div class="shop-item-detail text-center">
                                                <span class="coures-title pdt20">{!! $course->title !!}</span>
                                                <div class="product pdb30">
                                                    <a href="{!! $course->url !!}" class="buy-now-button orange-bg" target="_blank">
                                                        <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Enroll Now
                                                    </a>
                                                </div>

                                                <p>{!! $course->content !!}</p>

                                            </div>

                                        </div>
                                    </div>
                                @endif

                    @endforeach

                </div>
            </div>
                </div>
                </div>


        <p class="text-center pdb20">
            Your place on a course is not guaranteed until it is paid for. If a course is cancelled due to lack of numbers a full refund will be given.
        </p>

        <p class="text-center">
            For more info contact:
<br>
            Ekta Gyawali
<br>
            Waimarie: Hamilton East Community House
            <br>
            (07) 858 3453
            <br>
            admin@waimarie.org
        </p>
    </section>

    <section class="deference-making-area ash-white-bg recent-news-area" id="vegetable-fruit-box-11">
        <div class="container">
            <div class="text-center pdt65">
                <h2 class="service-title">
                    Vegetable & Fruit Box $11
                </h2>
            </div>

            <div class="shop-detial-body mt80 pdb35">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="shop-item-detial-tab text-center">
                                <div class="tab-content mt20">
                                    @foreach($vegetables as $vegetable)
                                        @if($loop->first)
                                    <div id="image-1" class="tab-pane fade in active">
                                        <img src="{{asset($vegetable->image->path)}}" alt="shop item" class="img-responsive">
                                    </div>
                                        @endif
                                    @endforeach


                                </div>
                                {{--<div class="service-carousel">--}}
                                <div class="tz-gallery">

                                    <div class="row">

                                        <div class="service-carousel">
                                        @foreach($vegetables as $vegetable)
                                            <div class="col-md-4" style="width: 100%">
                                                <a class="lightbox" href="{{asset($vegetable->image->path)}}">
                                                    <img src="{{asset($vegetable->image->path)}}" alt="{{$vegetable->title}}"
                                                         class="img-gallery img-services">
                                                </a>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>

                                {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="shop-item-detail pdt10-imp">
                                {{--<h3>Vegetable & Fruit Box $11--}}
                                {{--</h3>--}}
                                <div class="price">
                                    <h5>$11 for 1 box of fresh, seasonal fruits & vegetables
                                    </h5>
                                </div>

                                    <div class="color">
                                        <h5>To collect each Thursday from 10:30am. No delivery.
                                        </h5>
                                    </div>

                                <p>
                                    To Order:
                                </p>

                                <div class="event-text pdt20">

                                <ul style="list-style: none">
                                    <li class="pdb20">
                                        Call 07 858 3453 with your name, number of boxes and phone number.
                                    </li>

                                    <li class="pdb20">
                                        An order is placed only when it is paid in advance.
                                        <ul style="list-style: none">
                                            <li class="pdb20 pdt20">
                                                online banking before the end of Monday (bank details below) or
                                            </li>

                                            <li>
                                                cash at Waimarie Hamilton East prior Wednesday 1pm
                                            </li>
                                        </ul>
                                            </li>
                                </ul>
                                </div>

                                <p>
                                    Collect between10:30am and 4pm  each Thursday.
                                </p>

                                <p>
                                    Bank account number: 03 1355 0637160 00
                                </p>

                                <p>
                                    Name: SEKCA
                                </p>

                                <p>
                                    Add (your name, vege box) in the reference box
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="recent-news-area pdt65" id="legal-advice">
        <div class="container">
            <div class="text-center">
                <h2 class="service-title">
                    Legal advice
                </h2>
            </div>

            <div class="shop-detial-body mt80 pdb35">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="shop-item-detail pdt10-imp">

                                <p>
                                    Four free 10-15 minute appointments are available on Thursdays 10-11am at Waimarie.

                                </p>

                                <p>
                                    Collect between10:30am and 4pm  each Thursday.
                                </p>

                                <p>
                                    Only Family Law legal advice at present. It is provided by the lawyer Emma Miles.

                                </p>

                                <p>
                                    For an appointment call us (07 858 3453).

                                </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="shop-item-detial-tab text-center">
                                <div class="tab-content mt20">
                                    @foreach($legaladvices as $legaladvice)
                                        @if($loop->first)
                                            <div id="image-1" class="tab-pane fade in active">
                                                <img src="{{asset($legaladvice->image->path)}}" alt="shop item"
                                                     class="img-responsive">
                                            </div>
                                        @endif
                                    @endforeach


                                </div>
                                {{--<div class="service-carousel">--}}
                                <div class="tz-gallery">

                                    <div class="row">

                                        <div class="service-carousel">
                                            @foreach($legaladvices as $legaladvice)
                                                <div class="col-md-4" style="width: 100%">
                                                    <a class="lightbox" href="{{asset($legaladvice->image->path)}}">
                                                        <img src="{{asset($legaladvice->image->path)}}" alt="{{$legaladvice->title}}"
                                                             class="img-gallery img-services">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="ash-white-bg recent-news-area pdt65" id="budgeting-advice">
        <div class="container">
            <div class="text-center">
                <h2 class="service-title">
                    Budgeting Advice
                </h2>
            </div>

            <div class="shop-detial-body mt80 pdb35">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="shop-item-detial-tab text-center">
                                <div class="tab-content mt20">
                                    @foreach($budgetadvices as $budgetadvice)
                                        @if($loop->first)
                                            <div id="image-1" class="tab-pane fade in active">
                                                <img src="{{asset($budgetadvice->image->path)}}" alt="shop item"
                                                     class="img-responsive">
                                            </div>
                                        @endif
                                    @endforeach


                                </div>
                                {{--<div class="service-carousel">--}}
                                <div class="tz-gallery">

                                    <div class="row">

                                        <div class="service-carousel">
                                            @foreach($budgetadvices as $budgetadvice)
                                                <div class="col-md-4" style="width: 100%">
                                                    <a class="lightbox" href="{{asset($budgetadvice->image->path)}}">
                                                        <img src="{{asset($budgetadvice->image->path)}}" alt="{{$budgetadvice->title}}"
                                                             class="img-gallery img-services">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="shop-item-detail pdt10-imp">

                                <p>
                                    WBarry Wilcox 1e have free budget advice on Tuesdays 10am-3pm (by appointment only).   Call  Hamilton Budgeting Advisory Trust 07 838 1339 to book an appointment
                                </p>
<p>
    The following information is required for your appointment:
</p>
                                <div class="event-text pdt20">

                                <ul style="list-style: none">
                                    <li class="pdb20">
                                        Latest Bank statement covering one month’s transactions – essential
                                    </li>
                                </ul>
                                </div>

                                <p>
                                    PLUS THE FOLLOWING IF APPLICABLE
                                </p>

                                <div class="event-text pdt20">

                                <ul style="list-style: none">
                                    <li class="pdb20">
                                        Work and Income Benefit Breakdown
                                    </li>
                                    <li class="pdb20">
                                        Telephone/ Power Bills
                                    </li>
                                    <li class="pdb20">
                                        Hire Purchases/loans details
                                    </li>
                                    <li class="pdb20">
                                        Credit card statements
                                    </li>
                                    <li class="pdb20">
                                        Court Fine details
                                    </li>
                                    <li class="pdb20">
                                        Any other bills
                                    </li>
                                    <li class="pdb20">
                                        Any other documents you think may be helpful
                                    </li>
                                </ul>
                                </div>

                                <p>
                                    Please note:
                                    <br>
                                    If you cannot attend your appointment due to an EMERGENCY OR SICKNESS please ring to either cancel or reschedule. 07 838 1339 or free number 0800211211 and ask “Hamilton Budgeting Advisory Trust”
                                </p>

                                <p>
                                    If we do not receive notification, a THREE MONTH STANDDOWN will apply before you can book another appointment.
                                </p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="recent-news-area pdt65" id="benefithousing-nzacc-advocacy">
        <div class="container">
            <div class="text-center">
                <h2 class="service-title">
                    Benefit/Housing NZ/ACC Advocacy
                </h2>
            </div>

            <div class="shop-detial-body mt80 pdb35">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="shop-item-detail pdt10-imp">

                                <p>
                                    Craig Wills is a Hamilton Peoples’ advocacy worker based at Pukete Neighbourhood House. He sees clients at Waimarie by appointment. Craig can help you when you have problems with Work & Income, Housing New Zealand, ACC and give employment advice. He can advocate and act on your behalf. He has the Work & Income Benefit Fact File to refer to. This is a free service. You can contact Craig on 07 8504013 at Pukete Neighbourhood House.
                                </p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="shop-item-detial-tab text-center">
                                <div class="tab-content mt20">
                                    @foreach($benefits as $benefit)
                                        @if($loop->first)
                                            <div id="image-1" class="tab-pane fade in active">
                                                <img src="{{asset($benefit->image->path)}}" alt="shop item"
                                                     class="img-responsive">
                                            </div>
                                        @endif
                                    @endforeach


                                </div>
                                {{--<div class="service-carousel">--}}
                                <div class="tz-gallery">

                                    <div class="row">

                                        <div class="service-carousel">
                                            @foreach($benefits as $benefit)
                                                <div class="col-md-4" style="width: 100%">
                                                    <a class="lightbox" href="{{asset($benefit->image->path)}}">
                                                        <img src="{{asset($benefit->image->path)}}" alt="{{$benefit->title}}"
                                                             class="img-gallery img-services">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="ash-white-bg recent-news-area pdt65" id="events">
        <div class="container">
            <div class="text-center">
                <h2 class="service-title">
                    Events
                </h2>
            </div>

            <div class="shop-detial-body mt-80 pdb35">
                <div class="container">

                    <div class="shop-item-detial-tab text-center">
                    <div class="tab-content mt20">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tz-gallery">

                                    <div class="row">
                                            @foreach($events as $event)
                                                @if($loop->first && $event->content == null)
                                                    <div class="col-md-12">
                                                        <a class="lightbox" href="{{asset($event->image->path)}}">
                                                            <img src="{{asset($event->image->path)}}" alt="{{$event->title}}"
                                                                 class="img-responsive img-large-events">
                                                        </a>
                                                        <p>
                                                            {!!$event->title!!}
                                                        </p>
                                                    </div>
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
                                            @foreach($events as $event)
                                                @if(!$loop->first && $event->content == null)
                                                <div class="col-md-12" style="width: 100%">
                                                    <a class="lightbox" href="{{asset($event->image->path)}}">
                                                        <img src="{{asset($event->image->path)}}" alt="{{$event->title}}"
                                                             class="img-responsive img-events">
                                                    </a>
                                                    <p>
                                                        {!!$event->title!!}
                                                    </p>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>

                                    </div>
                                </div>
                </div>

                <div class="row" style="display: flex; justify-content: center">
                            @foreach($events as $event)
                                @if(!$event->content == null)
                                    <div class="col-md-4 text-center margin-0">
                                        <div class="content-border">
                                    {!! $event->content !!}
                                        </div>
                                    <p>
                                        {!!$event->title!!}

                                    </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
            </div>
        </div>
    </section>

@endsection
