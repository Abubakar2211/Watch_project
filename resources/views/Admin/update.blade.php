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
                                    <p class="card-description"> value="{{ "$data->name" }}" </p>
                                    <form class="forms-sample" action="/upd/{{ $data->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                value="{{ "$data->name" }}" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3"
                                                value="{{ "$data->email" }}" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword4"
                                                value="{{ "$data->password" }}" name="password"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelectGender">Gender</label>
                                            <select class="form-control" name="gender" id="exampleSelectGender">
                                                <option value="M" {{ $data->gender == 'M' ? 'selected' : '' }}>
                                                    Male</option>
                                                <option value="F" {{ $data->gender == 'F' ? 'selected' : '' }}>
                                                    Female</option>
                                                <option value="O" {{ $data->gender == 'O' ? 'selected' : '' }}>
                                                    Other</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputprice">Image</label>
                                            <input type="file" id="myfile" class="form-control" name="image">
                                            @if($data->image)
                                                <img src="{{ asset('uploads/admin/' . $data->image) }}" alt="Admin Image" style="max-width: 100px; margin-top: 10px;">
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputContact">Contact</label>
                                            <input type="text" class="form-control" name="contact"
                                                value="{{ "$data->contact" }}" id="exampleInputContact"
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