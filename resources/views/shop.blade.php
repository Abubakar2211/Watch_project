@extends('layouts.main')

@section('main-section')
    <main>
        <!-- Hero Area Start-->

        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#digital"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Digital Watch</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#smart"
                                    role="tab" aria-controls="nav-profile" aria-selected="false"> Smart Watch</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#chain"
                                    role="tab" aria-controls="nav-contact" aria-selected="false"> Chain Watch </a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#leather"
                                    role="tab" aria-controls="nav-profile" aria-selected="false"> Leather Watch</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#rubber"
                                    role="tab" aria-controls="nav-contact" aria-selected="false"> Rubber Watch</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view"></div>
                    <!-- Select items -->
                    <div class="select-this">
                        <form action="#">
                            <div class="select-itms">
                                <select name="select" id="select1">
                                    <option value="">40 per page</option>
                                    <option value="">50 per page</option>
                                    <option value="">60 per page</option>
                                    <option value="">70 per page</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="digital" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            @foreach($digitalWatches as $watch)
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="{{ asset('uploads/watch/' . $watch->image) }}" alt="">
                                            <div class="img-cap">
                                                <a href="product_details/{{$watch->id}}"><span>Add to cart</span></a>                                            </div>
                                            <div class="favorit-items">
                                                <span class="flaticon-heart"></span>
                                            </div>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details">{{ $watch->name }}</a></h3>
                                            <span>{{ $watch->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
        
                    <!-- Card two -->
                    <div class="tab-pane fade" id="smart" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            @foreach ($smartWatches as $watch)
                                                          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="{{ asset('uploads/watch/' . $watch->image) }}" alt="">
                                            <div class="img-cap">
                                                <a href="product_details/{{$watch->id}}"><span>Add to cart</span></a>                                            </div>
                                            <div class="favorit-items">
                                                <span class="flaticon-heart"></span>
                                            </div>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details">{{ $watch->name }}</a></h3>
                                            <span>{{ $watch->price }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
        
                    <!-- Card three -->
                    <div class="tab-pane fade" id="chain" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="row">
                            @foreach ($chainWatches as $watch)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ asset('uploads/watch/' . $watch->image) }}" alt="">
                                        <div class="img-cap">
                                            <a href="product_details/{{$watch->id}}"><span>Add to cart</span></a>                                            </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details">{{ $watch->name }}</a></h3>
                                        <span>{{ $watch->price }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
        
                    <!-- Card four -->
                    <div class="tab-pane fade" id="leather" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">
                            @foreach ($strapWatches as $watch)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ asset('uploads/watch/' . $watch->image) }}" alt="">
                                        <div class="img-cap">
                                            <a href="product_details/{{$watch->id}}"><span>Add to cart</span></a>                                            </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details">{{ $watch->name }}</a></h3>
                                        <span>{{ $watch->price }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
        
                    <!-- Card five -->
                    <div class="tab-pane fade" id="rubber" role="tabpanel" aria-labelledby="nav-rubber">
                        <div class="row">
                            @foreach ($rubberWatches as $watch)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="{{ asset('uploads/watch/' . $watch->image) }}" alt="">
                                        <div class="img-cap">
                                            <a href="product_details/{{$watch->id}}"><span>Add to cart</span></a>                                            </div>
                                        <div class="favorit-items">
                                            <span class="flaticon-heart"></span>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="product_details">{{ $watch->name }}</a></h3>
                                        <span>{{ $watch->price }}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        
        <!-- Latest Products End -->
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
