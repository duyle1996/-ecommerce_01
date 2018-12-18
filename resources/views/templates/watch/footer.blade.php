<div id="newsletter" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>@lang('messages.signup') <strong>@lang('newsletter')</strong></p>

                    {!! Form::open() !!}
                        {{Form::text('email', trans('messages.enteremail'), ['class'=>'input'])}}
                        {{ Form::submit(trans('messages.sub'), ['class' => 'newsletter-btn']) }}
                    {!! Form::close() !!}
                    <ul class="newsletter-follow">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<footer id="footer">
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">@lang('aboutus')</h3>
                        <p>@lang('messages.lorem')</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>@lang('messages.address')</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>@lang('messages.phone')</a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i></i>@lang('messages.email')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">@lang('messages.category')</h3>
                        <ul class="footer-links">
                            <li><a href="#">@lang('messages.hotdeals')</a></li>
                            <li><a href="#">@lang('messages.laptop')</a></li>
                            <li><a href="#">@lang('messages.smartphones')</a></li>
                            <li><a href="#">@lang('messages.camera')</a></li>
                            <li><a href="#">@lang('messages.accessories')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">@lang('messages.information')</h3>
                        <ul class="footer-links">
                            <li><a href="#">@lang('messages.aboutus')</a></li>
                            <li><a href="#">@lang('messages.contactus')</a></li>
                            <li><a href="#">@lang('messages.privacy')</a></li>
                            <li><a href="#">@lang('messages.order')</a></li>
                            <li><a href="#">@lang('messages.terms')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">@lang('messages.service')</h3>
                        <ul class="footer-links">
                            <li><a href="#">@lang('messages.myaccount')</a></li>
                            <li><a href="#">@lang('messages.viewcart')</a></li>
                            <li><a href="#">@lang('messages.wishlist')</a></li>
                            <li><a href="#">@lang('messages.track')</a></li>
                            <li><a href="#">@lang('messages.help')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="bottom-footer" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                    <span class="copyright">
                        <p>@lang('messages.bottomfooter')</p>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
