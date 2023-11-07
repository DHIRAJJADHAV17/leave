<!doctype html>

<html lang="en" class="h-100">

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <title>Sama-Music</title> -->
<link href="assests/css/bootstrap.css" rel="stylesheet">
<link href="assests/css/main.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
	<div id="page">

		<div class="wrapper">

			<nav id="sidebar" class="active">

				<div class="sidebar-header text-center">
					<!-- <h4 class="sidebar-title theme-item">Sama-Music</h4> -->
				</div>

				<ul class="list-unstyled components text-secondary">
				<div class="sidebar-header text-center">
				<i class="data-feather theme-item " data-feather="home"></i> <span
										class="theme-item"> <a href="/dashboard"> <h3>Dashboard</h3></a></span>
				</div>
				
						
						
					
					<?php if(session()->get('isadminLoggIn')): ?>
						<li><a  href="<?php base_url()?> requestt"><i
							class="data-feather theme-item" data-feather="pie-chart"></i> <span
							class="theme-item"> Request</span></a></li>
							 <li><a href="<?php base_url()?>admindashboard"><i class="data-feather theme-item " data-feather="home"></i><span 
											class="theme-item">Home</span></a></li>
							<!--<li><a href="<?php base_url()?> addcourse"><i class="data-feather theme-item"
											data-feather="file-text"></i> <span 
											class="theme-item">Add Course</span></a></li>
							<li><a href="<?php base_url()?> courses"><i
											class="data-feather theme-item" data-feather="grid"></i> <span
											class="theme-item"> Courses</span></a></li>
							
								<li><a  href="<?php base_url()?> request"><i
							class="data-feather theme-item" data-feather="pie-chart"></i> <span
							class="theme-item"> Request</span></a></li>
								


							<li>
						<div class="sidebardropdown">
							<a  class="sidebar-dropdown-btn"
								><i
								class="data-feather theme-item" data-feather="grid"></i> <span
								class="theme-item"> Report</span><i
								class="sidenaviconopen float-end" id="sidenavicon"
								data-feather="chevron-up"></i></a>

							<div class="dropdown-container">
							
								<a href="<?php base_url()?>activedetail" class="text-center"><i
									class="data-feather theme-item" data-feather="file"></i> <span
									class="data-feather theme-item"> Active Member </span></a>
									<a href="<?php base_url()?>duedetail" class="text-center"><i
									class="data-feather theme-item" data-feather="file"></i> <span
									class="data-feather theme-item"> Due Member</span></a> 
									<a href="<?php base_url()?> payment" class="text-center"><i 
									class="data-feather theme-item" data-feather="file"></i> <span
									 class="data-feather theme-item">payment Report</span></a>
									 
							</div>
						</div>
					</li>

					<li>
						<div class="sidebardropdown">
						<a  class="sidebar-dropdown-btn"
								><i
								class="data-feather theme-item" data-feather="grid"></i> <span
								class="theme-item"> Edit</span><i
								class="sidenaviconopen float-end" id="sidenavicon"
								data-feather="chevron-up"></i></a>

							<div class="dropdown-container">
							
								<a  href="<?php base_url()?> authteacher " class="text-center"><i
									class="data-feather theme-item" data-feather="file"></i> <span
									class="data-feather theme-item">Teacher</span></a> 
									<a  href="<?php base_url()?> authstudent" class="text-center"><i 
									class="data-feather theme-item" data-feather="file"></i> <span
									 class="data-feather theme-item">Users</span></a>
									 
							</div>
						</div>
					</li> -->

							<?php endif;?>
							    
							<?php if(session()->get('isLoggedIn')): ?>
								 <li><a href="<?php base_url()?> My_leave"><i
										class="data-feather theme-item" data-feather="pie-chart"></i> <span
										class="theme-item"> My_leave</span></a></li>
								<!--<li><a href="<?php base_url()?> courses"><i
										class="data-feather theme-item" data-feather="grid"></i> <span
										class="theme-item"> Courses</span></a></li>
								<li><a href="<?php base_url()?> payment"><i class="data-feather theme-item"
											data-feather="file-text"></i> <span 
											class="theme-item"> Payment History</span></a></li>
								 -->
								 <li><a href="<?php base_url()?> waste"><i
										class="data-feather theme-item" data-feather="pie-chart"></i> <span
										class="theme-item"> enroll</span></a></li>
										
                            
                        <?php endif;?>
						<?php if(session()->get('isLoggInteach')) :?>
                            <li><a href="<?php base_url()?> student"><i
										class="data-feather theme-item" data-feather="pie-chart"></i> <span
										class="theme-item"> Students</span></a></li>
								<li><a href="<?php base_url()?> courses"><i
										class="data-feather theme-item" data-feather="grid"></i> <span
										class="theme-item"> Courses</span></a></li>
								<li><a href="<?php base_url()?> addcourse"><i class="data-feather theme-item"
											data-feather="file-text"></i> <span 
											class="theme-item">Add Course</span></a></li>
                            
							

                        <?php endif;?>
					
						
					</li>
				</ul>

				

			</nav>

			<div id="bodywrapper" class="container-fluid showhidetoggle">

				<nav class="navbar navbar-expand-md navbar-white bg-white py-0"
					aria-label="navbarexample" id="navbar">
					<div class="container-fluid">
						<button type="button" id="sidebarCollapse"
							class="btn btn-light py-0">
							<i data-feather="menu"></i> <span></span>
						</button>
						
						<!-- <h4 class="sidebar-title theme-item mt-2 navbrandarea2">Sama-Music</h4> -->
						<h4 class="sidebar-title theme-item mt-2 navbrandarea2">Leave-Management</h4>
							<div class="usermenu ">
								<div class="nav-dropdown py-0">
									<a href="#"
										class="nav-item nav-link dropdown-toggle text-secondary py-0"
										id="navbarDropdown3" role="button" data-bs-toggle="dropdown"
										aria-expanded="false"> <i
												class="data-feather" data-feather="settings"></i><span class="theme-item"> Hi!
												<?php
												echo session()->get("name");
												?></span><i class="theme-item" data-feather="chevron-down"></i></a>
									<ul class="dropdown-menu dropdown-menu-end"
										aria-labelledby="navbarDropdown3">
										<?php if(!session()->get('isadminLoggIn')): ?>
										<li><a href="<?php base_url()?> profile" class="dropdown-item mt-2"><i
												class="data-feather" data-feather="user"></i> Profile</a></li>
											<?php endif;?>
										<li><a href="<?php base_url()?> logout"class="dropdown-item mt-2"><i
												class="data-feather" data-feather="log-out"></i> Logout</a></li>
									</ul>
								</div>
							</div>

						
					</div>
				</nav>


				
			

		
						





