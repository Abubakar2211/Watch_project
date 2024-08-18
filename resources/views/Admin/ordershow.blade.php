@extends('admin.layouts.main')


@section('main-section')
    


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Form elements </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">


                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">User Buy</h4>
                                    <p class="card-description"> {{ "$order->Uname" }} </p>
                                    <form class="forms-sample" action="/ordershow/{{ $order->id }}" method="POST" enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">User Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$order->Uname" }}" name="Uname" placeholder="User name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Contact</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$order->contact" }}" name="Contact" placeholder="contact">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Type</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$order->type" }}" name="type" placeholder="Type">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Shift</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$order->shift" }}" name="shift" placeholder="Shift">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$order->name" }}" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Brand</label>
                                            <input type="text" class="form-control" id="exampleInputPassword4"
                                                value="{{ "$order->brand" }}" name="brand"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Type</label>
                                            <select class="form-control" name="type" id="exampleSelectGender">
                                                    <option value="chain" {{ $order->type == 'chain' ? 'selected' : '' }}>
                                                    Chain watch</option>
                                                    <option value="strap" {{ $order->type == 'strap' ? 'selected' : '' }}>
                                                    Strap watch</option>
                                                    <option value="rubber" {{ $order->type == 'rubber' ? 'selected' : '' }}>
                                                    Rubber watch</option>
                                                    <option value="digital" {{ $order->type == 'digital' ? 'selected' : '' }}>
                                                    Digital watch</option>
                                                    <option value="smart" {{ $order->type == 'smart' ? 'selected' : '' }}>
                                                    Smart watch</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputprice">Image</label>
                                            <input type="file" id="myfile" class="form-control" name="image">
                                            @if($order->image)
                                                <img src="{{ asset('uploads/watch/' . $order->image) }}" alt="Admin Image" style="max-width: 100px; margin-top: 10px;">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Quantity</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$order->quantity" }}" name="quantity" placeholder="Quantity">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Price</label>
                                            <input type="text" class="form-control" name="Total"
                                                value="{{ "$order->total" }}" id="exampleInputprice"
                                                placeholder="Contact">
                                        </div>

                                        <button type="submit" name="submit"
                                            class="btn btn-primary mr-2">Submit</button>
                                        <a class="btn btn-light" href="{{url('order')}}">Cancel</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection