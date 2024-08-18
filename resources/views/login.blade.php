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
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back ! <br>
                                    Please Sign in now</h3>
                                    @if (session()->has('error'))
                                    <div class="alert alert-danger">
                                      <p>{{session()->get('error')}}</p>
                                    </div>
                                        
                                    @endif
                                <form class="row contact_form" action="loginadmin" method="post" >
                                    @csrf
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password"
                                            value="" placeholder="Password">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="f-option" name="selector">
                                            <label for="f-option">Remember me</label>
                                        </div>
                                        <button type="submit" class="btn_3">
                                            log in
                                        </button>
                                        <a class="lost_pass form-group text-center col-6" href="#">forget password?</a>
                                        <a class="lost_pass form-group text-center col-6" href="register">Register</a>
                                       <div class="row">
                                        <a href="GoogleLogin" class="btn_3 col-4 " type="submit" > Google</a>
    
                                        <h1 class="col-4"></h1>

                                        <button  type="submit" class="btn_3 col-4">
                                            Facebook
                                        </button>
                                    </div>
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