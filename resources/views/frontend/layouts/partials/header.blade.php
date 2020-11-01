<header>
    <div class="top-bar-area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo">
                        {{--<a href="index.html"><img src="{{asset('assets/waimariedemo/images/logo.jpg')}}" alt="logo" /></a>--}}
                        <a href="/">
                            <img src="{{setting('logojpg')}}" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="">
                            <span class="logo-text">
                                {{setting('name')}}
                            </span>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-right">
                        <a href="#" class="doante-button orange-bg">
                            <span>MAKE A</span>
                            DONATION
                        </a>
                        <a href="#" class="doante-button yellow-background">
                            <span>BECOME A</span>
                            VOLUNTEER
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-area ash-white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <nav id="easy-menu">
                        <div id="head-mobile">
                        </div>
                        <div class="button">
                            <i class="fa fa-bars"></i>
                        </div>

                        <ul class="menu-list">

                        @foreach(menus() as $menu)

                            <?php
                            $hasSub = !$menu->subMenus->isEmpty();
                            ?>

                            <li>
                                <a class="{{(strpos(Route::currentRouteName(), $menu->slug) != 'false') ? '' : 'active' }}"
                                   href="{{ url($menu->url) }}">{!! $menu->name !!}</a>

                                @if($hasSub=='True')

                                    <ul class="animenu__nav__child">
                                            @foreach($menu->subMenus as $childsubmenu)
                                            <li>
                                                    <a class=""
                                                       href="{{ url($childsubmenu->url) }}">{!! $childsubmenu->name !!}</a>
                                                </li>
                                        @endforeach
                                    </ul>

                                @endif


                            </li>


                            @endforeach
                        </ul>

                    </nav>
                </div>
                <div class="col-md-2">
                    <div class="social-icon text-right">
                        <ul>
                            <li><a href="{{setting('facebook')}}" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                            <li><a href="{{setting('instagram')}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                            {{--<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-youtube-square"></i></a></li>--}}
                            {{--<li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#select').chosen();

        });

    </script>
@endpush
