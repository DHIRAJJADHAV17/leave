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
                        Renew
            
                </div>
            </div>
            <?php endif;?>
             <h3>Renew course</h3>
                        <form class="login_form"   method="post"  enctype="multipart/form-data">

                            <label for="course" >Course Name</label>
                            <input type="int" id="course" name="Course" value="<?php echo $usda['0']['course'] ?>" class="login_formele" required>
                            <label for="teacher" >Teacher Name</label>
                            <input type="int"  name="teacher" id="teacher" value="<?php echo $usda['0']['teacher'] ?>" class="login_formele" required>
                            <label for="tran" >Transection id</label>
                            <input type="text" name="tran" id="tran"  class="login_formele" required>
                            <label for="" >Mode</label>
                            <select name="mode" id="mode" class="login_formele" required>
                                <option>G-pay</option>
                                <option>PhonePay</option>
                                <option>Patym</option> 
                                <option>Cash</option>
                                <option>Other</option>
                                </select>
                                <label for="Course" >Amount paid</label>
                            <input type="int" name="amount" id="amount" class="login_formele" required>
                            <label for="Course" >Upload Transection Image</label>
                            <input type="file" name="image"  required>
                                 <div class="login_btnsc">
                                <button type="submit" class="login_btn login_btnsc">Renew</button>
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