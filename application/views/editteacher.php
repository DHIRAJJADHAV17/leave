


<div class="content">
					<div class="container-fluid">
						<div class="row mt-2">
							<div class="col-md-6 float-start">
								<h4 class="m-0 text-dark text-muted">Authenticate Teacher</h4>
							</div>
							<div class="col-md-6">
								<ol class="breadcrumb float-end">
									<li class="breadcrumb-item"><a href="#"> Home</a></li>
									<li class="breadcrumb-item active">Authenticate Teacher</li>
								</ol>
							</div>
						</div>


						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
									<table class="table no-margin table-striped">
										<thead class="success">
                    <tr>
                                  
                                    
                                  <th>Teacher FullName</th>
                                  <th>Teacher Phone </th>
                                  <th>Teacher email</th>
                                  
                                  <th>Action</th>
                                </tr>
										</thead>
										<tbody>
                                
                                <?php foreach($usdata as $key=>$val){ ?>
                                  <form  action="<?php base_url() ?>/editmember/<?php echo $val['id'] ?>/<?php echo "updateteach" ?>" method="post">
                                  <tr >
                                 

                                  
                                
     
     
       <td ><input   type="text" name="name" value="<?php echo $val['name']  ?>" ></td>
     <td ><input   type="text" name="phone" value="<?php echo $val['phone'] ?>" ></td>
     <td ><input   type="text" name="email" value="<?php echo $val['email'] ?>" ></td>

    
     <td>
     <a  href="<?php base_url() ?>/editmember/<?php echo $val['id'] ?>/ <?php echo "updateteach" ?>"><button>Update</button></a>
  <a onclick="return confirm('are u sure want to delete') " href="<?php base_url()?>/editmember/<?php echo $val['id'] ?>/<?php echo "deleteteach" ?>">Delete</a></td>
  
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
