@extends('layouts.front')

@section('content')
<!-- Home slideder-->
<div id="home-slider" style="background: rgb(0, 85, 134) !important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="header-top-right-wapper">
                    <div class="homeslider">
                        <div class="content-slide">
                            <ul id="slide-background">
                              <li data-background="#ffcc33"><img alt="Funky roots" src="{{ url('/') }}/assets/images/slider/slide1.jpg" title="Funky roots" /></li>
                              <li data-background="#666a69"><img alt="Funky roots" src="{{ url('/') }}/assets/images/slider/slide2.jpg" title="Funky roots" /></li>
                              <li data-background="#c1ddf6"><img  alt="Funky roots" src="{{ url('/') }}/assets/images/slider/slide3.jpg" title="Funky roots" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-banner">
                        <div class="trending">
                            <h2 class="trending-title">trending</h2>
                            <div class="trending-product owl-carousel nav-center" data-items="1" data-dots="false" data-nav="true" data-loop="true">
                                <ul>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="{{ url('/') }}/assets/data/option3/p1.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Super Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="{{ url('/') }}/assets/data/option3/p2.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Kute Yellow Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="{{ url('/') }}/assets/data/option3/p41.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Super Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-container">
                                            <div class="product-image">
                                                <a href="#"><img src="{{ url('/') }}/assets/data/option3/p42.jpg" alt="Product"></a>
                                            </div>
                                            <div class="product-meta">
                                                <h5 class="product-name">
                                                    <a href="#">Kute Yellow Bag</a>
                                                </h5>
                                                <div class="product-price">
                                                    <span class="price">$38,95</span>
                                                    <span class="price-old">$52,00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Home slideder-->
<!-- servives -->
<div class="services-wapper">
    <div class="container">
        <div class="service ">
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="{{ url('/') }}/assets/data/s1.png" />
                </div>
                <div class="info">
                    <a href="#"><h3>Free Shipping</h3></a>
                    <span>On order over $20 in Cambodia</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="{{ url('/') }}/assets/data/s2.png" />
                </div>
                <div class="info">
                    <a href="#"><h3>30-day return</h3></a>
                    <span>Moneyback guarantee</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="{{ url('/') }}/assets/data/s3.png" />
                </div>
                
                <div class="info" >
                    <a href="#"><h3>24/7 support</h3></a>
                    <span>Online consultations</span>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 service-item">
                <div class="icon">
                    <img alt="services" src="{{ url('/') }}/assets/data/s4.png" />
                </div>
                <div class="info">
                    <a href="#"><h3>SAFE SHOPPING</h3></a>
                    <span>Safe Shopping Guarantee</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end services -->

<!-- box product new arrivals -->

<!-- ./box product new arrivals -->
<!-- box product TOP SELLERS IN -->

<!-- ./box product TOP SELLERS IN -->

<!-- Banner -->

<!-- ./box product SPECIAL PRODUCTS -->
<!-- box product RECOMMENDATION FOR YOU -->
<div class="box-products recommendation">
    <div class="container">
        <div class="box-product-head">
            <span class="box-title">RECOMMENDATION FOR YOU</span>
            <ul class="box-tabs nav-tab">
                <li><a data-toggle="tab" href="#tab-8">All</a></li>
                <li class="active"><a data-toggle="tab" href="#tab-7">Women Fashion</a></li>
                <li><a data-toggle="tab" href="#tab-8">Bags</a></li>
                <li><a data-toggle="tab" href="#tab-7">SHOES</a></li>
                <li><a data-toggle="tab" href="#tab-8">GLASSES</a></li>
            </ul>
        </div>
        <div class="box-product-content">
            <div class="box-product-adv">
                <ul class="owl-carousel nav-center" data-items="1" data-dots="false" data-autoplay="true" data-loop="true" data-nav="true">
                    <li><a href="#"><img src="{{ url('/') }}/assets/data/option3/adv4.jpg" alt="adv"></a></li>
                    <li><a href="#"><img src="{{ url('/') }}/assets/data/option3/adv4.jpg" alt="adv"></a></li>
                </ul>
            </div>
            <div class="box-product-list">
                <div class="tab-container">
                    <div id="tab-7" class="tab-panel active">
                        <ul class="product-list owl-carousel nav-center" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p40.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Luxury Perfume</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                                <div class="price-percent-reduction2">
                                    -30% OFF
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p31.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p32.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p33.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p34.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div id="tab-8" class="tab-panel">
                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "10" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p35.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Luxury Perfume</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p36.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Blue Diamond Ring</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                                <div class="price-percent-reduction2">
                                    -30% OFF
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p37.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Superior Bag</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p38.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Luxury Lady</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="left-block">
                                    <a href="#"><img class="img-responsive" alt="product" src="{{ url('/') }}/assets/data/option3/p39.jpg" /></a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="#">Smart Phone</a></h5>
                                    <div class="content_price">
                                        <span class="price product-price">$38,95</span>
                                        <span class="price old-price">$52,00</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./box product RECOMMENDATION FOR YOU -->
<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->
        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-fashion.png" />fashion</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-4">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-4">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Most Reviews</a></li>
                    <li><a data-toggle="tab" href="#tab-4">On Sales</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Trending</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Summer Dresses</a></li>
                            <li><a href="#">Casual Dresses</a></li>
                            <li><a href="#">Blouses</a></li>
                            <li><a href="#">Skirts</a></li>
                            <li><a href="#">Jumpsuits</a></li>
                            <li><a href="#">T-Shirts</a></li>
                            <li><a href="#">Jackets</a></li>
                            <li><a href="#">Bikinis</a></li>
                            <li><a href="#">Sunglasses</a></li>
                            <li><a href="#">Scarves</a></li>
                            <li><a href="#">Hair Accessories</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-4">
                                   <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sexy Red Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$138,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Mesh Dress Taupe</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$99,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/p49.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sexy Summer Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$89,99</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/p50.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Comfor & Pretty Dress</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$238,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/p51.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sexy Perfect Light</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$399,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/p52.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">New Style & Fresh</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$138,95</span>
                                                            <span class="price old-price">$152,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#"><img class="img-responsive" alt="product" src="assets/data/p53.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                       </ul>
                                   </div>
                                </div>
                                <div class="tab-panel" id="tab-5">
                                    <div class="box-left">
                                       <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product1.jpg" alt="Banner Product"></a>
                                        </div>
                                   </div>
                                   <div class="box-right">
                                       <ul class="product-list row">
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p53.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p52.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p51.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p50.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p49.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p48.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                       </ul>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category fashion -->
        <!-- featured category sports -->
        <div class="category-featured sports">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-sports.png" />SPORTS</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-6">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-6">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-7">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-2" class="floor-elevator">
                    <a href="#elevator-1" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-3" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <div class="owl-carousel-vertical" data-items="1" data-nav="true" data-dots="false" data-loop="true">
                            <div class="item">
                                <ul class="sub-category-list">
                                    <li><a href="#">Tent</a></li>
                                    <li><a href="#">Hiking Shoes</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Boxing</a></li>
                                    <li><a href="#">Fitness</a></li>
                                    <li><a href="#">Basketball Shoes</a></li>
                                    <li><a href="#">Carp Fishing</a></li>
                                    <li><a href="#">Bike Light</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">Fishing Tackle Bags</a></li>
                                    <li><a href="#">Camping Stoves</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Cycling Jerseys</a></li>
                                    <li><a href="#">Basketball Shoes</a></li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul class="sub-category-list">
                                    <li><a href="#" >Shoes</a></li>
                                    <li><a href="#" >Casual Shoes</a></li>
                                    <li><a href="#" >Sports Shoes</a></li>
                                    <li><a href="#" >Adidas Shoes</a></li>
                                    <li><a href="#" >Gas Shoes</a></li>
                                    <li><a href="#" >Puma Shoes</a></li>
                                    <li><a href="#" >Reebok Shoes</a></li>
                                    <li><a href="#" >Woodland Shoes</a></li>
                                    <li><a href="#" >Red tape Shoes</a></li>
                                    <li><a href="#" >Nike Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-6">
                                    <div class="box-left">
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Deals of The Day</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="assets/data/p54.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top Selling Product 1</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="7" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="assets/data/p58.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top Selling Product 2</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-dots="false" data-nav="true">
                                            <li><a href="#"><img src="assets/data/sport1.jpg" alt="Image"></a></li>
                                            <li><a href="#"><img src="assets/data/sport1.jpg" alt="Image"></a></li>
                                        </ul>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Sport Shoes</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p55.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Tennis Blue Hat</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p56.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Blue T-Shirt</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p57.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Tennis Racquet</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p58.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Fashion & Sport</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p59.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Versatile Package</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p60.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-7">
                                    <div class="box-left">
                                        <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                            <li><a href="#"><img src="assets/data/sport1.jpg" alt="Image"></a></li>
                                            <li><a href="#"><img src="assets/data/sport2.jpg" alt="Image"></a></li>
                                        </ul>
                                        <div class="deal-product">
                                            <div class="deal-product-head">
                                                <h3><span>Deals of The Day</span></h3>
                                            </div>
                                            <ul class="owl-carousel" data-items="1" data-nav="true" data-dots="false">
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="assets/data/p55.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top selling earphone</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="deal-product-content">
                                                    <div class="col-sm-5 deal-product-image">
                                                        <a href="#"><img src="assets/data/p56.jpg" alt="Prodcut"></a>
                                                    </div>
                                                    <div class="col-sm-7 deal-product-info">
                                                        <p><a href="#">Top selling earphone</a></p>
                                                        <div class="price">
                                                            <span class="product-price">$38.95</span>
                                                            <span class="old-price">$52.00</span>
                                                            <span  class="sale-price">-15%</span>
                                                        </div>
                                                        <div class="show-count-down">
                                                            <span class="countdown-lastest" data-y="2015" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="product-desc">
                                                            Sound performance tuning includes the smallest details like...
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p60.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p59.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p58.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p57.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p56.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                    
                                                </li>
                                                <li class="col-sm-4">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p55.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category sports-->
        
        <!-- featured category electronic -->
        <div class="category-featured electronic">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-electronic.png" />ELECTRONICS</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-8">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-8">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Most Reviews</a></li>
                    <li><a data-toggle="tab" href="#tab-8">On Sales</a></li>
                    <li><a data-toggle="tab" href="#tab-9">Trending</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-3" class="floor-elevator">
                    <a href="#elevator-2" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-4" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">SOOCOO S60</a></li>
                            <li><a href="#">Xiaomi Sports Camera</a></li>
                            <li><a href="#">Monopod</a></li>
                            <li><a href="#">MP3 Player</a></li>
                            <li><a href="#">Speaker</a></li>
                            <li><a href="#">Micro SD Card</a></li>
                            <li><a href="#">Smart Watches</a></li>
                            <li><a href="#">Smart Wristbands</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Projector</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-8">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product2.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Cookoo Cooker</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p61.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Green Cooker</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p62.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Modern Liquidizer</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p63.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Serial Nice Cookers</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p64.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Tilor Washing Machine</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p65.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Nano Washing Machine</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p66.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-9">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product2.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p66.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p65.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p64.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p63.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p62.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p61.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category electronic-->
        <!-- featured category Digital -->
        <div class="category-featured digital">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-digital.png" />DIGITAL</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-10">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-10">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-11">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-4" class="floor-elevator">
                    <a href="#elevator-3" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-5" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Tablet selfie</a></li>
                            <li><a href="#">Laptop Batteries</a></li>
                            <li><a href="#">OTG flash drives</a></li>
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Keyboard</a></li>
                            <li><a href="#">SSD</a></li>
                            <li><a href="#">Tenda router</a></li>
                            <li><a href="#">3D printer</a></li>
                            <li><a href="#">Laser Pens</a></li>
                            <li><a href="#">Printer Supplies</a></li>
                            <li><a href="#">Gaming</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 manufacture-list">
                        <div class="manufacture-waper">
                            <div class="owl-carousel-vertical" data-items="1" data-autoplay="false" data-nav="true" data-dots="false" data-loop="true" >
                                <div class="item">
                                    <ul >
                                        <li><a href="#"><img src="assets/data/m1.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m2.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m3.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m4.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m5.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m6.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m7.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m8.jpg" alt="manufacture"></a></li>
                                    </ul>
                                </div>
                                <div class="item">
                                    <ul >
                                        <li><a href="#"><img src="assets/data/m1.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m2.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m3.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m4.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m5.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m6.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m7.jpg" alt="manufacture"></a></li>
                                        <li><a href="#"><img src="assets/data/m8.jpg" alt="manufacture"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-10">
                                   <div class="row">
                                        <div class="col-sm-12 category-list-product">
                                            <ul class="product-list row">
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Cute Speaker</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p67.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Bphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p68.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Sonic Camera</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p69.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Blue Nano Projector</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p70.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Smartphone Battery</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p71.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p72.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#"> SamSing Gallaxy S5</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p73.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Ipado Air 2</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p74.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>
                                </div>
                                <div class="tab-panel" id="tab-11">
                                   <div class="row">
                                        <div class="col-sm-12 category-list-product">
                                            <ul class="product-list row">
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p74.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p73.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p72.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p71.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p70.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p69.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p68.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="col-sm-3">
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">$38,95</span>
                                                            <span class="price old-price">$52,00</span>
                                                        </div>
                                                    </div>
                                                    <div class="left-block">
                                                        <a href="#">
                                                        <img class="img-responsive" alt="product" src="assets/data/p67.jpg" /></a>
                                                        <div class="quick-view">
                                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                <a title="Add to compare" class="compare" href="#"></a>
                                                                <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                            <a title="Add to Cart" href="#">Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category Digital-->
        <!-- featured category furniture -->
       <div class="category-featured furniture">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-furniture.png" />furniture</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-12">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-12">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-13">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-5" class="floor-elevator">
                    <a href="#elevator-4" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-6" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Cross Stitch</a></li>
                            <li><a href="#">Diamond Painting</a></li>
                            <li><a href="#">Cake Tools</a></li>
                            <li><a href="#">Cooking Tools</a></li>
                            <li><a href="#">Curtain</a></li>
                            <li><a href="#">Bedding</a></li>
                            <li><a href="#">Wall Décor</a></li>
                            <li><a href="#">Decorative Flowers</a></li>
                            <li><a href="#">Home Storage</a></li>
                            <li><a href="#">Pest Control</a></li>
                            <li><a href="#">Pet Products</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-12">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Interesting Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p75.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Relaxed Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p76.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Innovative Red Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p77.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">White Stack Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Kute Innovative Chair</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p79.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Pretty Green & Inox</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p80.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-13">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/banner-product3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p77.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p78.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p76.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p75.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p74.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category furniture-->
        <!-- featured category jewelry -->
        <div class="category-featured jewelry">
            <nav class="navbar nav-menu show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-jewelry.png" />jewelry</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-14">Best salers</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Specials</a></li>
                    <li><a data-toggle="tab" href="#tab-14">New Arrivals</a></li>
                    <li><a data-toggle="tab" href="#tab-15">Most Reviews</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-6" class="floor-elevator">
                    <a href="#elevator-5" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#" class="btn-elevator disabled down fa fa-angle-down"></a>
              </div>
            </nav>
           <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <li><a href="#">Multi-Layer Necklaces</a></li>
                            <li><a href="#">925 Silver</a></li>
                            <li><a href="#">Pearl Jewelry</a></li>
                            <li><a href="#">Friendship Bracelets</a></li>
                            <li><a href="#">Brinco</a></li>
                            <li><a href="#">Body Chains</a></li>
                            <li><a href="#">Carp Fishing</a></li>
                            <li><a href="#">DIY Beads</a></li>
                            <li><a href="#">Digital Watches</a></li>
                            <li><a href="#">Dress Watches</a></li>
                            <li><a href="#">Men's Watches</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-14">
                                    <div class="box-left">
                                        <ul class="owl-intab owl-carousel" data-loop="true" data-items="1" data-autoplay="true" data-dots="false" data-nav="true">
                                            <li><a href="#"><img src="assets/data/banner-intab2.jpg" alt="Image"></a></li>
                                            <li><a href="#"><img src="assets/data/jewelry-slide.jpg" alt="Image"></a></li>
                                        </ul>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Green Swan</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Golden & Creative Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                                
                                            </li>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Diamond Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box-full clearfix">
                                        <ul class="product-list">
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Ruby & Golden Ring</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Natural Pearl Necklace</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Diamond Couple</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Sexy Earrings</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p87.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Precious Stones</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p88.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-15">
                                    <div class="box-full clearfix">
                                        <ul class="product-list">
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                        <span class="price old-price">$52,00</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p82.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p83.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p85.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p86.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p87.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p88.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p84.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="#">Headphone & earphone</a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$38,95</span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="#">
                                                    <img class="img-responsive" alt="product" src="assets/data/p81.jpg" /></a>
                                                    <div class="quick-view">
                                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                                            <a title="Add to compare" class="compare" href="#"></a>
                                                            <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!-- end featured category jewelry-->
    </div>
</div>
@endsection