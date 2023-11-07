


	<div class="content">
				<div class="container-fluid">
					<div class="row mt-2">
						<div class="col-md-6 float-start">
							<h4 class="m-0 text-dark text-muted">Courses</h4>
						</div>
						<div class="col-md-6">
							<ol class="breadcrumb float-end">
								<li class="breadcrumb-item"><a href="#"> Home</a></li>
								<li class="breadcrumb-item active">Courses</li>
							</ol>
						</div>
					</div>

				<section class="products_section">
	<div class="container">
		<div class="row">
		<div class="col-xl-12 col-md-12 col-12 p-0 m-0"> 
			
		</div>
		<?php foreach($userdata as $key=>$va){ ?>
		<div class="col-xl-3 col-md-6 col-12">
				<div class="products_imgbox"> 
			
					<img src="images/<?php echo $va['course'] ?>.png" class="products_img">
					<h3><?php echo $va['course'] ?> </h3>
					<h4>Price:<?php echo   $va['price'] ?>/Month(Fixed)</h4>
					<p>by:<?php echo $va['teacher'] ?></p>
					<div class="products_textbox">
						
						<div class="products_ulbox">
							<ul>
							
							

								<?php if(session()->get('isLoggInteach') || session()->get('isadminLoggIn')) :?>
									<li>
									<a href="<?php base_url()?>/editcourses/<?php echo $va['co_id'] ?>/<?php echo "update" ?>"><button><svg xmlns="http://www.w3.org/2000/svg" class="products_ulboxicon" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
										<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
									</svg> UPDATE</button></a>
								</li>
								<li>
									<a onclick="return confirm('are u sure want to delete') "href="<?php base_url()?>/editcourses/<?php echo $va['co_id'] ?>/<?php echo "delete" ?>"><button><svg xmlns="http://www.w3.org/2000/svg" class="products_ulboxicon" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
										<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
									</svg> DELETE</button></a>
								</li>
								<?php else:?>
								<li>
									<a href="<?php base_url()?>/enroll/<?php echo $va['co_id'] ?>"><button><svg xmlns="http://www.w3.org/2000/svg" class="products_ulboxicon" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
										<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
									</svg> Enroll</button></a>
								</li>
								<?php endif;?>


							</ul>
						</div>
					</div>
				</div>
		</div>   
						
		<?php } ?>



							</div> 
												</div>
											</section>
										
													
							</div>

				</div>
			</div> 







