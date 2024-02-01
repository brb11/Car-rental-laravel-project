<footer class="site-footer dark">
                <div class="footer-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">All Models</h3>
                                    <div class="quick-links">
                                        <ul>
                                            <li>
                                                <a href="{{ route('index') }}">ISA Model 1</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">ISA Model 2</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">ISA Model 3</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">ISA Model 4</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('index') }}">ISA Model 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">Company Links</h3>
                                    <div class="quick-links">
                                        <ul>
                                            <li>
                                                <a href="{{ route('About') }}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('login') }}">Sing In</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                 {{ __('Logout') }}
                                             </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('Contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">Helpful Links</h3>
                                    <div class="quick-links">
                                        <ul>
                                            <li>
                                                <a href="{{ route('Contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="widget">
                                    <h3 class="widget-title">Account</h3>
                                    <div class="quick-links">

                                        <ul>
                                     @if (auth()->check())
                                     <li><a href=''>Profile Settings</a></li>
                                     <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                         {{ __('Logout') }}
                                     </a></li>


                                             @else
                                            <li><a href="{{ route('login') }}"  >Profile Settings</a></li>
                                            <li><a href="{{ route('login') }}">Sign Out</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="dealerfinder">
                                    <h3 class="section-title">Find Dealer</h3>
                                    <p>Find your nearest authorized dealer for sales, expert advice and support.</p>
                                    <form>
                                        <div class="input-group">
                                            <input type="text" placeholder="Enter your city">
                                            <span class="input-group-btn">
                                                <button class="button" type="button">
                                                    <i class="fa fa-angle-right"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                    <div class="checkbox">
                                        <input type="checkbox" id="SelectAll">
                                        <label for="SelectAll">
                                            <span class="checkbox-icon"></span>
                                            Select All
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="RentCars">
                                        <label for="RentCars">
                                            <span class="checkbox-icon"></span>
                                            Rent Cars
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="PartsShop">
                                        <label for="PartsShop">
                                            <span class="checkbox-icon"></span>
                                            Parts Shop
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="copyright-text">
                                    THE RIGHT PLCE TO SELL.

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Javascript -->
    <script src="{{ asset('/JS/jquery.min.js') }}"></script>
    <script src="{{ asset('/JS/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/JS/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('/JS/animsition.js') }}"></script>
    <script src="{{ asset('/JS/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('/JS/countto.js') }}"></script>
    <script src="{{ asset('/JS/slick.min.js') }}"></script>
    <script src="{{ asset('/JS/jquery.stickit.min.js') }}"></script>
    <script src="{{ asset('/JS/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('/JS/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/JS/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('/JS/magnific.popup.min.js') }}"></script>
    <script src="{{ asset('/JS/wow.min.js') }}"></script>
    <script src="{{ asset('/JS/main.js') }}"></script>

    <script src="{{ asset('/JS/su/jquery.min.js') }}"></script>
    <script src="{{ asset('/JS/su/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/JS/su/interface.js') }}"></script>
    <script src="{{ asset('/JS/su/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/switcher/js/switcher.js') }}"></script>
    <script src="{{ asset('/JS/su/bootstrap-slider.min.js') }}"></script>
    <script src="{{ asset('/JS/su/slick.min.js') }}"></script>
    <script src="{{ asset('/JS/su/owl.carousel.min.js') }}"></script>


<!-- Loading Scripts -->
<script src="{{ asset('/admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/admin/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('/admin/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/admin/js/dataTables.bootstrap.min.js') }}"></script>
	<script src="{{ asset('/admin/js/Chart.min.js') }}"></script>
	<script src="{{ asset('/admin/js/fileinput.js') }}"></script>
	<script src="{{ asset('/admin/js/chartData.js') }}"></script>
	<script src="{{ asset('/admin/js/main.js') }}"></script>

</body>

</html>
