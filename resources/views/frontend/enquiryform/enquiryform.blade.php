@extends('frontend.layouts.app')

@section('content')
    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Enquiry Form
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session()->has('success'))
        <div class="alert alert-success">
            @if(is_array(session('success')))
                <ul>
                    @foreach (session('success') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @else
                {{ session('success') }}
            @endif
        </div>
    @endif


    <section class="partner-area pdb80">
        <div class="container">

            <div class="section-heading section-padding pdb55 pages-style-heading">
                <h1>Enquiry about
                </h1>
                <p>* indicates required
                </p>
            </div>


            <form action="{{route('newsletter.newsletterrequest')}}" method="post" class="form-newsletter">
                @csrf
                <div class="row">
                    <div class="email-parent">
                        <div class="single-input-box">
                            <input type="email" id="email" required="required" name="email" class="form-control" placeholder="EMAIL ADDRESS* .......">
                        </div>
                    </div>
                    <div class="name-parent">
                        <div class="single-input-box">
                            <input type="text" id="firstname" required="required" name="firstname" class="form-control" placeholder="FIRST NAME* .......">
                        </div>
                    </div>
                    <div class="name-parent">
                        <div class="single-input-box">
                            <input type="text" id="lastname" name="secondname" class="form-control" placeholder="LAST NAME .......">
                        </div>
                    </div>

                    <div class="name-parent">
                        <div class="single-input-box">
                            <textarea class="form-control" name="message" placeholder="YOUR INQUIRY ......." required></textarea>
                        </div>
                    </div>

                    <input type="submit" value="INQUIRE" class="sune-btn" id="submitButton">

                    <div class="col-lg-12 text-center">
                        <div id="alert-msg" class="alert-msg text-center"></div>
                    </div>

                </div>

            </form>

        </div>

    </section>

    {{--<section class="partner-area ash-white-bg pdb80">--}}
        {{--<div class="container">--}}

            {{--<div class="section-heading section-padding pdb55 pages-style-heading">--}}
                {{--<h1>Newsletter Archived--}}
                {{--</h1>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="" alt="Newsletter Archive">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>Term 3' 19 newletter</h3>--}}
                            {{--<p>P1</p>--}}
                            {{--<p><a href="http://waimarieham.wainet.org/wp-content/uploads/2019/07/Waimarie-newsletter-T3-19-P1-1.pdf" class="btn btn-primary" role="button">Button</a>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


            {{--</div>--}}

        {{--</div>--}}

    {{--</section>--}}
@endsection