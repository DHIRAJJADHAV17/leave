


<div class="content">
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">Authenticate Students</h4>
							</div>
							<div class="col-md-6">
								<ol class="breadcrumb float-end">
									<li class="breadcrumb-item"><a href="#"> Home</a></li>
									<li class="breadcrumb-item active">Authenticate Students</li>
								</ol>
							</div>
						</div>


						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
									<table class="table no-margin table-striped">
										<thead class="success">
                    <tr>  
                                  <th>Student Name</th>
                                  <th>Student Phone</th>
                                  <th>Student Email</th>
                                  <th>Active</th>
                                  <th>Action</th>
                                </tr>
										</thead>
										<tbody>
                                
                                <?php foreach($usdata as $key=>$val){ ?>
                                  <form  action="<?php base_url() ?>/editmember/<?php echo $val['id'] ?>/<?php echo "updatemem" ?>" method="post">
                                  <tr >
     <td ><input   type="text" name="name" value="<?php echo $val['name']  ?>" ></td>
     <td ><input   type="text" name="phone" value="<?php echo $val['phone'] ?>" ></td>
     <td ><input   type="text" name="email" value="<?php echo $val['email'] ?>" ></td>
     <td ><select name="active" >
     <option ><?php echo $val['active'] ?></option>
                                <option >ACTIVE</option>
                                <option >DEACTIVE</option></td>

     <td>
     <a  href="<?php base_url() ?>/editmember/<?php echo $val['id'] ?>/<?php echo "updatemem" ?>"><button>Update</button></a>
  <a onclick="return confirm('are u sure want to delete') " href="<?php base_url()?>/editmember/<?php echo $val['id'] ?>/<?php echo "deletemem" ?>">Delete</a></td>
  
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









				