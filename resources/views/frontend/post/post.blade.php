@extends('frontend.layouts.app')

@section('content')

    <section class="banner-area causes-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-title">
                        <h1>Posts</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="blog-detail-body pdb90 ash-white-bg">
    <div class="container">
        <div class="row mt100">

            @foreach($posts as $post)

            <div class="col-md-9">
                <div class="blog-list-item">
                    <div class="image">
                        <img src="{{asset($post->image->path)}}" class="img-responsive" alt="Post image">
                    </div>
                    <div class="blog-list-text pdt40">
                        <h3>{!! $post->title !!}</h3>
                        <p>
                           {!! $post->content !!}
                        </p>
                      </div>
                </div><!--/.blog-list-item-->

                <div class="share-social-media">
                    <span>SHARE ON:</span>
                    <ul class="colorfull-social-icon ">
                        <li><a href="www.facebook.com" class="facebook-icon"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="www.twitter.com" class="twitter-icon"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="www.instagram.com" class="google-icon"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
             </div>

            @endforeach

            <div class="col-md-3 white-background">
                <div class="sidebar">
                    <aside class="blog-page-popular-post">
                        <div class="border-heading">
                            <h4>OTHER POSTS</h4>
                        </div>
                        <div class="row">
                            @foreach($otherposts as $otherpost)
                            @if(($otherpost->slug) != ($post->slug))
                            <div class="col-md-12">
                                <div class="popular-post">
                                    <div class="image">
                                        <img src="{{asset($otherpost->image->path)}}" class="img-responsive" alt="causes">
                                    </div>
                                    <div class="meta-box">
                                        <span class="admin">{!! $otherpost->sub_description !!}</span>
                                    </div>
                                    <h5><a href="{!! $otherpost->slug!!}">{!! $otherpost->title !!}</a></h5>
                                    <p>{!! $otherpost->content !!}</p>
                                    <a class="btn btn-default logo-color" href="{!! $otherpost->slug!!}">
                                        Read More
                                    </a>
                                </div><!--/.popular-post -->
                            </div>
                                @endif
                                @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
