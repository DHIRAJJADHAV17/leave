<!-- 
<div class="content">
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">My_learning</h4>
							</div>
							<div class="col-md-6">
								<ol class="breadcrumb float-end">
									<li class="breadcrumb-item"><a href="#"> Home</a></li>
									<li class="breadcrumb-item active">My_learning</li>
								</ol>
							</div>
						</div>


						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
								<div class="table-responsive">
                        <table class="table no-margin table-striped">
                            <thead class="success">
                                <tr>
                                    <th>Course Name</th>
									<th>Fees To Be Paid In Next  </th>
									<th>Action</th>
                                    <th>Teacher</th>
                                    
                                    <th>Course Started From</th>
                                    <th>Renew Date</th>
                                    <th>Transaction Id</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($courses as $key=>$course){ ?>
                                    <tr>
                                    <td class="text-right" data-label="Course Name"><?php echo isset($course['course']) ? $course['course'] : '&nbsp;'; ?></td>
                                        <td data-label="Fees To Be Paid In Next"><?php echo isset($course['duration']) ? $course['duration'] . ' Days' : '&nbsp;'; ?></td>
                                        <td data-label="Action">
                                            <?php if($course['status']=="Due"): ?>
                                                <a style="color:red" href="<?php echo base_url()?>/renew/<?php echo $course['er_id'] ?>" class="text-info">
                                                    <i data-feather="link" class="data-feather blue"></i>Get Renew
                                                </a>
                                            <?php else: ?>
                                                &nbsp;
                                            <?php endif; ?>
                                        </td>
                                        <td data-label="Teacher"><?php echo isset($course['teacher']) ? $course['teacher'] : '&nbsp;'; ?></td>
                                        <td data-label="Course Started From"><?php echo isset($course['startdate']) ? $course['startdate'] : '&nbsp;'; ?></td>
                                        <td data-label="Renew Date"><?php echo isset($course['renewdate']) ? $course['renewdate'] : '&nbsp;'; ?></td>
                                        <td data-label="Transaction Id">
                                        <?php if (!empty($course['trans_id'])): ?>
                                            <?php echo $course['trans_id']; ?>
                                        <?php else: ?>
                                            &nbsp; 
                                        <?php endif; ?>
                                        </td>
                                        <td data-label="Image">
                                        <?php if (!empty($course['img'])): ?>
                                            <a href="<?php echo base_url()?>/image/<?php echo $course['img'] ?>/<?php echo "req" ?>" target="_blank">
                                            <i data-feather="link" class="data-feather blue"></i>image
                                            </a>
                                        <?php else: ?>
                                            &nbsp; 
                                        <?php endif; ?>
                                        </td>
                                        <td data-label="Status"><?php echo isset($course['status']) ? $course['status'] : '&nbsp;'; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
								</div>
							</div>
						</div>

						
					</div>

				</div> -->


                
<div class="content">
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">My leave</h4>
							</div>
							<div class="col-md-6">
								<ol class="breadcrumb float-end">
									<li class="breadcrumb-item"><a href="#"> Home</a></li>
									<li class="breadcrumb-item active">My leave</li>
								</ol>
							</div>
						</div>


						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
								<div class="table-responsive">
                        <table class="table no-margin table-striped">
                            <thead class="success">
                                <tr>
                                    
									<th>Department  </th>
									
                                    <th>No. of days</th>
                                    <th>from-to</th>
                                    <th>Reason</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($courses as $key=>$val){ ?>
                                    <tr>
                                    <td data-label="Department"> <?php echo $val['department'] ?></td>
                                            <td data-label=">No. of days"><?php echo $val['days'] ?></td>
                                            <td data-label=">from-to"><?php echo $val['from'] ?></td>

                                            <td data-label="Reason"><?php echo $val['reason'] ?></td>
                                            <td data-label="Status"><?php echo $val['status'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
								</div>
							</div>
						</div>

						
					</div>

				</div>
