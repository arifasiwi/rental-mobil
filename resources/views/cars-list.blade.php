<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Home Car</title>
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
                                <li >
                                    <a href="/landingpage" title="">Home</a>
                                </li>
                                <li class="current-menu-parent">
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
        <div class="overlay"></div>
        <!--End Background-->
        <div class="container">
            <!-- Banner Content -->
            <div class="banner-cn">
                <!-- Logo -->
                <div class="logo-banner text-center">
                    <a href="" title="">
                        <img src="../front/images/logo-banner.png" alt="">
                    </a>
                </div>
                <!-- Logo -->
                <!-- Category Singer -->
                <div class="category-singer clearfix">
                    <div class="cate-singer-icon float-left">
                        <h2>Cruise</h2>
                        <img src="../front/images/icon-cruise.png" alt="">
                    </div>
                    <p>Choose from more than <span>5,000</span> car worldwide</p>
                </div>
                <!-- End Category Singer -->
                <!-- Form Search -->
                <div class="form-cn form-car">
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
                <!-- End Form Search -->
            </div>
            <!-- End Banner Content -->
        </div>

    </section>
    <!--End Banner-->

    <!-- Car Deals -->
    <section class="cruise-deals">
        <!-- Title -->
        <div class="title-wrap">
            <div class="container">
                <div class="travel-title float-left">
                    <h2>Daftar Mobil Yang Disewakan</h2>
                    {{--<span class="span-departure">Choose your departure</span>--}}
                    {{--<div class="select">--}}
                        {{--<span data-placeholder="">Las Vegas - Nevada</span>--}}
                        {{--<select name="departure">--}}
                            {{--<option>Las Vegas - Nevada</option>--}}
                            {{--<option>Las Vegas - Nevada</option>--}}
                            {{--<option>Las Vegas - Nevada</option>--}}
                            {{--<option>Las Vegas - Nevada</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
        <!-- End Title -->
        <!-- Cruise Deals Content -->
        <div class="container">
            <div class="cruise-deals-cn clearfix">
                <!-- Cruise Deal Item -->
                @foreach($getlistsedan as $sedan)


                <div class="col-xs-6 col-md-4 col-lg-3">
                    <div class="cruise-deal-item">
                        <figure class="cruise-img">
                            <a href="" title="">
                                <img src="{{$sedan['foto']}}" alt="">
                            </a>
                        </figure>
                        <div class="cruise-text">
                            <div class="cruise-name">
                                <a href="#" title="">{{$sedan['merk']}}</a>
                            </div>
                            <div class="cruise-night">
                                <span>{{$sedan['type']}}</span>
                            </div>
                            <hr class="hr">
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            @endforeach

                <!-- End Cruise Deal Item -->
                <!-- Cruise Deal Item -->
                {{--<div class="col-xs-6 col-md-4 col-lg-3">--}}
                    {{--<div class="cruise-deal-item">--}}
                        {{--<figure class="cruise-img">--}}
                            {{--<a href="" title="">--}}
                                {{--<img src="../front/images/deal/img-10.jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</figure>--}}
                        {{--<div class="cruise-text">--}}
                            {{--<div class="cruise-name">--}}
                                {{--<a href="#" title="">HongKong</a>--}}
                            {{--</div>--}}
                            {{--<div class="cruise-night">--}}
                                {{--<span>9 nights</span> - 05/12 - 12/14--}}
                            {{--</div>--}}
                            {{--<hr class="hr">--}}
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Cruise Deal Item -->--}}
                {{--<!-- Cruise Deal Item -->--}}
                {{--<div class="col-xs-6 col-md-4 col-lg-3">--}}
                    {{--<div class="cruise-deal-item">--}}
                        {{--<figure class="cruise-img">--}}
                            {{--<a href="" title="">--}}
                                {{--<img src="../front/images/deal/img-11.jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</figure>--}}
                        {{--<div class="cruise-text">--}}
                            {{--<div class="cruise-name">--}}
                                {{--<a href="#" title="">Barcelona</a>--}}
                            {{--</div>--}}
                            {{--<div class="cruise-night">--}}
                                {{--<span>9 nights</span> - 05/12 - 12/14--}}
                            {{--</div>--}}
                            {{--<hr class="hr">--}}
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Cruise Deal Item -->--}}
                {{--<!-- Cruise Deal Item -->--}}
                {{--<div class="col-xs-6 col-md-4 col-lg-3">--}}
                    {{--<div class="cruise-deal-item">--}}
                        {{--<figure class="cruise-img">--}}
                            {{--<a href="" title="">--}}
                                {{--<img src="../front/images/deal/img-12.jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</figure>--}}
                        {{--<div class="cruise-text">--}}
                            {{--<div class="cruise-name">--}}
                                {{--<a href="#" title="">Bangkok</a>--}}
                            {{--</div>--}}
                            {{--<div class="cruise-night">--}}
                                {{--<span>9 nights</span> - 05/12 - 12/14--}}
                            {{--</div>--}}
                            {{--<hr class="hr">--}}
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Cruise Deal Item -->--}}
                {{--<!-- Cruise Deal Item -->--}}
                {{--<div class="col-xs-6 col-md-4 col-lg-3">--}}
                    {{--<div class="cruise-deal-item">--}}
                        {{--<figure class="cruise-img">--}}
                            {{--<a href="" title="">--}}
                                {{--<img src="../front/images/deal/img-13.jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</figure>--}}
                        {{--<div class="cruise-text">--}}
                            {{--<div class="cruise-name">--}}
                                {{--<a href="#" title="">Amsterdam</a>--}}
                            {{--</div>--}}
                            {{--<div class="cruise-night">--}}
                                {{--<span>9 nights</span> - 05/12 - 12/14--}}
                            {{--</div>--}}
                            {{--<hr class="hr">--}}
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Cruise Deal Item -->--}}
                {{--<!-- Cruise Deal Item -->--}}
                {{--<div class="col-xs-6 col-md-4 col-lg-3">--}}
                    {{--<div class="cruise-deal-item">--}}
                        {{--<figure class="cruise-img">--}}
                            {{--<a href="" title="">--}}
                                {{--<img src="../front/images/deal/img-14.jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</figure>--}}
                        {{--<div class="cruise-text">--}}
                            {{--<div class="cruise-name">--}}
                                {{--<a href="#" title="">HongKong</a>--}}
                            {{--</div>--}}
                            {{--<div class="cruise-night">--}}
                                {{--<span>9 nights</span> - 05/12 - 12/14--}}
                            {{--</div>--}}
                            {{--<hr class="hr">--}}
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Cruise Deal Item -->--}}
                {{--<!-- Cruise Deal Item -->--}}
                {{--<div class="col-xs-6 col-md-4 col-lg-3">--}}
                    {{--<div class="cruise-deal-item">--}}
                        {{--<figure class="cruise-img">--}}
                            {{--<a href="" title="">--}}
                                {{--<img src="../front/images/deal/img-15.jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</figure>--}}
                        {{--<div class="cruise-text">--}}
                            {{--<div class="cruise-name">--}}
                                {{--<a href="#" title="">Barcelona</a>--}}
                            {{--</div>--}}
                            {{--<div class="cruise-night">--}}
                                {{--<span>9 nights</span> - 05/12 - 12/14--}}
                            {{--</div>--}}
                            {{--<hr class="hr">--}}
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- End Cruise Deal Item -->--}}
                {{--<!-- Cruise Deal Item -->--}}
                {{--<div class="col-xs-6 col-md-4 col-lg-3">--}}
                    {{--<div class="cruise-deal-item">--}}
                        {{--<figure class="cruise-img">--}}
                            {{--<a href="" title="">--}}
                                {{--<img src="../front/images/deal/img-16.jpg" alt="">--}}
                            {{--</a>--}}
                        {{--</figure>--}}
                        {{--<div class="cruise-text">--}}
                            {{--<div class="cruise-name">--}}
                                {{--<a href="#" title="">Bangkok</a>--}}
                            {{--</div>--}}
                            {{--<div class="cruise-night">--}}
                                {{--<span>9 nights</span> - 05/12 - 12/14--}}
                            {{--</div>--}}
                            {{--<hr class="hr">--}}
                            {{--<div class="price-box">--}}
                                {{--<span class="price old-price">Only  <del>$269</del></span>--}}
                                {{--<span class="price special-price">$175</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <!-- End Cruise Deal Item -->
            </div>
        </div>
        <!-- End Cruise Deals Content -->
    </section>
    <!-- End Car Deals -->

    <!-- Travel Destinations -->
    <section class="destinations">

        {{--<!-- Title -->--}}
        {{--<div class="title-wrap">--}}
            {{--<div class="container">--}}
                {{--<div class="travel-title float-left">--}}
                    {{--<h2>Top Travel Destinations</h2>--}}
                {{--</div>--}}
                {{--<a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- End Title -->

        <!-- Destinations Content -->
        {{--<div class="destinations-cn">--}}

            {{--<!-- Background -->--}}
            {{--<div class="bg-parallax bg-2"></div>--}}
            {{--<!-- End Background -->--}}

            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<!-- Destinations Filter -->--}}
                    {{--<div class="col-md-4 col-lg-3">--}}
                        {{--<div class="intro-filter">--}}
                            {{--<div class="intro">--}}
                                {{--<p>--}}
                                    {{--<small>Discover</small><br>--}}
                                    {{--<span>2364</span> destinations--}}
                                {{--</p>--}}
                                {{--<p>--}}
                                    {{--<small>With</small><br>--}}
                                    {{--<span>152,364</span> properties--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<ul class="filter">--}}
                                {{--<li class="active">--}}
                                    {{--<a data-toggle="tab" href="#destinations-1"><i class="fa fa-map-marker"></i> Recommendation for you</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-toggle="tab" href="#destinations-2"><i class="fa fa-map-marker"></i> Australia &amp; Oceania</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-toggle="tab" href="#destinations-3"><i class="fa fa-map-marker"></i> Asia</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-toggle="tab" href="#destinations-4"><i class="fa fa-map-marker"></i> Europe</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-toggle="tab" href="#destinations-5"><i class="fa fa-map-marker"></i> USA &amp; Canada</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a data-toggle="tab" href="#destinations-6"><i class="fa fa-map-marker"></i> The rest of the world</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<!-- End Destinations Filter -->--}}
                    {{--<!-- Destinations Grid -->--}}
                    {{--<div class="col-md-8 col-lg-9">--}}
                        {{--<div class="tab-content destinations-grid">--}}
                            {{--<!-- Tab One -->--}}
                            {{--<div id="destinations-1" class="clearfix tab-pane fade active in ">--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item ">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">London - UK</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--<ins>1289</ins> properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-1.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Paris - France</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--239 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-2.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Rome - Italy</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--478 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-3.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Barcelona - Spain</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--452 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-4.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Madrid - Spain</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--794 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-5.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Vienna - Austria</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--1289 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-6.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                            {{--</div>--}}
                            {{--<!-- End Tab One -->--}}
                            {{--<!-- Tab Two -->--}}
                            {{--<div id="destinations-2" class="clearfix tab-pane fade">--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item ">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">London - UK</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--<ins>1289</ins> properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-1.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Paris - France</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--239 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-2.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Rome - Italy</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--478 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-3.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Barcelona - Spain</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--452 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-4.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Madrid - Spain</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--794 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-5.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                                {{--<!-- Destinations Item -->--}}
                                {{--<div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">--}}
                                    {{--<div class="destinations-item">--}}
                                        {{--<div class="destinations-text">--}}
                                            {{--<div class="destinations-name">--}}
                                                {{--<a href="" title="">Vienna - Austria</a>--}}
                                            {{--</div>--}}
                                                {{--<span class="properties-nb">--}}
                                                    {{--1289 properties--}}
                                                {{--</span>--}}
                                        {{--</div>--}}
                                        {{--<figure class="destinations-img">--}}
                                            {{--<a href="" title="">--}}
                                                {{--<img src="../front/images/destinations/img-6.jpg" alt="">--}}
                                            {{--</a>--}}
                                        {{--</figure>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- End Destinations Item -->--}}
                            {{--</div>--}}
                            {{--<!-- End Tab Two -->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- ENd Destinations Grid -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <!-- End Destinations Content -->
    </section>
    <!-- End Travel Destinations -->

    <!-- Confidence and Subscribe  -->
    <section class="confidence-subscribe no-bg">
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
                                <a href="https://www.facebook.com/putripengenketemudy" title=""><i class="fa fa-facebook"></i></a>
                                <a href="" title=""><i class="fa fa-twitter"></i></a>
                                <a href="" title=""><i class="fa fa-pinterest"></i></a>
                                <a href="" title=""><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/arifasiwi" title=""><i class="fa fa-instagram"></i></a>
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
                        © 2017 Travel Rajawali.
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

