<?php
		include 'get-details.php';
	$data=get_data();
	if(isset($_GET['id']))
	{
		if($data['id']!= $_GET['id'])
		{
			header('Location:dashboard.php');
		}
	}
	else
	{
		
			header('Location:dashboard.php');
	}
	function get_image($data)
	{
		$img="";
		if($data['img']==""||$data['img']==null)
		{
		if($data['gender']=="male")
		{
			$img.="svg/male.svg";
		}
		else 		{
			$img.="svg/female.svg";
		}
		}
		else
		{
			$img.="profile/".$data['img'];
		}
		return $img;
	}
	$img=get_image($data);
	//	print_r($data);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Tat's My Buddy</title>
    <!-- Custom CSS -->
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>

                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="dashboard.php">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="dist/img/buddy-logo.png" width="100%" alt="homepage"  class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="dist/img/buddy-logo.png" width="100%"  alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                              <!--  <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />-->
                                <!-- Light Logo text -->
                               <!-- <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" />-->
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        
                        <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link" href="javascript:void(0)">
                                <form>
                                    <div class="customize-input">
                                        <input class="form-control custom-shadow custom-radius border-0 bg-white"
                                            type="search" placeholder="Search" aria-label="Search">
                                        <i class="form-control-icon" data-feather="search"></i>
                                    </div>
                                </form>
                            </a>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php  echo $img;?>" alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark"><?php echo ucwords($data["fname"])." ".$data["lname"];?></span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="profile.php?user=<?php echo $data['id'];?>"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                                    My Profile</a>
                               
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="lock" class="svg-icon mr-2 ml-1"></i>
                                    Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu" style="font-size:1.5em">Main Navigation</span></li>

                        <li class="sidebar-item selected">
                            <a class="sidebar-link sidebar-link active" href="dashboard.php" aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Explore
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="knowledge.php" aria-expanded="false">
                                <i data-feather="file" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Knowledge
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="my_buddy.php" aria-expanded="false">
                                <i data-feather="users" class="feather-icon"></i>
                                <span class="hide-menu">
                                    My Buddy
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="course.php" aria-expanded="false">
                                <i data-feather="book" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Course
                                </span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="certified.php" aria-expanded="false">
                                <i data-feather="award" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Get Certified
                                </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="achievers.php" aria-expanded="false">
                                <i data-feather="gift" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Achievers
                                </span>
                            </a>
                        </li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="authentication-login1.html" aria-expanded="false">
                                <i data-feather="log-out" class="feather-icon"></i>
                                <span class="hide-menu">
                                    Logout
                                </span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <br>
			<form id="save_info" method="post" enctype="multipart/form-data">
			<h3 class="text-center text-success">My Profile</h3>
            <div class="container-fluid">
			
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Personal Info</h5>
									<input type="hidden" name="id" value="<?php echo $data['id'];?>">
									<div class="form-group">
										<label for="fname">Your name</label>
										<input type="text" name="fname" id="fname" value="<?php echo ucwords($data['fname'])?>" class="form-control" placeholder="First Name">
									</div>
									<div class="form-group">
										<label for="lname">Your name</label>
										<input type="text" name="lname" id="lname" class="form-control" value="<?php echo $data['lname']?>" placeholder="Last Name">
									</div>
									<div class="form-group">
										<label for="email">Email address</label>
										<input type="text" id="email" class="form-control disabled" disabled="disabled" placeholder="Email Address" value="<?php echo $data['mail']?>">
									</div>
									<div class="form-group">
										<label for="mobile">Contact number</label>
										<input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $data["mobile"]; ?>" placeholder="Mobile Number" maxlength="20" minlength="10">
									</div>
									<div class="form-group">
										<div class="form-row">
											<div class="col">
											<label for="degree">Degree</label>
											<select class="form-control" id="degree" name="degree">
												<option value="null">Select Degree</option>
												<?php
													$deg=array("B.E","B.Tech","M.E","M.Tech");
													for($i=0;$i<4;$i++)
													{
													if($deg[$i]==$data['degree'])
													{
														
													?>
											<option  value="<?php echo $deg[$i]?>" selected><?php echo $deg[$i]?></option>
													<?php
													}
													else
													{
													?>
											<option  value="<?php echo $deg[$i]?>" ><?php echo $deg[$i]?></option>
													<?php
													}
	
													}
												?>
											</select>
											</div>
											<div class="col">
												<label for="dept">Department</label>
												<select class="form-control" id="dept" name="dept">
													<option value="null">Select Department</option>
													<?php
												$query="SELECT * FROM `department` ORDER by `code` ASC";
												$result=mysqli_query($con,$query);
												while($row=mysqli_fetch_array($result))
												{
													if($row['name']== $data['dept'])
													{
														
													?>
											<option  value="<?php echo $row['name']?>" selected><?php echo $row['name']?></option>
													<?php
													}
													else
													{
													?>
											<option  value="<?php echo $row['name']?>" ><?php echo $row['name']?></option>
													<?php
													}
												}
											?>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="form-row">
											<div class="col">
												
												<label for="passed_out">Passedout Year</label>
												<select class="form-control" id="passed_out" name="passed_out">
												<option value="null">Select</option>
													
													<?php
													for($i=date("Y")-4;$i<date("Y")+5;$i++)
													{
														if($data['passed_out']==$i)
														{
															
															?>															
															<option selected value="<?php echo $i;?>"><?php echo $i;?></option>
														<?php
														}
														else{
														?>
														<option value="<?php echo $i;?>"><?php echo $i;?></option>
														<?php
														}
													}
													?>
												</select>
											</div>
											<div class="col">
												<label for="reg">Register Number</label>
												<input type="text" class="form-control" name="reg" value="<?php echo $data['reg_no'];?>" id="reg" placeholder="Register Number">
											</div>
										</div>
									</div>
									<div class="form-group"> 
										<label for="college">College Name</label>
										<select class="form-control" id="college" name="college">
											<option  value="null">Select College Name</option>
											<?php
												$query="SELECT * FROM `college` ORDER by `code` ASC";
												$result=mysqli_query($con,$query);
												while($row=mysqli_fetch_array($result))
												{
													if($row['name']==$data['college'])
													{
														
													?>
											<option  value="<?php echo $row['name']?>" selected><?php echo $row['name']?></option>
													<?php
													}
													else
													{
													?>
											<option  value="<?php echo $row['name']?>" ><?php echo $row['name']?></option>
													<?php
													}
												}
											?>
										</select>
									</div>
									<div class="form-group">
									 
												<label for="cgpa">CGPA</label>
												<input type="text" class="form-control"  name="cgba" value="<?php echo $data['cgba'];?>" id="cgpa" placeholder="CGPA">
									</div>
									
								</div>
							</div>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Additional Info</h5>
								<div class="form-group">
									<label for="studentQualification">Profile Image</label>
									<input type="file" id="imageup" class="form-control" name="imageup" placeholder="Upload Profile Image">
								</div>
								<div class="form-group">
									<label for="studentQualification">Resume</label>
									<input type="file" id="resumeup" class="form-control" name="resumeup" placeholder="Upload Profile Image">
								</div>
								<div class="form-group">
									<label for="intro">Self intro</label>
									<textarea class="form-control"  name="intro" id="intro" rows="4" placeholder="Tell us something about you."><?php echo $data['self_intro'];?></textarea>
								</div>
							</div>
						</div>
						<div class="card">
						<div class="card-body">
							<h5 class="card-title">Academics</h5>
							<div class="form-group">
								<fieldset>
									<legend>SSLC</legend>
									<div class="form-row">
										
										<div class="col">
											<label>Percentage</label>
											<input type="text" value="<?php echo $data['sslc_percentage'];?>" class="form-control" name="sslc_percentage" id="sslc_percentage" placeholder="Percentage">
										</div>
										<div class="col">
											<label>Year</label>
											<input type="text" value="<?php echo $data['sslc_year'];?>" class="form-control" id="sslc_year" name="sslc_year" placeholder="Year">
										</div>
									</div>
								</fieldset> 
							</div>
							<div class="form-group">
								<fieldset>
									<legend>HSC</legend>
										<div class="form-row">
										
											<div class="col">
												<label>Percentage</label>
												<input type="text" value="<?php echo $data['hsc_percentage'];?>" name="hsc_percentage" class="form-control" id="hsc_percentage" placeholder="Percentage">
											</div>
											<div class="col">
												<label>Year</label>
												<input type="text"  value="<?php echo $data['hsc_year'];?>" class="form-control" name="hsc_year" id="hsc_year" placeholder="Year">
											</div>
										</div>
								</fieldset>	
							</div>
							
						</div>
					
					</div>
					<div class="text-right">
						<button id="button" class="btn btn-success">Submit</button>
					</div>	<br>
					</div>
				<?php 
	print_r($data['self_intro']);?>
				</div>
			</div>
			</form>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
	
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/upload.js"></script>
    <script src="dist/js/DashboardValidation.js"></script>
</body>

</html>
