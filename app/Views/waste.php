<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  page</title>
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
                <div class="alert alert-danger" role="danger">
            <?= $validation->listErrors()?>
                </div>
            </div>
            <?php endif;?>
            
             <h3>Enroll Your Waste</h3>
             
                        <form class="login_form"   method="post" enctype="multipart/form-data">

                            
                            <label for="department" >Department</label>
                            <input type="text" id="department" name="department"  class="login_formele" >
                           

                            <label for="days" >No. of days</label>
                            <input type="text" id="days"  name="days" class="login_formele"  >
                         

                            <label for="from" >from-to</label>
                            <input type="text" id="from" name="from"   class="login_formele" >
                            

                            <label for="reason" >Reason</label>
                            <input type="text-area" id="reason" name="reason" class="login_formele" >
                            
                                 <div class="login_btnsc">
                                <button type="submit" class="login_btn login_btnsc">Submit</button>
                           
                           
                                <button type="button" class="login_btnn login_btnscc" data-redirect-url="<?php echo base_url(); ?>dashboard">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <script>
  // Add an event listener to all buttons with the class "login_btnscc"
  var buttons = document.querySelectorAll(".login_btnscc");

  buttons.forEach(function(button) {
    button.addEventListener("click", function() {
      // Get the redirect URL from the data attribute
      var redirectUrl = button.getAttribute("data-redirect-url");
      
      // Redirect to the URL
      window.location.href = redirectUrl;
    });
  });
</script>

    <!--bootstrap links-->      
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--owl slider link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</body>
</html>








