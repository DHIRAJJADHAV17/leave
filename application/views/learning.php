
<div class="content">
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


						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
									<table class="table no-margin table-striped">
										<thead class="success">
											<tr>
                        <th>Course Name</th>
                        <th>Teacher</th>
                        <th>Fees To Be Paid In Next  </th>
                        <th>Course Started From</th>
                        <th>Renew Date</th>
                        <th>Status</th>
                        <th>Action</th>
											</tr>
										</thead>
										<tbody>
                    <?php foreach($courses as $key=>$course){ ?>
                      <tr>
     
                            <td class="text-right"><?php echo $course['course'] ?></td>
                            <td><?php echo $course['teacher'] ?></td>
                            <td><?php echo $course['duration'] ?>  Days</td>
                            <td><?php echo $course['startdate'] ?> </td>
                            <td><?php echo $course['renewdate'] ?></td>
                            <td><?php echo $course['status'] ?></td>
                            <?php if($course['status']=="Due"): ?>
                            <td><a style="color:red" href="<?php base_url()?>/renew/<?php echo $course['er_id'] ?>" 
                            class="text-info"><i data-feather="link" class="data-feather blue"></i>Get Renew</a></td>
                          
                            <?php endif; ?>
                            
                      </tr>
                    <?php } ?>
											
											<!-- <tr>
												<td><a href="index.html" class="text-info"><i
														data-feather="link" class="data-feather blue"></i>index.html
												</a></td>
												<td class="text-right">1,100</td>
												<td><div class="progress" style="height: 10px;">
														<div class="progress-bar bg-success" role="progressbar"
															style="width: 100%" aria-valuenow="50"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div></td>
											</tr> -->
										</tbody>
									</table>
								</div>
							</div>
						</div>

						
					</div>

				</div>
