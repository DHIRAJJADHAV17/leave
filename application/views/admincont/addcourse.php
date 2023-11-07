<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> edit page</title>
    <!--bootstrap links-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&display=swap" rel="stylesheet">
    <!--css link-->
    <link rel="stylesheet" href="<?php echo base_url() ?>/admin/css/admin.css">
    <!--owl slider link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
   
</head>
<body>
<!--   -->
                 
    <section class="login_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="login_box">
                    <?php if(isset($validation)):?>
            <div class="col-18">
            <div class="alert alert-danger" role="alert">
                        Get Enroll
            
                </div>
            </div>
            <?php endif;?>
            
             <h3>ADD Course</h3>
                        <form class="login_form"   method="post" >

                            <label for="course" >Course Name</label>
                            <input type="text" name="cname" id="course"  class="login_formele" >

							<label for="" >Set Monthly Fee:</label>
                            <input  type="int" name="price"  class="login_formele" >
							

							<label for="">Teacher Name:</label>
			<?php if(session()->get('isLoggInteach')) :
				$data =session()->get();?>
				<input type="text" value="<?php echo $data['name'] ?> " name="tname" class="login_formele" >
	
			<?php endif;?>
			<?php if(session()->get('isadminLoggIn')) :
				require_once "../connection.php";
				$query="SELECT name from admi  ";
				$data_query = mysqli_query($con,$query);
				
				?>
				
				<select name="tname" class="login_formele" >
				<?php foreach($data_query as $key=>$val){?>
				<option ><?php echo $val['name'] ?></option>
				
				<?php }?>
			<?php endif;?>
			
		
                              

                           
             <div class="login_btnsc">
                                <input type="submit" class="login_btn login_btnsc">
              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!--bootstrap links-->      
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--owl slider link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>
</html>








