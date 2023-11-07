<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>/assests/css/style.css">
</head>
<body>
    <div class="center">
    <?php if(isset($validation)) :?>
    <div class="col-18">
        <div class="alert alert-danger" role="alert">
        <?= $validation ->listErrors() ?>
        </div>
    </div>
    <?php endif;?> 
    <?php if(isset($Flash_message)) :?>
    <div class="col-18">
        <div class="alert alert-success" role="alert">
        Registration done
        </div>
    </div>
    <?php endif;?>
        <h1>REGISTER</h1>
        <form action="/signup" method="POST" autocomplete="off">
        
            <div class="txt_field">
                <input type="text" name="fname" value="<?= set_value('fname')?>"placeholder="first_name">
               
            </div>
            <div class="txt_field">
                <input type="text" name="lname" value="<?= set_value('lname')?>"placeholder="last_name">
               
            </div>
            <div class="txt_field">
                <input type="email"name="email" value="<?= set_value('email')?>"placeholder="email">
               
            </div>
            <div class="txt_field">
                <input type="password"name="password" value="<?= set_value('password')?>"placeholder="password">
               
            </div>
            <div class="txt_field">
                <input type="password"name="confirm_password" value="<?= set_value('confirm_password')?>"placeholder="confirm_password">
               
            </div>
            <div class="txt_field">
                <input type="number"name="phone" value="<?= set_value('phone')?>"placeholder="phone">
                    </div>
            
            
            <input type="submit" value="REGISTER">
            <div class ="signup_link">
                
                    Already a Member?
                    <a href="<?= route_to('login') ?>">Login</a>
                    
            </div>
        </form>
        
    </div>
</body>
</html>
<!-- <?php if( !empty( session()->getFlashdata('fail') ) ) : ?>
                   <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
               <?php endif ?>

               <?php if( !empty( session()->getFlashdata('success') ) ) : ?>
                   <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
               <?php endif ?> -->