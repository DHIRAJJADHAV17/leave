

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Signup page</title>
    <!--bootstrap links-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 
    <!--css link-->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assests/css/style.css">    <!--owl slider link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <style>
        /* Custom CSS for reCAPTCHA */
        .g-recaptcha {
            transform: scale(0.8); /* Adjust the scale factor as needed */
            width: 100%;
            max-width: 304px; /* Adjust the maximum width as needed */
            margin: 20px auto; /* Adjust the margin to your liking */
        }
    </style>
</head>
<body>
<section class="login_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="login_box">
                    <?php if (isset($validation) ): ?>
   
            <div class="col-18">
                <div class="alert alert-danger" role="danger">
            <?= $validation->listErrors()?>
                </div>
            </div>
            <?php endif;?>
            
            <h3>REGISTER</h3>
             
             <form action="/signup" method="POST" autocomplete="off">
        
        <div class="txt_field">
                <input type="text" name="first_name" value="<?= set_value('fname')?>"placeholder="First_name">
               
            </div>
            <div class="txt_field">
                <input type="text" name="last_name" value="<?= set_value('lname')?>"placeholder="Last_name">
               
            </div>
            <div class="txt_field">
                <input type="email"name="email" value="<?= set_value('emaill')?>"placeholder="Email">
               
            </div>
            <div class="txt_field">
                <input type="password"name="password" value="<?= set_value('password')?>"placeholder="Password">
               
            </div>
            <div class="txt_field">
                <input type="password"name="confirm_password" value="<?= set_value('confirm_password')?>"placeholder="Confirm_password">
               
            </div>
            <div class="txt_field">
                <input type="number"name="phone" value="<?= set_value('phone')?>"placeholder="phone">
                    </div>
            
            <div class="g-recaptcha" data-sitekey="6Lff178nAAAAALaYfySNAzkXwF5eBvEN5itInApJ"></div>
               
            
            <div class="login_btnsc">
                                <button type="submit" class="login_btn login_btnsc">Signup</button>
                            </div>
            <div class ="signup_link">
                
                    Already a Member?
                    <a href="/login">Login</a>
                    
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
