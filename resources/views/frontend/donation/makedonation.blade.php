@extends('frontend.layouts.app')
@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Make Donation
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="donate-page-content pdb90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading section-padding">
                        <h2><span>our contribution as</span>
                            RELIEF FOR NEEDY</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="donate-form">

                        <form action="{{route('make.payment')}}"
                              method="post" class="form-newsletter">
                            @csrf

                            <div class="donate-amount-list">
                                <div class="donate-amount-item">
                                    <input type="radio" name="donateamount" class="clicking" value="$50" id="amount50">
                                    <label for="amount50">$50</label>
                                </div>
                                <div class="donate-amount-item">
                                    <input type="radio" name="donateamount" class="clicking" value="$100" id="amount100">
                                    <label for="amount100">$100</label>
                                </div>
                                <div class="donate-amount-item">
                                    <input type="radio" name="donateamount" class="clicking" value="$150" id="amount150">
                                    <label for="amount150">$150</label>
                                </div>
                                <div class="donate-amount-item">
                                    <input type="radio" name="donateamount" class="clicking" value="$200" id="amount200">
                                    <label for="amount200">$200</label>
                                </div>
                                <div class="donate-amount-item">
                                    <input type="radio" name="donateamount" class="clicking" value="" id="amount-other">
                                    <label for="amount-other">Other</label>
                                </div>
                            </div>

                                                        <div class="single-input-box single-input-boxs hide">
                            <input class="form-control" placeholder="YOUR DONATION AMOUNT* ......."
                            type="number" name="donationamount" id="donationamount">
                            </div>
                            <div class="comment-box pdt5">
                            <h4>PERSONAL INFO</h4>
                            <div class="row">
                            <div class="col-sm-6 name-parent">
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR FIRST NAME* ......." type="text" name="firstname" required="required">
                            </div>
                            </div>
                            <div class="col-sm-6 email-parent">
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR SECOND NAME ......." type="text" name="secondname">
                            </div>
                            </div>
                            </div>
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR EMAIL ......." type="text" name="email">
                            </div>
                            <div class="single-input-box">
                            <input class="form-control" placeholder="YOUR PHONE NUMBER* ......."
                            type="number" name="phone" required="required">
                            </div>
                            <div class="single-input-box">
                            <textarea class="form-control" name="message" placeholder="YOUR MESSAGE ......."></textarea>
                            </div>
                            </div>
                            <div class="payment-method pdt20 pointer-none">
                            <h4>PAYMENT METHOD</h4>
                            <div class="donate-item one-time">
                            <input type="radio" checked>
                            <label for="pay-pal-payment">PAY-PAL</label>
                            </div>
                            <div class="clear"></div>
                            </div>

                            <button type="submit" class="sune-btn orange-bg" onclick="return IsEmpty();">DONATE <i class="fa fa-heart"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="causes-detial pdt20">
                        <div class="image">
                            <img src="{{asset('assets/waimariedemo/images/waimarie/donation.jpg')}}" class="img-responsive" alt="causes">
                        </div>
                        {{--<div class="causes-barfiller-item">--}}
                            {{--<div class="raised">--}}
                                {{--RAISED--}}
                                {{--<span>$2345</span>--}}
                            {{--</div>--}}
                            {{--<div class="goal">--}}
                                {{--GOAL--}}
                                {{--<span>$3700</span>--}}
                            {{--</div>--}}
                            {{--<div class="clear"></div>--}}
                            {{--<div id="causes-one-barfiller" class="barfiller">--}}
                                {{--<div class="tipWrap">--}}
                                    {{--<span class="tip"></span>--}}
                                {{--</div>--}}
                                {{--<span class="fill" data-percentage="40"></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="causes-header pdt20">
                            <h4 class=" pdb10">Together we can build our community!</h4>
                            <p>
                                We support individuals and whanau by providing a range of community services designed to enhance personal and community well-being, empowerment and positive change.  We encourage respect and understanding of the Treaty of Waitangi and cultural diversity.  Services include: Free budgeting advice, legal advice and advocacy (WIN, housing, ACC and similar) community education courses, gardening, room hire, vegetable and fruit boxes, photocopying, information and referrals, and similar.
                            </p>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="share-social-media">
                                        <span>SHARE ON:</span>
                                        <ul class="colorfull-social-icon ">
                                            <li><a href="#" class="facebook-icon"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter-icon"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="google-icon"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#" class="linked-icon"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/.causes-detial-->
                </div>
            </div>
        </div>
    </div>

@endsection