@extends('layouts.master')
@section('content')
    <!--Page Banner Area Start-->
    <div class="page-banner-area" style="background-image: url(assets/images/bg/page-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content text-center">
                        <h1>KINGS OF THE <br> WARRIORS</h1>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Area End-->
    
     <!--Login Section Start-->
    <div class="login-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
        <div class="container">
            <div class="row">

                <!-- Login -->
                <div class="col-md-6 col-12 d-flex">
                    <div class="gilbard-login">

                        <h3>Login to your account</h3>
                        <p>Gilbard provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>

                        <!-- Login Form -->
                        <form action="#">
                            <div class="row">
                                <div class="col-12 mb-30"><input type="text" placeholder="Type your username or email address"></div>
                                <div class="col-12 mb-20"><input type="password" placeholder="Enter your passward"></div>
                                <div class="col-12 mb-15">

                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>

                                    <a href="#">Forgotten pasward?</a>

                                </div>
                                <div class="col-12"><input type="submit" value="LOGIN"></div>
                            </div>
                        </form>
                        <h4>Don’t have account? please click <a href="register.html">Register</a></h4>

                    </div>
                </div>

                <div class="col-md-1 col-12 d-flex">

                    <div class="login-reg-vertical-boder"></div>

                </div>

                <!-- Login With Social -->
                <div class="col-md-5 col-12 d-flex">

                    <div class="gilbard-social-login">
                        <h3>Also you can login with...</h3>

                        <a href="#" class="facebook-login">Login with <i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter-login">Login with <i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus-login">Login with <i class="fa fa-google-plus"></i></a>

                    </div>

                </div>

            </div>
        </div>
    </div>
     <!--Login Section End-->
    
    <!--Projects section start-->
    <div class="newslatter-section newslatter-section-tow section pt-xs-20 pb-xs-50">
        <div class="container">
           
            <div class="row">
               <div class="col-12">
               </div> 
            </div>
            
        </div>
        
    </div>
    <!--Projects section end-->
    
@stop