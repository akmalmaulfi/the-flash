<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | The Flash | E-sport Team</title>

<!--===============================================================================================-->
	<link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/logo/logo.png') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" href="{!! asset('css/signin/style.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{!! asset('fonts/iconic/css/material-design-iconic-font.min.css') !!}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<!--===============================================================================================-->

</head>
<body>

    <!-- Main Body -->
    <div class="main">

        <!-- Container -->
        <div class="container">

            <!-- Konten -->
            <div class="login-content">

                <!-- Gaambar -->
                <div class="login">
                    <div class="login-img">
                        <div class="overlay">
                        </div>
                    </div>
                </div>
                <!-- //Gambar// -->

                <!-- Form Nya -->
                <div class="form">
                    <form id="form" method="POST" autocomplete="off" action="{{ url('/postLogin') }}">

                        {{ csrf_field() }}
                        <h2><span class="merah">Sign In</span> To continue!</h2>

                        <div class="form-group form-input">
                            <input type="email" name="email" value="" class="form-control" required>
                            <label for="email" class="form-label">Email</label>
                        </div>

                        <div class="form-group form-input">
                            <input type="password" name="password" class="form-control" required>
                            <label for="password" class="form-label">Password</label>
                        </div>

                            <input type="submit" value="Sign In" class="signin" id="submit" name="submit"/>

                        <div class="form-submit">
                            <p> Don't have an account ? Please Contact The <a class="merah" href="https://api.whatsapp.com/send?phone=6281317019680&text=Permisi,%20saya%20ingin%20mendaftar%20di%20Team%20e-Sport%20TheFlash">Admin</a>
                            <a href="{{ url('index') }}" class="cancel">Cancel</a></p>
                        </div>
                    </form>
                </div>
                <!-- //Form Nya// -->

            </div>
            <!-- //Konten// -->

        </div>
        <!-- //Container// -->

    </div>
    <!-- //Main Body// -->



</body>

<!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!--===============================================================================================-->

</html>
