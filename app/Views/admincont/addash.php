


                    
                <div class="content">
                <!-- -->
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


						

						<!-- <div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="blue data-feather-big" stroke-width="3"
													data-feather="thumbs-up"></i>
												<h4 class="mb-0">+<?php 
                               
                               echo "<h5>".$row."</h5>";
                       
                               ?></h4>
												<p class="text-muted">Total Student</p>
											</div>
										</div>
										<div class="footer">
											<hr />
											<div class="d-flex justify-content-between box-font-small">
												<div class="col-md-6">
													<a class="text-primary float-end"  href="<?php base_url()?> authstudent"><i
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
                               
                              
                               if($row1>0){
                                   echo "<h5>".$row1."</h5>";
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
                               
                              
                               if($row2>0){
                                   echo "<h5>".$row2."</h5>";
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
						</div> -->


						<div class="content" id="tableContent">
                        <div class="canvas-wrapper">
                            <div class="row justify-content-center"> <!-- Center the inner card -->
                                <div class="col-md-10"> <!-- Adjusted column size to make the inner card smaller -->
                                    <div class="card">
                                        <div class="content">
                                            <div class="canvas-wrapper">
                                                <div class="anyotherclass"
                                                    data-anijs="if: scroll, on: window, do: rubberBand animated, before: scrollReveal">
                                                    <div class="caption">
                                                        <div class="caption-content">
                                                            <i class="fa fa-search-plus fa-3x"></i>
                                                        </div>
                                                    </div>
                                                    <div  class="card  " >
													<?php if(isset($validation)):?>
																
														<div class="alert alert-danger" role="danger">
													<?= $validation->listErrors()?>
														</div>
													</div>
													<?php endif;?>
													<form method="post" action="/admindashboard" >
														<div class="card-header text-center">
															<h3>Notice</h3>
														</div>
														<div class="card-body">
															<div class="form-group text-center">
																<label for="title">Title</label>
																<input type="text" id="title" name="title" class="form-control"  required>
															</div>
															<div class="form-group text-center">
																<label for="notice">Description</label>
																<textarea id="notice" name="notice"  class="form-control" placeholder="Enter description" required>
																</textarea>
																
															</div>
															<br>
															<div class="text-center">
																<button type="submit" class="btn btn-primary">Submit</button>
															</div>
														</div>
													</form>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ui hidden divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

															
														
													

						
				    </div>

	</div>
















					</div>

				</div>
           
           