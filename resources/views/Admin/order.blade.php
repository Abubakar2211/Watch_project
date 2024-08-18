@extends('admin.layouts.main')

@section('main-section')


            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Basic Tables </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Hoverable Table</h4>
                                    <p class="card-description"> Add class <code>.table-hover</code>
                                    </p>
                                    <table class="table table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>Watch</th>
                                                <th>User Name</th>
                                                <th>Contact</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Shift</th>
                                                <th>Brand</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th colspan="2">Action</th>

                                            </tr>
                                        </thead>
                                        @foreach ($order as $data)
                                         <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="{{ asset('uploads/watch/' . $data->image) }}" alt="Watch Image" class="img-fluid">
                                                </td>
                                                <td>{{ $data->Uname }}</td>
                                                <td>{{ $data->contact }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->type }}</td>
                                                <td>{{ $data->shift }}</td>
                                                <td>{{ $data->brand }}</td>
                                                <td>{{ $data->quantity }}</td>
                                                <td>{{ $data->total }}</td>
                                                <td><a href="ordershow/{{ $data->id }}"><i class="fa-solid fa-eye"></i></a></td>
                                            </tr>
                                        </tbody>
                                        
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <!-- content-wrapper ends -->
                 @endsection