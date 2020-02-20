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
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" >
                <div class="logo">
                <img src="svg/signup.svg" class="img-fluid img-sign" height="100vh" >
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="box card" style="padding:30px">
                     <img class="mx-auto d-block" src="assets/img/logo.png"> 
                <h5 class="text-center text-success text-bold">Where students meet Experts</h5>
                     <div class="container-fluid">

                         <p class="text-center text-bold text-info">Sign-up with Email</p>
                         <hr>
                     </div>
                    <form id="signup">
                        <div class="form-row">
                            <div class="col">
                                <label for="fname">First Name:</label>
                                <input type="text" class="form-control" placeholder="First name" id="fname">
                                <div id="fname-msg"></div>
                            </div>
                            <div class="col">
                                <label for="lname">Last Name:</label>
                                <input type="text" class="form-control" placeholder="Last name" id="lname">
                                <div id="lname-msg"></div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="text" class="form-control" placeholder="Enter email" id="email">
                            <div id="email-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="category">Choose Your Category</label>
                            <select id="category" class="custom-select">
                                <option value="null">Select</option>
                                <option value="Student">Student</option>
                                <option value="Expert">Expert</option>
                            </select>
                            <div id="category-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="gender">Select Gender</label>
                            <select id="gender" class="custom-select">
                                <option value="null">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="transgender">Others</option>
                            </select>
                            <div id="gender-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                            <div id="pwd-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="cpwd">Confirm Password:</label>
                            <input type="password" class="form-control" placeholder="Enter Confirm Password" id="cpwd">
                            <div id="cpwd-msg"></div>
                        </div>
                        <div class="form-group">
                            <label for="cpwd">Mobile Number</label>
                            <input type="number" class="form-control" placeholder="Enter Mobile Number" id="num">
                            <div id="num-msg"></div>
                        </div>
                        <button type="submit" class="btn btn-success btn-block" id="sign-btn">Submit</button>
                        <hr>
                        <div class="text-center">Already registered User?<a href="index.php">Log in</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	
	<!--sign in popup-->
	 <div id="success-modal" class="modal fade" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-sm modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body p-4" >
                                                <div class="text-center">
                                                    <i class="dripicons-checkmark h1"></i>
                                                    <h4 class="mt-2">Well Done!</h4>
                                                    <p class="mt-3">Success.</p>
                                                    <a href="index.php" class="btn btn-primary"
                                                        >Continue</a>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="dist/js/signup.js"></script>
</body>

</html>