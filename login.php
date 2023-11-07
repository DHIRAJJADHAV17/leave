<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>/assests/css/style.css">
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
        <form action="/login" method="post" autocomplete="off">
        
     <div class="txt_field">
                <input type="email" name="email" placeholder="email">
                  </div>

            <div class="txt_field">
                <input type="password" name="password" placeholder="password">
                 </div>

          
            <input type="submit" value="Login">
            <div class ="signup_link">
                
                    Not a Member?
                    <a href="<?= route_to('signup') ?>">Signup</a>
            </div>
        </form>

    </div>
</body>
</html>