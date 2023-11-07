







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
            
             <h3>Edit course</h3>
                        <form class="login_form"   method="post" >

						<label for="tname" >Teacher Name:</label>
							<input type="text"   name="tname" value="<?php echo $usdata['0']['teacher'] ?>" disabled class="login_formele" >
							
                            <label for="email" >Email:</label>
							<input type="email" class="login_formele" name="email" placeholder="email@gmail.com" value="<?php echo $usdata['0']['email'] ?>" disabled  >
							<label for="cname">CourseName:</label>
							<input type="text" class="login_formele" value="<?php echo $usdata['0']['course'] ?>" name="cname" >
							<label for="price">Set Monthly Fee:</label>
							<input class="login_formele" value="<?php echo $usdata['0']['price'] ?>" type="int" name="price" >

                           
                                 <div class="login_btnsc">
                                <button type="submit" class="login_btn login_btnsc">Enroll</button>
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








