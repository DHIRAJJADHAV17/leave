<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login </title>
    <!--bootstrap links-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&display=swap" rel="stylesheet">
    <!--css link-->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assests/css/style.css">
    <!--owl slider link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
   
</head>
<body>

    <div class="center">
    <?php if(isset($validation)):?>
            <div class="col-18">
                <div class="alert alert-danger" role="danger">
            <?= $validation->listErrors()?>
                </div>
            </div>
            <?php endif;?>
        <h1>LOGIN</h1>
        <form  action="/teachlogin" method="post" autocomplete="off">
        
     <div class="txt_field">
                <input type="email" name="email" placeholder="email">
                  </div>

            <div class="txt_field">
                <input type="password" name="password" placeholder="password">
                 </div>

          
            <input type="submit" value="Login">
            <div class ="signup_link">
                
                    Not a Member?
                    <a href="<?= route_to('teachsignup') ?>">Signup</a>
            </div>
        </form>

    </div>
 

</body>
</html>