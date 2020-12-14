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


    <section class="deference-making-area ash-white-bg recent-news-area">
        <div class="container">
            <div class="section-heading section-padding pdb55">
                @foreach($servicestitles as $servicetitle)
                    <h2>{!! $servicetitle->title !!}</h2>
                @endforeach
            </div>

             <div class="shop-detial-body pdb35">

            @foreach($albums as $album)

                @if($album->category !== 'room-hire')
            <div class="row pdb35">

                <div class="col-md-6">
                    <div class="shop-item-detial-tab text-center">
                        <div class="tab-content mt20">
                            <div id="image-1" class="tab-pane fade in active">
                                <img src="{{asset($album->image->path)}}" alt="shop item" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    @if($album->category == 'coursesworkshopsgroups')

                    <div class="shop-item-detail">
                        <span class="coures-title pdt20">{!! $album->title !!}</span>
                            <div class="product pdb30">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfOYNrC6JisAdzESJxpAxmtdqSPzf3JQC7fgo4brGiMdUpH0A/viewform" class="buy-now-button orange-bg" target="_blank">
                                    <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>&nbsp;&nbsp;Enroll Now
                                </a>
                            </div>

                        <p>{!! $album->content !!}</p>


                    </div>
                    @else
                        <p>{!! $album->content !!}</p>
                        @endif


                </div>

            </div>
                @endif
                 @endforeach


                @if($album->category == 'room-hire')


                <div class="row">

                    <div class="col-md-12">
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScY9ILate4Wf-iUt9HryMxFcBlxmkfzJwD9o2LBf9tQvWJ3mw/viewform">
                                        <img src="{{asset('assets/waimariedemo/images/waimarie/room-hire.jpg')}}" alt="room-hire" class="img-responsive">
                                    </a>

                    </div>

                    <div class="col-md-12">
                        <div class="event-detail-item">
                            <div class="event-text">
                              <ul style="list-style: none">
                                  <li class="pdb20">
                                      Please advise of any cancellations as soon as possible. We require a minimum of 24hours (delete cancellation) notice prior to the booking date. Failure to give adequate notice of a cancellation will result in your group being invoiced for the booking as other groups may have used your timeslot.
                                  </li>

                                    <li class="pdb20">
                                        1 change of your booking is free. Every subsequent change will result in a $5 administration fee.
                                    </li>
                              </ul>

                                <h5>NB Any bookings that need to be invoiced attract 15% GST. Donations (cash and cheque paid without an invoice) are called “room donation” and do not attract GST.

                                    </h5>

                            </div>

                        </div>
                    </div>
                </div>
@endif

                    <div class="row">
                        @foreach($albums as $album)
                            @if($album->category == 'room-hire')

                            <div class="section-heading section-padding pdb55">
                                <h2>{!! $album->title !!}</h2>
                            </div>

                            @endif

                        @endforeach


                            <div class="tz-gallery"f>

                                <div class="row">
                                    @foreach($albums as $album)

                                    @if($album->category == 'room-hire')

                                        <div class="col-sm-6 col-md-4">
                                            <a class="lightbox" href="{{asset($album->image->path)}}">
                                                <img src="{{asset($album->image->path)}}" alt="{{$album->title}}"
                                                     class="img-gallery">
                                            </a>
                                        </div>
                                    @endif

                                    @endforeach

                                </div>

                            </div>


                        </div>


            </div>

        </div>
    </section>

@endsection