



<div class="content">
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">Request</h4>
							</div>
							<div class="col-md-6">
								<ol class="breadcrumb float-end">
									<li class="breadcrumb-item"><a href="#"> Home</a></li>
									<li class="breadcrumb-item active">Request</li>
								</ol>
							</div>
						</div>

            

						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
									<table class="table no-margin table-striped">
										<thead class="success">
                    <tr>
                    <tr>
                                  
                                  <th>Course Name</th>
                                  <th>Student Name</th>
                                  <th>Student Phone</th>
                                  <th>Mode</th>
                                  <th>Transectin ID</th>
                                  <th>Amount Paid</th>
                                  <th>Course Fee</th>
                                  <th>Not_Paid for last</th>
                                  <th>Course Start Date</th>
                                  <th>Course End Date</th>
                                  <th>Transectin Image</th>
                                  <th>Fee Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
										<tbody>
                       
                    <?php foreach($usdata as $key=>$val){ ?>
                                  <form  action="<?php base_url() ?>/edit/<?php echo $val['er_id'] ?>/<?php echo $val['id'] ?>" method="post">
                                  <tr >
                                 

                                  
                                 
     <td ><?php echo $val['course'] ?></td>
     <td ><?php echo $val['name'] ?></td>
     <td ><?php echo $val['phone'] ?></td>
     <td ><input  style="width: 80px;" type="text" name="mode" value="<?php echo $val['mode'] ?>"  ></td>
     <td ><input style="width: 140px;"  type="text" name="trans" value="<?php echo $val['trans_id'] ?>"  ></td>
     <td ><input  style="width: 60px;" type="int" name="amount" value="<?php echo $val['amount'] ?>" ></td>
     <td ><?php echo $val['price'] ?></td>
     <td ><?php echo $val['duration'] ?> Days</td>
     
     
     <td ><input  style="width: 100px;" type="date" name="startdate" value="<?php echo $val['renewdate']  ?>" ></td>
     <td ><input  style="width: 100px;" type="date" name="validtill" required >  </td>
     <td > <a href="<?php base_url()?>/image/<?php echo $val['img']  ?>/<?php echo "req" ?>" target="_blank"><i data-feather="link" class="data-feather blue"></i>image</a></td>
     <td ><select name="status" value="<?php echo $val['status'] ?>" >
                                
                                <option>Due</option>
                                <option>Active</option></td>
 
     
     <td>
     <a  href="<?php base_url() ?>/edit/<?php echo $val['er_id'] ?>/ <?php echo $val['id'] ?>"><button>Update</button></a>
  <a onclick="return confirm('are u sure want to delete') " href="<?php base_url()?>/delet/<?php echo $val['er_id'] ?>">Delete</a></td>
  
    </tr>
    </form> 
   <?php } ?>
                    
                                 
                    </tbody>
									</table>
								</div>
							</div>
						</div>

						
					</div>

				</div>
