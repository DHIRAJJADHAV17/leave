


                    
                <div class="content">
                <?php require_once "../connection.php"; ?>
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">Dashboard</h4>
							</div>
							<div class="col-md-6">
								<ol class="breadcrumb float-end">
									<li class="breadcrumb-item"><a href="#"> Home</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
						</div>


						

						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="blue data-feather-big" stroke-width="3"
													data-feather="thumbs-up"></i>
												<h4 class="mb-0">+<?php 
                               
                               $query="SELECT * from admin";
                               $data_query = mysqli_query($con,$query);
                               $row=mysqli_num_rows($data_query);
                               echo "<h5>".$row."</h5>";
                       
                               ?></h4>
												<p class="text-muted">Total Student</p>
											</div>
										</div>
										<div class="footer">
											<hr />
											<div class="d-flex justify-content-between box-font-small">
												<div class="col-md-6">
													<a class="text-primary float-end"  href="<?php base_url()?> authteacher"><i
														class="blue" data-feather="chevrons-right"></i>See Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="grey data-feather-big" stroke-width="3"
													data-feather="share-2"></i>
												<h4 class="mb-0">+<?php 
                               
                               $query="SELECT * from enroll WHERE status='Due' ";
                               $data_query = mysqli_query($con,$query);
                               $row=mysqli_num_rows($data_query);
                               if($row>0){
                                   echo "<h5>".$row."</h5>";
                               }else{
                                   echo "<h5>"."0"."</h5>";
                               }
                              
                       
                               ?></h4>
												<p class="text-muted">Due Student</p>
											</div>
										</div>
										<div class="footer">
											<hr />
											<div class="d-flex justify-content-between box-font-small">
												<div class="col-md-6">
													<a class="text-primary float-end" href="<?php base_url()?>duedetail"><i
														class="blue" data-feather="chevrons-right"></i>See Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="orange data-feather-big" stroke-width="3"
													data-feather="mail"></i>
												<h4 class="mb-0">+<?php 
                               
                               $query="SELECT * from enroll WHERE status='pending' ";
                               $data_query = mysqli_query($con,$query);
                               $row=mysqli_num_rows($data_query);
                               if($row>0){
                                   echo "<h5>".$row."</h5>";
                               }else{
                                   echo "<h5>"."0"."</h5>";
                               }
                              
                       
                               ?></h4>
												<p class="text-muted">Pending Request</p>
											</div>
										</div>
										<div class="footer">
											<hr />
											<div class="d-flex justify-content-between box-font-small">
												<div class="col-md-6">
													<a class="text-primary float-end" href="<?php base_url()?> request"><i
														class="blue" data-feather="chevrons-right"></i>See Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="olive data-feather-big" stroke-width="3"
													data-feather="dollar-sign"></i>
												<h4 class="mb-0">+<?php 
                               
                               $query="SELECT sum(amount)  from payment";
                               $data_query = mysqli_query($con,$query);
                               $result=mysqli_fetch_array($data_query) ;
                                   $total=$result['sum(amount)'];
                                   echo "<h5>".$total."</h5>";
                       
                               ?></h4>
												<p class="text-muted">Total Income</p>
											</div>
										</div>
										<div class="footer">
											<hr />
											<div class="d-flex justify-content-between box-font-small">
												<div class="col-md-6">
													<a class="text-primary float-end" href="<?php base_url()?> payment"><i
														class="blue" data-feather="chevrons-right"></i>See Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
           
           