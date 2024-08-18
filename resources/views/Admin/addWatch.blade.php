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
                    <h4 class="card-title">Basic form elements</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" action="watches" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputdescription">Description</label>
                        <input type="text" class="form-control" id="exampleInputdescription" name="description" placeholder="Description">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectTyoe">Watch Type</label>
                        <select class="form-control" name="type" id="exampleSelectGender">
                          <option value="Chain">Chain Watch</option>
                          <option value="Strap">Strap Watch</option>
                          <option value="Rubber">Rubber Watch</option>
                          <option value="Digital">Digital Watch</option>
                          <option value="Smart">Smart Watch</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Brand</label>
                        <input type="text" class="form-control" id="exampleInputType4" name="brand" placeholder="Brand">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputprice">Image</label>
                        <input type="file" id="myfile"  class="form-control" name="image" multiple>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputprice">Price</label>
                        <input type="text" class="form-control" name="price" id="exampleInputprice" placeholder="price">
                      </div>

                      <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          @if ($errors->any())
          <script>
              alert('Validation failed: {{ implode(", ", $errors->all()) }}');
          </script>
      @endif
  
      @if (session('success'))
          <script>
              alert('{{ session('success') }}');
          </script>
      @endif
        @endsection