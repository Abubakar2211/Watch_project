@extends('layouts.main')

@section('main-section')
    <main>
        <!--? slider Area Start -->
        <div class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Select Your New
                                        Perfect Style</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat is aute irure.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s"
                                        data-duration="2000ms">
                                        <a href="industries" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
             
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="frontend/assets/img/hero/watch.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->

                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">Select Your New
                                        Perfect Style</h1>
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">Ut enim ad minim
                                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat is aute irure.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s"
                                        data-duration="2000ms">
                                        <a href="shop" class="btn hero-btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img src="frontend/assets/img/hero/watch.png" alt="" class=" heartbeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- ? New Product Start -->
        <section class="new-product-area section-padding30">
            <div class="container">
                <!-- Section tittle -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle mb-70">
                            <h2>New Arrivals</h2>
                            @if(session()->has('user'))
                            <h1>Welcome, {{ session('user')->name }}</h1>
                            
                            <a href="userlogout/{{session('user')->id}}" class="btn">logout</a>
                            
                        @else
                            <h1>Welcome, Guest</h1>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if ($rubberWatch)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-new-pro mb-30 text-center">
                                <div class="product-img">
                                    <img src="{{ asset('uploads/watch/' . $rubberWatch->image) }}" height="350px"
                                        alt="{{ $rubberWatch->name }}">
                                </div>
                                <div class="product-caption">
                                    <h3><a href="product_details">{{ $rubberWatch->name }}</a></h3>
                                    <span>{{ $rubberWatch->brand }}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($chainWatch)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-new-pro mb-30 text-center">
                                <div class="product-img">
                                    <img src="{{ asset('uploads/watch/' . $chainWatch->image) }}" height="350px"
                                        alt="{{ $chainWatch->name }}">
                                </div>
                                <div class="product-caption">
                                    <h3><a href="product_details">{{ $chainWatch->name }}</a></h3>
                                    <span>{{ $chainWatch->brand }}</span>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($smartWatch)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-new-pro mb-30 text-center">
                                <div class="product-img">
                                    <img src="{{ asset('uploads/watch/' . $smartWatch->image) }}" height="350px"
                                        alt="{{ $smartWatch->name }}">
                                </div>
                                <div class="product-caption">
                                    <h3><a href="product_details">{{ $smartWatch->name }}</a></h3>
                                    <span>{{ $smartWatch->brand }}</span>
                                </div>
                            </div>
                        </div>
                    @endif

                   
                </div>
            </div>
        </section>
        <!--  New Product End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(frontend/assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-gallery mb-30">
                            <div class="gallery-img big-img"
                                style="background-image: url(frontend/assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img"
                                        style="background-image: url(frontend/assets/img/gallery/gallery3.png);"></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img small-img"
                                        style="background-image: url(frontend/assets/img/gallery/gallery4.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Popular Items Start -->
        <div class="popular-items section-padding30">
            <div class="container">
                <!-- Section tittle -->
               
                    
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-70 text-center">
                            <h2>Popular Items</h2>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                                </div>
                                </div>
                                </div>
                        
                <div class="row">
                    @if ($rubberWatch)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                          
                                <img src="{{asset('uploads/watch/' . $rubberWatch->image)}}" alt="not work">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details">{{$rubberWatch->name}}</a></h3>
                                <span>{{$rubberWatch->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($chainWatch)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{asset('uploads/watch/' . $chainWatch->image)}}" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details">{{$chainWatch->name}}</a></h3>
                                <span>{{$chainWatch->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($strapWatch)
                   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{asset('uploads/watch/' . $strapWatch->image)}}" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details">{{$strapWatch->name}}</a></h3>
                                <span>{{$strapWatch->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($digitalWatch)
                   <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src="{{asset('uploads/watch/' . $digitalWatch->image)}}" alt="">
                                <div class="img-cap">
                                    <span>Add to cart</span>
                                </div>
                                <div class="favorit-items">
                                    <span class="flaticon-heart"></span>
                                </div>
                            </div>
                            <div class="popular-caption">
                                <h3><a href="product_details">{{$digitalWatch->name}}</a></h3>
                                <span>{{$digitalWatch->price}}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($smartWatch)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                         <div class="single-popular-items mb-50 text-center">
                             <div class="popular-img">
                                
                                 <img src="{{asset('uploads/watch/' . $smartWatch->image)}}" alt="">
                                 <div class="img-cap">
                                     <span>Add to cart</span>
                                 </div>
                                 <div class="favorit-items">
                                     <span class="flaticon-heart"></span>
                                 </div>
                             </div>
                             <div class="popular-caption">
                                 <h3><a href="product_details">{{$smartWatch->name}}</a></h3>
                                 <span>{{$smartWatch->price}}</span>
                             </div>
                         </div>
                     </div>
                     @endif
                 
                   
                </div>
                <!-- Button -->
                <div class="row justify-content-center">
                    <div class="room-btn pt-70">
                        <a href="catagori" class="btn view-btn1">View More Products</a>
                    </div>
                </div>
            </div>

        <!-- Popular Items End -->

        <!--? Watch Choice  Start-->
        <div class="watch-area section-padding30">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5 col-md-6">
                        <div class="watch-details mb-40">
                            <h2>{{$latestWatch->name}}</h2>
                            <p>{{$latestWatch->description}}</p>
                            <p>{{$latestWatch->brand}}Brand</p>
                            <a href="shop" class="btn">Show Watches</a>
                            <div id="countdown" class="countdown">
                                <div>
                                    <span>Minutes</span>
                                    <span id="minutes">00</span>
                                </div>
                                <div>
                                    <span>Seconds</span>
                                    <span id="seconds">00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="choice-watch-img mb-40">
                            <img src="{{asset('uploads/watch/' . $latestWatch->image)}}" alt="Choice Watch">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Watch Choice  End-->
        <!--? Shop Method Start-->
        <div class="shop-method-area">
            <div class="container">
                <div class="method-wrapper">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-package"></i>
                                <h6>Free Shipping Method</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-unlock"></i>
                                <h6>Secure Payment System</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-method mb-40">
                                <i class="ti-reload"></i>
                                <h6>Secure Payment System</h6>
                                <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
    </main>
@endsection
