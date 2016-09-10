<!-- resources/views/auth/login.blade.php -->

<!-- <form method="POST" action="login">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form> -->
<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
<head> 
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Administrator Area</title>   
<link href="{{asset('vendors/bower_components/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
<link href="{{asset('css/app.min.1.css')}}" rel="stylesheet">
<link href="{{asset('css/app.min.2.css')}}" rel="stylesheet"> 
</head> 
<body class="login-content">
    <!-- Login -->
    <form method="POST" action="login">
    {!! csrf_field() !!}
        <div class="lc-block toggled" id="l-login">
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                <div class="fg-line">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Username">
                </div>
            </div>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                <div class="fg-line">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    <i class="input-helper"></i>
                    Keep me signed in
                </label>
            </div>
            
            <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
            
            <ul class="login-navigation">
                <li data-block="#l-register" class="bgm-red">Register</li>
                <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
            </ul>
        </div>
    </form>
    <!-- resources/views/auth/register.blade.php --> 
        <!-- <form method="POST" action="{{URL::to('register')}}">
            {!! csrf_field() !!}

            <div>
                Name
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Password
                <input type="password" name="password">
            </div>

            <div>
                Confirm Password
                <input type="password" name="password_confirmation">
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form> -->
        <!-- Register -->
        <form method="POST" action="{{URL::to('register')}}">
        {!! csrf_field() !!}
            <div class="lc-block" id="l-register">
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Username">
                    </div>
                </div>
                
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    <div class="fg-line">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address">
                    </div>
                </div>
                
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                    <div class="fg-line">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        <i class="input-helper"></i>
                        Accept the license agreement
                    </label>
                </div>
                
               <button type="submit" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
                
                <ul class="login-navigation">
                    <li data-block="#l-login" class="bgm-green">Login</li>
                    <li data-block="#l-forget-password" class="bgm-orange">Forgot Password?</li>
                </ul>
            </div>
        </form>
        <!-- Forgot Password -->
        <div class="lc-block" id="l-forget-password">
            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>
            
            <div class="input-group m-b-20">
                <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                <div class="fg-line">
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
            </div>
            
            <a href="" class="btn btn-login btn-danger btn-float"><i class="zmdi zmdi-arrow-forward"></i></a>
            
            <ul class="login-navigation">
                <li data-block="#l-login" class="bgm-green">Login</li>
                <li data-block="#l-register" class="bgm-red">Register</li>
            </ul>
        </div>  
    <script src="{{asset('vendors/bower_components/jquery/dist/jquery.min.js')}}"></script> 
    <script src="{{asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/bower_components/Waves/dist/waves.min.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    </body>
</html>