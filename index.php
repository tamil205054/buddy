<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Tat's My Buddy</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/custom.css" rel="stylesheet">

</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="logo">
                    <img src="svg/log.svg" class="img-fluid img-log" height="100vh">
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="box card" style="padding:30px">
                    <img class="mx-auto d-block" src="assets/img/logo.png">
                    <h5 class="text-center text-success text-bold">Where students meet Experts</h5>
                    <div class="container-fluid">
                        <hr>
                        <p class="text-bold text-center text-info">Login</p>
                    </div>
                    <form id="login">
                        <img class="mx-auto d-block" src="svg/profile.svg" width="25%">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="text" class="form-control" placeholder="Enter email" id="log-email">
                            <div id="log-email-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                            <div id="pwd-msg"></div>
                        </div>
                        <div class="float-right"><a href="javascript:void(0)" class="text-info">Forgot Password ?</a></div>
                        <button type="submit" class="btn btn-success btn-block">Sign in</button>
                        <hr>
                        <div class="text-center">Don’t have an account?<a href="signup.php"> Sign up</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="dist/js/signup.js"></script>
    <script src="dist/js/checkValidation.js"></script>

</body>

</html>