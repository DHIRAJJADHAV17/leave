<?php
$data =session()->get();

?>



<div class="content">
	<div class="canvas-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<div class="row g-3">
						<main class="content">
							<div class="row">
								<div class="col-md-4 col-xl-3">
									<div class="card card-rounded mb-3">
										<div class="card-body text-center">
											<img src="assests/img/re.png" alt="Avni - The Earth"
												class="img-fluid rounded-circle mb-2" width="150"
												height="150" />
											
												
												
															
															<div class="title">Profile</div>
													
														<div class="form-container">
															
															<div class="form-inner">
																<form action="#" class="login">
																	
																	<div class="field">
																		<input type="text" Value="Name: <?php echo $data['name']?> " disabled>
																	</div>
																	<div class="field">
																		<input type="text" Value="Phone: <?php echo $data['phone']?> " disabled>
																	</div>
																	<div class="field">
																		<input type="text" Value="Email: <?php echo $data['email']?> " disabled>
																	</div>
																	</form>	
															</div>
														</div>
													
																		</div>

											
										</div>

									</div>

									

								</div>

								
							</div>

						</main>

					</div>
				</div>
			</div>
		</div>


	</div>
</div>
		