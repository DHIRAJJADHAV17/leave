


<div class="content">
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">Report</h4>
							</div>
							<div class="col-md-6">
								<ol class="breadcrumb float-end">
									<li class="breadcrumb-item"><a href="#"> Home</a></li>
									<li class="breadcrumb-item active">Report</li>
								</ol>
							</div>
						</div>

           

						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
									<table class="table no-margin table-striped">
										<thead class="success">
                    <tr>
                    <th> Name</th>
                    <th>Phone</th>
                                  <th>Course </th>
                                    <th>Teacher</th>
                                    <th>Fees To Be Paid In Next  </th>
                                    <th>Course Enrolled Date </th>
                                    <th>Course Started From</th>
                                    <th>Renew Date</th>
                                    <th>Status</th>
                                    
                                  
                                  </tr>
										</thead>
										<tbody>
                    <?php foreach($userdata as $key=>$va){ ?>
                      <td><?php echo $va['name'] ?></td>
                      <td><?php echo $va['phone'] ?></td>
     <td><?php echo $va['course'] ?></td>
     <td><?php echo $va['teacher'] ?></td>
     <td><?php echo $va['duration'] ?>  Days</td>
     <td><?php echo $va['created_a'] ?></td>
     <td><?php echo $va['startdate'] ?> </td>
     <td><?php echo $va['renewdate'] ?></td>
     <td><?php echo $va['status'] ?></td>

   </tr>
   <?php } ?>
                                 
                    </tbody>
									</table>
								</div>
							</div>
						</div>

						
					</div>

				</div>

