﻿<!DOCTYPE html>
<!--[if IE 7 ]> <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Font Google -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7COpen+Sans:300,400,600' rel='stylesheet' type='text/css'>
    <!-- End Font Google -->
    <!-- Library CSS -->
    <link rel="stylesheet" href="../front/css/library/font-awesome.min.css">
    <link rel="stylesheet" href="../front/css/library/bootstrap.min.css">
    <link rel="stylesheet" href="../front/css/library/jquery-ui.min.css">
        <link rel="stylesheet" href="../front/css/library/owl.carousel.css">
    <link rel="stylesheet" href="../front/css/library/jquery.mb.YTPlayer.min.css">
    <!-- End Library CSS -->
    <link rel="stylesheet" href="../front/css/style.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="tb-cell">
            <div id="page-loading">
                <div></div>
                <p>Loading</p>
            </div>
        </div>
    </div>
    
    <!-- Wrap -->
    <div id="wrap">

        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                
                <!-- Logo -->
                <div class="logo float-left">
                    <a href="index.html" title=""><img src="../front/images/logo-header.png" alt=""></a>
                </div>
                <!-- End Logo -->
                <!-- Bars -->
                <div class="bars" id="bars"></div>
                <!-- End Bars -->

                <!--Navigation-->
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner">
                        <a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li class="current-menu-parent">
                                        <a href="/" title="">Home</a>
                                    </li>
                                    <li>
                                        <a href="/cars" title="">Car</a>
                                    </li>
                                    <li>
                                        <a href="/login" title="">Login</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--End Navigation-->
            </div>
        </header>
        <!-- End Header -->

        
        <!--Banner-->
        <section class="banner">

            <!--Background-->
            <div class="bg-parallax bg-1"></div>
            <!--End Background-->

            <div class="container">

                <div class="logo-banner text-center">
                    <a href="" title="">
                        <img src="../front/images/logo-banner.png" alt="">
                    </a>
                </div>

                <!-- Banner Content -->
                <div class="banner-cn">

                    <!-- Tabs Cat Form -->
                    <ul class="tabs-cat text-center row">
                        <li class="cate-item col-xs-2">
                            <a data-toggle="tab" href="#form-flight" title="">
                                <span>flight</span>
                                <img src="../front/images/icon-flight.png" alt="">
                            </a>
                        </li>
                        <li class="cate-item active col-xs-2">
                            <a data-toggle="tab" href="#form-hotel" title=""><span>Hotel</span><img src="../front/images/icon-hotel.png" alt=""></a>
                        </li>
                        <li class="cate-item col-xs-2">
                            <a data-toggle="tab" href="#form-car" title=""><span>Car</span><img src="../front/images/icon-car.png" alt=""></a>
                        </li>
                        <li class="cate-item col-xs-2">
                            <a data-toggle="tab" href="#form-package" title=""><span>package deals</span><img src="../front/images/icon-tour.png" alt=""></a>
                        </li>
                        <li class="cate-item col-xs-2">
                            <a data-toggle="tab" href="#form-cruise" title=""><span>cruise</span><img src="../front/images/icon-cruise.png" alt=""></a>
                        </li>
                        <li class="cate-item col-xs-2">
                            <a data-toggle="tab" href="#form-tour" title=""><span>TOUR</span><img src="../front/images/icon-vacation.png" alt=""></a>
                        </li>
                    </ul>
                    <!-- End Tabs Cat -->

                    <!-- Tabs Content -->
                    <div class="tab-content">

                        <!-- Search Hotel -->
                        <div class="form-cn form-hotel tab-pane active in" id="form-hotel">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-destination">
                                    <label for="destination"><span>Destination:</span> Country, City, Airport, Area, Landmark</label>
                                    <input type="text" id="destination" class="field-input">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Check in">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Check out">
                                </div>
                                <div class="form-field field-select">
                                    <div class="select">
                                        <span>Guest</span>
                                        <select>
                                            <option>Guest</option>
                                            <option>1 Guest</option>
                                            <option>2 Guest</option>
                                            <option>3 Guest</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Hotel -->

                        <!-- Search Car -->
                        <div class="form-cn form-car tab-pane" id="form-car">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-picking">
                                    <label for="picking"><span>Picking up:</span> City, airport...</label>
                                    <input type="text" id="picking" class="field-input">
                                </div>
                                <div class="form-field field-droping">
                                    <input type="text" class="field-input" placeholder="Droping off">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Pink up date">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Drop off date">
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Car -->

                        <!-- Search Cruise-->
                        <div class="form-cn form-cruise tab-pane" id="form-cruise">
                            <h2>Where would you like to go?</h2>
                            <ul class="form-radio">
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-2" id="radio-5" class="radio">
                                        <label for="radio-5">Popular Cruises</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-2" id="radio-6" class="radio">
                                        <label for="radio-6">Luxury Cruises</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-2" id="radio-7" class="radio">
                                        <label for="radio-7">River Cruises</label>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-search clearfix">
                                <div class="form-field field-destination">
                                    <label for="destination2"><span>Destination:</span> Asia...</label>
                                    <input type="text" id="destination2" class="field-input">
                                </div>
                                <div class="form-field field-select field-lenght">
                                    <div class="select">
                                        <span>Length of Cruise</span>
                                        <select>
                                            <option>Length of Cruise</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-month">
                                    <div class="select">
                                        <span>Month</span>
                                        <select>
                                            <option>Month</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-port">
                                    <div class="select">
                                        <span>Cruise Departure Port</span>
                                        <select>
                                            <option>Cruise Departure Port</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-line">
                                    <div class="select">
                                        <span>Cruise Line</span>
                                        <select>
                                            <option>Cruise Line</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Cruise -->

                        <!-- Search Flight-->
                        <div class="form-cn form-flight tab-pane" id="form-flight">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-from">
                                    <label for="flight-from"><span>Flight from:</span> Airport</label>
                                    <input type="text" name="flightfrom" id="flight-from" class="field-input">
                                </div>
                                <div class="form-field field-to">
                                    <label for="flight-to"><span>To :</span> Country, Airpor</label>
                                    <input type="text" id="flight-to" class="field-input">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Departing">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Returning">
                                </div>
                                <div class="form-field field-select field-adult">
                                    <div class="select">
                                        <span>Adults</span>
                                        <select>
                                            <option>Adults</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-children">
                                    <div class="select">
                                        <span>Children</span>
                                        <select>
                                            <option>Children</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Flight -->
                        
                        <!-- Search Package -->
                        <div class="form-cn form-package tab-pane" id="form-package">
                            <h2>Where would you like to go?</h2>
                            <ul class="form-radio">
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-1" class="radio">
                                        <label for="radio-1">Flight + Hotel</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-2" class="radio">
                                        <label for="radio-2">Flight + Hotel +Car</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-3" class="radio">
                                        <label for="radio-3">Hotel +Car</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-4" class="radio">
                                        <label for="radio-4">Flight +Car</label>
                                    </div>
                                </li>

                            </ul>
                            <div class="form-search clearfix">
                                <div class="form-field field-from">
                                    <label for="filghtfrom"><span>Flight From:</span> Airport...</label>
                                    <input type="text" id="filghtfrom" class="field-input">
                                </div>
                                <div class="form-field field-to">
                                    <label for="flightto"><span>To:</span> Country, Airport</label>
                                    <input type="text" id="flightto" class="field-input">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Departing">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Returning">
                                </div>
                                <div class="form-field field-select field-adults">
                                    <div class="select">
                                        <span>Adults</span>
                                        <select>
                                            <option>Adults</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-children">
                                    <div class="select">
                                        <span>Children</span>
                                        <select>
                                            <option>Children</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Package -->

                        <!-- Search Tour-->
                        <div class="form-cn form-tour tab-pane" id="form-tour">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-select field-region">
                                    <div class="select">
                                        <span>Region: <small>Wourldwide, africa..</small></span>
                                        <select>
                                            <option>Africa</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-country">
                                    <div class="select">
                                        <span>Country</span>
                                        <select>
                                            <option>Country</option>
                                            <option>Viet Nam</option>
                                            <option>Thai Lan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-style">
                                    <div class="select">
                                        <span>Tour Style</span>
                                        <select>
                                            <option>Style One</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Tour -->

                    </div>
                    <!-- End Tabs Content -->

                </div>
                <!-- End Banner Content -->

            </div>

        </section>
        <!--End Banner-->

        <!-- Sales -->
        <section class="sales">
            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Hot Sale Today: <span>Paris, Amsterdam, Saint Petersburg & more</span></h2>
                    </div>
                    <a href="#" title="" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">ALL SALES</a>
                </div>
            </div>
            <!-- End Title -->
            <!-- Hot Sales Content -->
            <div class="container">
                <div class="sales-cn">
                    <div class="row">
                        <!-- HostSales Item -->
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="" title="">
                                        <img src="../front/images/deal/img-1.jpg" alt="">
                                    </a>
                                    <figcaption>
                                        Save <span>30</span>%
                                    </figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name">
                                            <a href="#" title="">Copley Square Hotel</a>
                                        </div>
                                        <div class="home-sales-places">
                                            <a href="" title="">Boston</a>,
                                            <a href="" title="">Massachusetts</a>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                    <div class="price-box">
                                        <span class="price old-price">From  <del>$269</del></span>
                                        <span class="price special-price">$175<small>/night</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End HostSales Item -->
                        <!-- HostSales Item -->
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="" title="">
                                        <img src="../front/images/deal/img-2.jpg" alt="">
                                    </a>
                                    <figcaption>
                                        Save <span>30</span>%
                                    </figcaption>
                                </figure>

                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name">
                                            <a href="#" title="">Grand Hotel Bagni Nuovi</a>
                                        </div>
                                        <div class="home-sales-places">
                                            <a href="" title="">Boston</a>,
                                            <a href="" title="">Italy</a>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                    <div class="price-box">
                                        <span class="price old-price">From  <del>$632</del></span>
                                        <span class="price special-price">$345<small>/night</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End HostSales Item -->
                        <!-- HostSales Item -->
                        <div class="col-md-6">
                            <div class="sales-item ">
                                <figure class="home-sales-img">
                                    <a href="" title="">
                                        <img src="../front/images/deal/img-3.jpg" alt="">
                                    </a>
                                    <figcaption>
                                        Save <span>30</span>%
                                    </figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name">
                                            <a href="#" title="">The Standard, East Village</a>
                                        </div>
                                        <div class="home-sales-places">
                                            <a href="" title="">New York</a>,
                                            <a href="" title="">New York</a>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                    <div class="price-box">
                                        <span class="price old-price">From  <del>$582</del></span>
                                        <span class="price special-price">$258<small>/night</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End HostSales Item -->
                        <!-- HostSales Item -->
                        <div class="col-md-6">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="" title="">
                                        <img src="../front/images/deal/img-4.jpg" alt="">
                                    </a>
                                    <figcaption>
                                        Save <span>30</span>%
                                    </figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name">
                                            <a href="#" title="">Ganges River Cruise</a>
                                        </div>
                                        <div class="home-sales-places">
                                            <a href="" title="">London</a>,
                                            <a href="" title="">United Kingdom</a>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                    <div class="price-box">
                                        <span class="price old-price">From  <del>$457</del></span>
                                        <span class="price special-price">$258<small>/night</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End HostSales Item -->
                        <!-- HostSales Item -->
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="" title="">
                                        <img src="../front/images/deal/img-5.jpg" alt="">
                                    </a>
                                    <figcaption>
                                        Save <span>30</span>%
                                    </figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name">
                                            <a href="#" title="">Town Hall Hotel</a>
                                        </div>
                                        <div class="home-sales-places">
                                            <a href="" title="">Boston</a>,
                                            <a href="" title="">Massachusetts</a>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                    <div class="price-box">
                                        <span class="price old-price">From  <del>$269</del></span>
                                        <span class="price special-price">$175<small>/night</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End HostSales Item -->
                        <!-- HostSales Item -->
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="" title="">
                                        <img src="../front/images/deal/img-6.jpg" alt="">
                                    </a>
                                    <figcaption>
                                        Save <span>30</span>%
                                    </figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name">
                                            <a href="#" title="">A Hidden NYC Mystery Hotel</a>
                                        </div>
                                        <div class="home-sales-places">
                                            <a href="" title="">Boston</a>,
                                            <a href="" title="">Italy</a>
                                        </div>
                                    </div>
                                    <hr class="hr">
                                    <div class="price-box">
                                        <span class="price old-price">From  <del>$354</del></span>
                                        <span class="price special-price">$255<small>/night</small></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End HostSales Item -->
                    </div>
                </div>
            </div>
            <!-- End Hot Sales Content -->
        </section>
        <!-- End Sales -->

        <!-- Travel Destinations -->
        <section class="destinations">

            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Top Travel Destinations</h2>
                    </div>
                    <a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a>
                </div>
            </div>
            <!-- End Title -->

            <!-- Destinations Content -->
            <div class="destinations-cn">

                <!-- Background -->
                <div class="bg-parallax bg-2"></div>
                <!-- End Background -->

                <div class="container">
                    <div class="row">
                        <!-- Destinations Filter -->
                        <div class="col-md-4 col-lg-3">
                            <div class="intro-filter">
                                <div class="intro">
                                    <p>
                                        <small>Discover</small><br>
                                        <span>2364</span> destinations
                                    </p>
                                    <p>
                                        <small>With</small><br>
                                        <span>152,364</span> properties
                                    </p>
                                </div>
                                <ul class="filter">
                                    <li class="active">
                                        <a data-toggle="tab" href="#destinations-1"><i class="fa fa-map-marker"></i> Recommendation for you</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> Australia &amp; Oceania</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-3"><i class="fa fa-map-marker"></i> Asia</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-4"><i class="fa fa-map-marker"></i> Europe</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-5"><i class="fa fa-map-marker"></i> USA &amp; Canada</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#destinations-6"><i class="fa fa-map-marker"></i> The rest of the world</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- End Destinations Filter -->
                        <!-- Destinations Grid -->
                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content destinations-grid">
                                <!-- Tab One -->
                                <div id="destinations-1" class="clearfix tab-pane fade active in ">
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Paris - France</a>
                                                </div>
                                                <span class="properties-nb">
                                                    239 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-2.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Rome - Italy</a>
                                                </div>
                                                <span class="properties-nb">
                                                    478 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-3.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Barcelona - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    452 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-4.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Madrid - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    794 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-5.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Vienna - Austria</a>
                                                </div>
                                                <span class="properties-nb">
                                                    1289 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-6.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                </div>
                                <!-- End Tab One -->
                                <!-- Tab Two -->
                                <div id="destinations-2" class="clearfix tab-pane fade">
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item ">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">London - UK</a>
                                                </div>
                                                <span class="properties-nb">
                                                    <ins>1289</ins> properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-1.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Paris - France</a>
                                                </div>
                                                <span class="properties-nb">
                                                    239 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-2.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Rome - Italy</a>
                                                </div>
                                                <span class="properties-nb">
                                                    478 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-3.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Barcelona - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    452 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-4.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Madrid - Spain</a>
                                                </div>
                                                <span class="properties-nb">
                                                    794 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-5.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                    <!-- Destinations Item -->
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name">
                                                    <a href="" title="">Vienna - Austria</a>
                                                </div>
                                                <span class="properties-nb">
                                                    1289 properties
                                                </span>
                                            </div>
                                            <figure class="destinations-img">
                                                <a href="" title="">
                                                    <img src="../front/images/destinations/img-6.jpg" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- End Destinations Item -->
                                </div>
                                <!-- End Tab Two -->
                            </div>
                        </div>
                        <!-- ENd Destinations Grid -->
                    </div>
                </div>
            </div>
            <!-- End Destinations Content -->
        </section>
        <!-- End Travel Destinations -->

        <!-- Travel Magazine -->
        <section class="magazine">
            <!-- Title -->
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Travel Magazine</h2>
                    </div>
                    <a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a>
                </div>
            </div>
            <!-- End Title -->
            <!-- Magazine Content -->
            <div class="container">
                <div class="magazine-cn">
                    <div class="row">
                        <!-- Magazine Descript -->
                        <div class="col-lg-6">
                            <div class="magazine-ds">
                                <div id="owl-magazine-ds">
                                    <!-- Magazine Descript Item -->
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>
                                                Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.
                                            </p>
                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.
                                            </p>

                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.
                                            </p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left">
                                                <a href="" title=""><i class="fa fa-facebook"></i></a>
                                                <a href="" title=""><i class="fa fa-twitter"></i></a>
                                                <a href="" title=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                            <a href="" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a>
                                        </div>
                                    </div>
                                    <!-- End Magazine Descript Item -->
                                    <!-- Magazine Descript Item -->
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>
                                                Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.
                                            </p>
                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.
                                            </p>

                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.
                                            </p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left">
                                                <a href="" title=""><i class="fa fa-facebook"></i></a>
                                                <a href="" title=""><i class="fa fa-twitter"></i></a>
                                                <a href="" title=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                            <a href="" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a>
                                        </div>
                                    </div>
                                    <!-- End Magazine Descript Item -->
                                    <!-- Magazine Descript Item -->
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>
                                                Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.
                                            </p>
                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.
                                            </p>

                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.
                                            </p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left">
                                                <a href="" title=""><i class="fa fa-facebook"></i></a>
                                                <a href="" title=""><i class="fa fa-twitter"></i></a>
                                                <a href="" title=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                            <a href="" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a>
                                        </div>
                                    </div>
                                    <!-- End Magazine Descript Item -->
                                    <!-- Magazine Descript Item -->
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>
                                                Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.
                                            </p>
                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.
                                            </p>

                                            <p>
                                                Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl. <br>
                                                Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.
                                            </p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left">
                                                <a href="" title=""><i class="fa fa-facebook"></i></a>
                                                <a href="" title=""><i class="fa fa-twitter"></i></a>
                                                <a href="" title=""><i class="fa fa-google-plus"></i></a>
                                            </div>
                                            <a href="" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a>
                                        </div>
                                    </div>
                                    <!-- End Magazine Descript Item -->
                                </div>
                            </div>
                        </div>
                        <!-- End Magazine Descript -->
                        <!-- Magazine Thumnail -->
                        <div class="col-lg-6">
                            <div class="magazine-thum" id="magazine-thum">
                                <!--Thumnail Item-->
                                <div class="thumnail-item active clearfix">
                                    <figure class="float-left">
                                        <img src="../front/images/magazine/img-1.jpg" alt="">
                                    </figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4>
                                        <span>03.5.2014</span>
                                    </div>
                                </div>
                                <!--End Thumnail Item-->
                                <!--Thumnail Item-->
                                <div class="thumnail-item clearfix">
                                    <figure class="float-left">
                                        <img src="../front/images/magazine/img-2.jpg" alt="">
                                    </figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4>
                                        <span>03.5.2014</span>
                                    </div>
                                </div>
                                <!--End Thumnail Item-->
                                <!--Thumnail Item-->
                                <div class="thumnail-item clearfix">
                                    <figure class="float-left">
                                        <img src="../front/images/magazine/img-3.jpg" alt="">
                                    </figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4>
                                        <span>03.5.2014</span>
                                    </div>
                                </div>
                                <!--End Thumnail Item-->
                                <!--Thumnail Item-->
                                <div class="thumnail-item clearfix">
                                    <figure class="float-left">
                                        <img src="../front/images/magazine/img-4.jpg" alt="">
                                    </figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4>
                                        <span>03.5.2014</span>
                                    </div>
                                </div>
                                <!--End Thumnail Item-->
                            </div>
                        </div>
                        <!-- End Magazine Thumnail -->
                    </div>
                </div>
            </div>
            <!-- End Magazine Content -->
        </section>
        <!-- End Travel Magazine -->
        
        <!-- Confidence and Subscribe  -->
        <section class="confidence-subscribe">
            <!-- Background -->
            <div class="bg-parallax bg-3"></div>
            <!-- End Background -->
            <div class="container">
                <div class="row cs-sb-cn">

                    <!-- Confidence -->
                    <div class="col-md-6">
                        <div class="confidence">
                            <h3>Book with confidence</h3>
                            <ul>
                                <li>
                                    <span class="label-nb">01</span>
                                    <h5>No booking charges</h5>
                                    <p>We don't charge you an extra fee for booking a hotel room with us</p>
                                </li>
                                <li>
                                    <span class="label-nb">02</span>
                                    <h5>No cancellation fees</h5>
                                    <p>We don't charge you a cancellation or modification fee in case plans change</p>
                                </li>
                                <li>
                                    <span class="label-nb">03</span>
                                    <h5>Instant confirmation</h5>
                                    <p>Instant booking confirmation whether booking online or via the telephone</p>
                                </li>
                                <li>
                                    <span class="label-nb">04</span>
                                    <h5>Flexible booking</h5>
                                    <p>You can book up to a whole year in advance until the moment of your stay</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Confidence -->
                    <!-- Subscribe -->
                    <div class="col-md-6">
                        <div class="subscribe">
                            <h3>Subscribe to our newsletter</h3>
                            <p>Enter your email address and we’ll send you our regular promotional emails, packed with special offers, great deals, and huge discounts</p>
                            <!-- Subscribe Form -->
                            <div class="subscribe-form">
                                <form action="#" method="get">
                                    <input type="text" name="" value="" placeholder="Your email" class="subscribe-input">
                                    <button type="submit" class="awe-btn awe-btn-5 arrow-right text-uppercase awe-btn-lager">subcrible</button>
                                </form>
                            </div>
                            <!-- End Subscribe Form -->
                            <!-- Follow us -->
                            <div class="follow-us">
                                <h4>Follow us</h4>
                                <div class="follow-group">
                                    <a href="" title=""><i class="fa fa-facebook"></i></a>
                                    <a href="" title=""><i class="fa fa-twitter"></i></a>
                                    <a href="" title=""><i class="fa fa-pinterest"></i></a>
                                    <a href="" title=""><i class="fa fa-linkedin"></i></a>
                                    <a href="" title=""><i class="fa fa-instagram"></i></a>
                                    <a href="" title=""><i class="fa fa-google-plus"></i></a>
                                    <a href="" title=""><i class="fa fa-digg"></i></a>
                                </div>
                            </div>
                            <!-- Follow us -->
                        </div>
                    </div>
                    <!-- End Subscribe -->

                </div>
            </div>
        </section>
        <!-- End Confidence and Subscribe  -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index.html" title=""><img src="../front/images/logo-footer.png" alt=""></a>
                        </div>
                    </div>
                    <!-- End Logo -->
                    <!-- Navigation Footer -->
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="about.html" title="">About</a></li>
                                <li><a href="blog.html" title="">Blog</a></li>
                                <li><a href="fqa.html" title="">FQA</a></li>
                                <li><a href="careers.html" title="">Carrers</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation Footer -->
                    <!-- Navigation Footer -->
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="contact.html" title="">Contact Us</a></li>
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Term of Service</a></li>
                                <li><a href="#" title="">Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation Footer -->
                    <!-- Footer Currency, Language -->
                    <div class="col-sm-6 col-md-4">
                        <!-- Language -->
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head">
                                <span class="angle-down"><i class="fa fa-angle-down"></i></span>
                            </div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">English</a></li>
                                    <li><a href="#" title="">Bahasa Melayu</a></li>
                                    <li><a href="#" title="">Català</a></li>
                                    <li><a href="#" title="">Dansk</a></li>
                                    <li><a href="#" title="">Deutsch</a></li>
                                    <li><a href="#" title="">Francais</a></li>
                                    <li><a href="#" title="">Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Language -->
                        <!-- Currency -->
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head">
                                <span class="angle-down"><i class="fa fa-angle-down"></i></span>
                            </div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">US</a></li>
                                    <li><a href="#" title="">ARS</a></li>
                                    <li><a href="#" title="">ADU</a></li>
                                    <li><a href="#" title="">CAD</a></li>
                                    <li><a href="#" title="">CHF</a></li>
                                    <li><a href="#" title="">CNY</a></li>
                                    <li><a href="#" title="">CZK</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Currency -->
                        <!--CopyRight-->
                        <p class="copyright">
                            © 2009 – 2014 Bookyourtrip™ All rights reserved.
                        </p>
                        <!--CopyRight-->
                    </div>
                    <!-- End Footer Currency, Language -->
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        
    </div>
    
    <!-- Library JS -->
    <script type="text/javascript" src="../front/js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="../front/js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../front/js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="../front/js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../front/js/library/parallax.min.js"></script>
    <script type="text/javascript" src="../front/js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="../front/js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="../front/js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="../front/js/library/SmoothScroll.js"></script>
    <!-- End Library JS -->
    <!-- Main Js -->
    <script type="text/javascript" src="../front/js/script.js"></script>
    <!-- End Main Js -->
</body>
</html>
