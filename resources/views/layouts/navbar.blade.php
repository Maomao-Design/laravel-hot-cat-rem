<header class="page-head">
    <div class="rd-navbar-wrap">
        <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-body-class="rd-navbar-static-smooth" data-md-stick-up-offset="60px"
            data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true" class="rd-navbar rd-navbar-default">
            <div class="rd-navbar-inner">
                <div class="rd-navbar-panel">
                    <button data-custom-toggle=".rd-navbar-nav-wrap" data-custom-toggle-disable-on-blur="true" class="rd-navbar-toggle"><span></span></button>
                    <a href="/" class="rd-navbar-brand brand"><img src="/jcb/imgs/logo.png" width="139" height="22" alt="logo" /></a>
                </div>
                <div class="rd-navbar-group rd-navbar-search-wrap">
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-nav-inner">
                            <div class="rd-navbar-search">
                                <form action="{{ URL::route('products','') }}" method="GET" data-search-live="rd-search-results-live" class="rd-search">
                                    <div class="form-group">
                                        <label for="rd-search-form-input" class="form-label">Search...</label>
                                        <input id="rd-search-form-input" type="text" name="s" autocomplete="off" class="form-control">
                                        <div id="rd-search-results-live" class="rd-search-results-live"></div>
                                    </div>
                                    <button type="submit" class="rd-search-submit"></button>
                                </form>
                                <button data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-search-wrap" class="color-blue rd-navbar-search-toggle"></button>
                            </div>
                            <ul class="rd-navbar-nav">
                                <li class=""><a href="{{ URL::route('home') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ URL::route('page','about') }}">About Us</a>

                                </li>
                                <li><a href="{{ URL::route('brands') }}">Products</a>
                                    {{--<ul class="rd-navbar-megamenu">--}}
                                    <ul class="rd-navbar-dropdown">

                                        {{--<li>--}}
                                            {{--<a href=""></a>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="nav-dropdown-box">--}}
                                                {{--<h6 class="rd-megamenu-header">Cables & Accessories </h6>--}}
                                                {{--<ul class="rd-navbar-list">--}}
                                                    {{--<li><a href="">CABLE</a></li>--}}
                                                    {{--<li><a href="">6KTV-1008dg</a></li>--}}
                                                    {{--<li><a href="">14KV-98cs</a></li>--}}
                                                    {{--<li><a href="">76op-xvd8</a></li>--}}
                                                    {{--<li><a href="">zvfv346-09</a></li>--}}
                                                    {{--<li><a href="">687fbf-io</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<div class="nav-dropdown-box">--}}
                                                {{--<h6 class="rd-megamenu-header">Industrial Automation Device ></h6>--}}
                                                {{--<ul class="rd-navbar-list">--}}
                                                    {{--<li><a href="">AUTOMATION INDUSTRIES</a></li>--}}
                                                    {{--<li><a href="">Automotive</a></li>--}}
                                                    {{--<li><a href="">Chemical</a></li>--}}
                                                    {{--<li><a href="">Downstream Hydrocarbons</a></li>--}}
                                                    {{--<li><a href="">Food & Beverage</a></li>--}}
                                                    {{--<li><a href="">Industrial Energy & Onsite Utilities</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    </ul>
                                </li>

                                <li><a href="{{ URL::route('down') }}">Downloads </a>

                                </li>
                                <li><a href="{{ URL::route('posts') }}">News & Events</a>

                                </li>
                                <li>
                                    <a href="{{ URL::route('page','contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="rd-navbar-shop">
                        <a href="#" class="link-lang">
                            中文
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>