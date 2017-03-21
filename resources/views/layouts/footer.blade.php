<section class="section-40 section-sm-60">
    <div class="shell">
        <div class="range range-xs-center">
            <div class="cell-xs-10 cell-sm-11 cell-md-12">
                <div class="range">
                    <div class="cell-sm-6 cell-md-4">
                        <h6 class="text-uppercase">OUR COMPANY</h6>
                        <div style="max-width: 340px;" class="row offset-top-22 offset-md-top-30">
                            <div class="col-xs-12">
                                <ul class="list-marked-variant-2">
                                    <li><a href="{{ URL::route('page','about') }}">About Us</a></li>
                                    <li><a href="">Leadership</a></li>
                                    <li><a href="">Careers</a></li>
                                    <li><a href="{{ URL::route('page','contact') }}">Contact</a></li>
                                    <li><a href="{{ URL::route('posts') }}">News & Events</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-4 offset-top-50 offset-sm-top-0">
                        <h6 class="text-uppercase">OUR SERVICE</h6>
                        <div style="max-width: 340px;" class="row offset-top-22 offset-md-top-30">
                            <div class="col-xs-12">
                                <ul class="list-marked-variant-2">
                                    <li><a href="">Innovations</a></li>
                                    <li><a href="">I < 3 STEM</a></li>
                                    <li><a href="">Top Quartile</a></li>
                                    <li><a href="">Process Experts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cell-sm-6 cell-md-4 offset-top-50 offset-md-top-0">


                        <div class="inset-md-right-30">
                            <h6 class="text-uppercase">our businesses</h6>
                            <p class="offset-top-22">
                                Cables & Accessories <br /> Industrial Atoumation Device
                            </p>
                        </div>
                        <div class="offset-top-22">
                            <div class="group-md group-top">

                                <div>
                                    <ul class="list-inline list-inline-reset">
                                        <li>
                                            <a href="mailto: {{Voyager::setting('email')}}" target="_blank" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-envelope-o fa-fw"></a>
                                        </li>
                                        <li>
                                            <a href="{{Voyager::setting('facebook')}}" target="_blank"  class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-facebook"></a>
                                        </li>
                                        <li>
                                            <a href="{{Voyager::setting('twitter')}}"  target="_blank" class="icon icon-round icon-gray-dark-filled icon-xxs-smallest fa fa-twitter"></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="find-us text-center">
                                    <a href="{{ URL::route('page','contact') }}" class="fa fa-map-marker" title="Find Us"></a>
                                    <div>Find Us</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="page-foot page-foot-default section-35 bg-gray-base">
    <div class="shell">
        <div class="range text-center">
            <div class="cell-xs-12">
                <p class="rights small">
                    ©2017 Brightpower trading(SH)Co.,Ltd.
                </p>
            </div>
        </div>
    </div>
</footer>