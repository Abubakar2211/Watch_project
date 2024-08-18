@extends('layouts.main')
@section('main-section')
<main>

    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Order Delete</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $item)
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{ asset('uploads/watch/'. $item->image) }}" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{ $item->total }}</h5>
                                </td>
                                <td>
                                    {{ $item->quantity }}
                                </td>
                                <td><a href="{{ url('card/' . $item->id) }}" class="btn btn">Delete</a></td>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>{{ $totalQuantity }}</h5>
                                </td>
                                <td>
                                    <h5>${{ number_format($totalPrice, 2) }}</h5>
                                </td>
                            </tr>
                            <tr class="bottom_button">
                                <td>
                                    <a class="btn_1" href="{{ url('shop') }}">Continue Shopping</a>
                                </td>
                                <td></td>
                                <td>
                                  @if ($totalPrice > 0)
                                  <h4>I want to pay ${{ number_format($totalPrice, 2) }} USD</h4></td>
                                <td>
                                  <form method="post" action="{{ url('paypal') }}">
                                      @csrf
                                      <input type="hidden" name="amount" value="{{ $totalPrice }}">
                                      <input type="submit" name="paynow" value="Pay Now" class="btn_1">
                                  </form>
                                  @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->
</main>
@endsection
