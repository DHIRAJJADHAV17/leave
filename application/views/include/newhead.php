<!doctype html>

<html lang="en" class="h-100">

<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Ums-Music</title>
<link href="assests/css/bootstrap.css" rel="stylesheet">
<link href="assests/css/main.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
	<div id="page">

		<div class="wrapper">

			<nav id="sidebar" class="active">

				<div class="sidebar-header text-center">
					<h4 class="sidebar-title theme-item">UMS-Infra</h4>
				</div>

				<ul class="list-unstyled components text-secondary">
				<div class="sidebar-header text-center">
				<i class="data-feather theme-item " data-feather="home"></i> <span
										class="theme-item"> <h3>Dashboard</h3></span>
				</div>
				
						
						
					
					<?php if(session()->get('isadminLoggIn')): ?>
							<li><a href="<?php base_url()?> addash"><i class="data-feather theme-item " data-feather="home"></i><span 
											class="theme-item">Home</span></a></li>
							<li><a href="<?php base_url()?> addcourse"><i class="data-feather theme-item"
											data-feather="file-text"></i> <span 
											class="theme-item">Add Course</span></a></li>
							<li><a href="<?php base_url()?> courses"><i
											class="data-feather theme-item" data-feather="grid"></i> <span
											class="theme-item"> Courses</span></a></li>
				

								<li><a  href="<?php base_url()?> request"><i
							class="data-feather theme-item" data-feather="pie-chart"></i> <span
							class="theme-item"> Request's</span></a></li>
								


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
					</li>

							<?php endif;?>
							    
							<?php if(session()->get('isLoggedIn')): ?>
								<li><a href="<?php base_url()?> My_learning"><i
										class="data-feather theme-item" data-feather="pie-chart"></i> <span
										class="theme-item"> My_learning</span></a></li>
								<li><a href="<?php base_url()?> courses"><i
										class="data-feather theme-item" data-feather="grid"></i> <span
										class="theme-item"> Courses</span></a></li>
								<li><a href="<?php base_url()?> payment"><i class="data-feather theme-item"
											data-feather="file-text"></i> <span 
											class="theme-item"> Payment History</span></a></li>
								
                            
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
						
						<h4 class="sidebar-title theme-item mt-2 navbrandarea2">UMS-Infra</h4>
						<button class="navbar-toggler py-0" type="button"
							data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
							aria-controls="navbarsExample04" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"><i data-feather="menu"></i></span>
						</button>

						<div class="collapse navbar-collapse mx-1" id="navbarsExample04">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">

							</ul>
							


							<div class="usermenu">
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
										<li><a href="<?php base_url()?> profile" class="dropdown-item mt-2"><i
												class="data-feather" data-feather="user"></i> Profile</a></li>

										<li><a href="<?php base_url()?> logout"class="dropdown-item mt-2"><i
												class="data-feather" data-feather="log-out"></i> Logout</a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</nav>


				<div class="settings">
					<div class="modal fade" id="settingsModal"
						aria-labelledby="settingsModalTitle" aria-hidden="true"
						tabindex="-1">
						<!-- 				 data-bs-backdrop="static" data-bs-keyboard="false" -->
						<div class="modal-dialog modal-dialog-settings">
							<div class="modal-content">
								<div class="modal-header text-center">
									<h5 class="modal-title" id="exampleModalLabel">Settings</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">

									<section id="logincontent" class="shiftdown">

										<div class="row g-3 mb-3 mt-3">

											<div class="col-md-6">
												<h6 class="text-muted">Select Color</h6>
												<span onclick="changeColor('0')"
													class="btn btn-sm btn-primary rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('1')"
													class="btn btn-sm btn-success rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('2')"
													class="btn btn-sm btn-danger rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('3')"
													class="btn btn-sm btn-warning rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('4')"
													class="btn btn-sm btn-secondary rounded-circle"><span
													class="me-2"></span></span>
												<div class="d-flex justify-content-between">
													<button onclick="removeColorCookie()">Reset to
														Default</button>
												</div>
											</div>
											<div class="col-md-6">
												<h6 class="text-muted">Preferences</h6>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckDefault"> <label
														class="form-check-label" for="flexSwitchCheckDefault">Switch
														option 1</label>
												</div>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckChecked" checked> <label
														class="form-check-label" for="flexSwitchCheckChecked">Switch
														option 2</label>
												</div>
											</div>
										</div>
										<div class="row g-3 mb-3 mt-3">
											<div class="col-md-6">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value=""
														id="defaultCheck1" checked> <label
														class="form-check-label" for="defaultCheck1">
														Checkbox 1 </label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value=""
														id="defaultCheck2"> <label
														class="form-check-label" for="defaultCheck2">
														Checkbox 2</label>
												</div>
											</div>
											<div class="col-md-6">
												<h6 class="text-muted">View Size</h6>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="flexRadioDefault" id="radioCompactView"> <label
														class="form-check-label" for="radioCompactView">
														Compact</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="flexRadioDefault" id="radioFullView"> <label
														class="form-check-label" for="radioFullView">
														Full-screen </label>
												</div>
												<div class="d-flex justify-content-between">
													<button onclick="removeViewSizeCookie()">Reset to
														Default</button>
												</div>

											</div>
										</div>
										<hr />
										<button class="btn btn-sm btn-danger" data-bs-dismiss="modal"
											type="button">
											<i data-feather="check-circle" class="mr-1"></i> Ok
										</button>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="sidebarOverlayNav" class="screen-overlay float-end">
					<a href="javascript:void(0)" class="closebtn"
						onclick="closeOverlayNav()">&times;</a>
					<div class="screen-overlay-content text-secondary">
						<a href="#" class="active">About</a> <a href="#">Services</a> <a
							href="#">Clients</a> <a href="#">Contact</a>
					</div>
				</div>

		
						





