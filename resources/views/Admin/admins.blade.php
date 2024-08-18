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
                                                <th>Admin</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Gender</th>
                                                <th>Contact</th>
                                                <th colspan="2">Action</th>

                                            </tr>
                                        </thead>
                                        @foreach ($admin as $data)
                                            <tbody>
                                                <tr>

                                                    <td class="py-1">
                                                        <img src="{{ asset('uploads/admin/' . $data->image) }}" alt="Watch Image">
                                                    </td>

                                                    <td>{{ "$data->name" }}</td>
                                                    <td>{{ "$data->email" }}</td>
                                                    <td>{{ "$data->password" }}</td>
                                                    <td>{{ "$data->gender" }}</td>
                                                    <td>{{ "$data->contact" }}</td>
                                                    <td><a href="edit/{{$data->id}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                                    <td><a href="delete/{{$data->id}}"><i class="fa-solid fa-delete-left"></i></a></td>
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