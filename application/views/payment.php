

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

            <form action="/payment" method="post">
                            <div class = "row">
                              <div class = "col-md-3">
                                <div class = "form-group">
                                  <label for="" >From Date</label>
                                  <input type="date" name="from_date" value="<?= set_value('from_date')?>"></input>

                                </div>

                              </div>
                              <div class = "col-md-3">
                                <div class = "form-group">
                                  <label for="" >To Date</label>
                                  <input type="date" name="to_date" value="<?= set_value('to_date')?>"></input>

                                 

                                </div>

                              </div>
                              <?php if(session()->get('isadminLoggIn')): ?>
                              <div class = "col-md-3">
                                <div class = "form-group">
                                <label for="" >Enter Name</label>
                                <input name="code" type="text" placeholder="Student Name" value="<?= set_value('name')?>" >
                            
                                </div>

                              </div>
                           
                            
                            <?php endif;?>
                            <div class = "col-md-3">
                                <div class = "form-group">
                                  
                                  <input type="submit" class="btn btn-primary" value="Search"></input>

                                </div>

                              </div>
                            </div>
                            
                            
                            </form>

						<div class="card">
							<div class="content" id="tableContent">
								
								<div class="canvas-wrapper">
									<table class="table no-margin table-striped">
										<thead class="success">
                    <tr>
                                    <th>S.no</th>
                                    <th>Transection Id</th>
                                    <?php if(session()->get('isadminLoggIn')):?>
                                    <th>Student name</th>
                                    <?php endif;?>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Fee Entry Date</th>
                                    <th>Amount</th>
                                    <th>Image</th>
                                  </tr>
										</thead>
										<tbody>
                      <?php $i=1 ?>
                         <?php foreach($pay as $key=>$val){ ?>
     
                                <td><?php echo "$i" ?></td>
                                <td><?php echo $val['trans_id'] ?></td>
                                <?php if(session()->get('isadminLoggIn')):?>
                                  <td><?php echo $val['name'] ?></td>
                                  <?php endif;?>
                                
                                <td><?php echo $val['start_date'] ?></td>
                                <td><?php echo $val['end_date'] ?></td>
                                <td><?php echo $val['created_at'] ?></td>
                                <td><?php echo $val['amount'] ?></td>
                                <td ><a href="<?php base_url()?>/image/<?php echo $val['img']?>/<?php echo "img" ?>" target="_blank"><i data-feather="link" class="data-feather blue"></i>image</a>  </td>

                              </tr>
                       <?php $i+=1 ?>
                      <?php } ?>
                                 
                    </tbody>
									</table>
								</div>
							</div>
						</div>

						
					</div>

				</div>
