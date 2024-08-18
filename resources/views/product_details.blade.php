@extends('layouts.main')

@section('main-section')
    <main>
        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="product_img_slide owl-carousel">
                            <div class="single_product_img">
                                <img src="{{asset('uploads/watch/' . $watch->image)}}" alt="#" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_product_text text-center">
                            <h3>{{$watch->name}}</h3>
                            <p>{{$watch->description}}</p>
        
                            <div class="card_area">
                                <div class="product_count_area">
                                    <p>Quantity</p>
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item number-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" type="text" value="1" min="1" max="20" name="quantity" id="quantity-input" readonly>
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                    <p id="price-display" name="price">{{ $watch->price }}</p>
                                </div>
                            </div>
        
                            <!-- Add your scripts at the end of the body -->
                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const quantityInput = document.getElementById('quantity-input');
                                    const priceDisplay = document.getElementById('price-display');
                                    const hiddenQuantityInput = document.getElementById('hidden-quantity-input');
                                    const hiddenTotalInput = document.getElementById('hidden-total-input');
                                    const initialPrice = {{ $watch->price }};
                                    let currentPrice = initialPrice;
        
                                    function updatePrice(quantity) {
                                        currentPrice = initialPrice * quantity;
                                        priceDisplay.textContent = currentPrice;
                                        hiddenQuantityInput.value = quantity;
                                        hiddenTotalInput.value = currentPrice;
                                    }
        
                                    document.querySelector('.number-increment').addEventListener('click', function () {
                                        let quantity = parseInt(quantityInput.value, 10);
                                        if (!isNaN(quantity) && quantity < 20) {
                                            quantity += 1;
                                            quantityInput.value = quantity;
                                            updatePrice(quantity);
                                        }
                                    });
        
                                    document.querySelector('.number-decrement').addEventListener('click', function () {
                                        let quantity = parseInt(quantityInput.value, 10);
                                        if (!isNaN(quantity) && quantity > 1) {
                                            quantity -= 1;
                                            quantityInput.value = quantity;
                                            updatePrice(quantity);
                                        }
                                    });
        
                                    // Ensure initial hidden inputs are set correctly
                                    updatePrice(1); // Assuming initial quantity is 1
                                });
                            </script>
        
                            <form action="{{ asset('cart/' . $watch->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="quantity" id="hidden-quantity-input" value="1">
                                <input type="hidden" name="total" id="hidden-total-input" value="{{ $watch->price }}">
                                <div class="add_to_cart mt-5">
                                    <button type="submit" class="btn_3">Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--================End Single Product Area =================-->
    </main>


@endsection
