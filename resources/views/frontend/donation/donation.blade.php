@extends('frontend.layouts.app')
@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Donations
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <span class="messages-text active orange"> {!! Session::has('msg') ? Session::get("msg") : '' !!} </span>

    <section class="partner-area ash-white-bg pdb80 empty-header">
        <div class="container">

            <div class="urgent-causes pdb20">

                <div class="text-right pdb20">
                    <a href="{{route('donate')}}" class="sune-btn orange-bg">ONLINE DONATION <i class="fa fa-heart"></i></a>
                </div>

                <p>
                    Approximately 10,000 residents in South East Hamilton and beyond use our services each year.  People come from varied cultural, economic and ethnic backgrounds and seek us out for varying reasons.  Many face financial hardship or need help to resolve family or legal issues.  They may be new migrants to the area, or they might want to learn a new skill.
                </p>

                <p>
                    We support individuals and whanau by providing a range of community services designed to enhance personal and community well-being, empowerment and positive change.  We encourage respect and understanding of the Treaty of Waitangi and cultural diversity.  Services include: Free budgeting advice, legal advice and advocacy (WIN, housing, ACC and similar) community education courses, gardening, room hire, vegetable and fruit boxes, photocopying, information and referrals, and similar.
                </p>

                <p>
                    Community house co-ordinator Jane Landman believes the scholarship will be a win-win for Waimarie and the scholarship recipient. “It will be good to have a university voice for the Community House,” she says. “We are also keen to recruit younger people and new members from the area.”.
                </p>

                <p>
                    Sourcing adequate funding is an on-going challenge for us and we need your help to continue to provide these much needed community services.  We appreciate any donation, no matter how large or small.  If you are able to help, please contact Waimarie ph 858 3453; email: manager@waimarie.org or you can post a donation or deposit funds directly into our bank account. (Details as below).  Remember all donations over $5 are tax deductible so please contact us for a receipt.
                </p>

                <p>
                    Thank you for your support. Together we can build our community!
                </p>

                <p>
                <h3>Post to:</h3>Waimarie Hamilton East Community <br>
                53 Wellington St, Hamilton East, Hamilton 3216
                </p>

                <p>
                    Or Internet banking deposit SEKCA bank account: <span class="active orange">03-1355-0637160-00</span>

                </p>
                <p>
                    Reference details: “Donation” and your name if appropriate.
                </p>


            </div>


            <div class="urgent-causes pdt20">
                <h3>
                    Bequests – Leave a lasting legacy in your community!

                </h3>

             <p>
                 Waimarie is committed to providing relevant, cost effective, easily accessible services to the local community.  By leaving a gift in your will, you will be supporting your local community and ensuring ongoing access to much needed community resources. You will be enhancing community well-being and helping make South East Hamilton a more integrated, vibrant and resilient place, with residents who are engaged, empowered, informed, and respectful of each other.
             </p>

                <p>
                    If you would like more information about how to leave a bequest to Waimarie please contact us.
                </p>

            </div>
        </div>
    </section>

@endsection