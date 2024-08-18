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
                                    <h4 class="card-title">Admin Update</h4>
                                    <p class="card-description"> {{ "$watch->name" }} </p>
                                    <form class="forms-sample" action="/watchupd/{{ $watch->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$watch->name" }}" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputdescription">Description</label>
                                            <input type="text" class="form-control" id="exampleInputdescription"
                                                value="{{ "$watch->description" }}" name="description" placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Brand</label>
                                            <input type="text" class="form-control" id="exampleInputPassword4"
                                                value="{{ "$watch->brand" }}" name="brand"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Type</label>
                                            <select class="form-control" name="type" id="exampleSelectGender">
                                                    <option value="chain" {{ $watch->type == 'chain' ? 'selected' : '' }}>
                                                    Chain watch</option>
                                                    <option value="strap" {{ $watch->type == 'strap' ? 'selected' : '' }}>
                                                    Strap watch</option>
                                                    <option value="rubber" {{ $watch->type == 'rubber' ? 'selected' : '' }}>
                                                    Rubber watch</option>
                                                    <option value="digital" {{ $watch->type == 'digital' ? 'selected' : '' }}>
                                                    Digital watch</option>
                                                    <option value="smart" {{ $watch->type == 'smart' ? 'selected' : '' }}>
                                                    Smart watch</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputprice">Image</label>
                                            <input type="file" id="myfile" class="form-control" name="image">
                                            @if($watch->image)
                                                <img src="{{ asset('uploads/watch/' . $watch->image) }}" alt="Admin Image" style="max-width: 100px; margin-top: 10px;">
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputContact">Price</label>
                                            <input type="text" class="form-control" name="price"
                                                value="{{ "$watch->price" }}" id="exampleInputprice"
                                                placeholder="Contact">
                                        </div>

                                        <button type="submit" name="submit"
                                            class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection