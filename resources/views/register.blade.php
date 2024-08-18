@extends('layouts.main')

@section('main-section')
    
    <main>

        <!--================login_part Area =================-->
        <section class="login_part  ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">


                        <img height="100%" width="100%"
                            src="https://m.media-amazon.com/images/I/51mtrRfhFOL._AC_SY580_.jpg" alt="">


                    </div>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back ! <br>
                                    Please Sign in now</h3>
                                <form class="row contact_form" action="" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="" placeholder="Username">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="file" class="form-control" id="image" name="image" required>
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="contact" class="form-control" id="contact" name="contact"
                                            value="" placeholder="Contact">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="" placeholder="Email">
                                    </div>

                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="" placeholder="Password">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password_confirmation"
                                            value="" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="selector">
                                            <label for="f-option">Remember me</label>
                                        </div>
                                        <button type="submit" value="submit" class="btn_3">
                                            Register
                                        </button>
                                        <a class="lost_pass" href="login">login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>
@endsection
    