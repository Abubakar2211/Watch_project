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
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Type</th>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th colspan="2">Action</th>

                                            </tr>
                                        </thead>
                                        @foreach ($watch as $data)
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    <img src="{{ asset('uploads/watch/' . $data->image) }}" alt="Watch Image" class="img-fluid">
                                                </td>
                                                <td>{{ $data->name }}</td>
                                                <td style="max-width: 50px; overflow: hidden; text-overflow: ellipsis;">
                                                    {{ $data->description }}
                                                </td>
                                                <td>{{ $data->type }}</td>
                                                <td>{{ $data->brand }}</td>
                                                <td>{{ $data->price }}</td>
                                                <td><a href="watchEdit/{{ $data->id }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                                <td><a href="/watchDelete/{{ $data->id }}"><i class="fa-solid fa-delete-left"></i></a></td>
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