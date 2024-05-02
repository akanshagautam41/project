<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/loginregister.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php 
include "header-otherpage.php";
?>

<!-- Header part end -->
<!-- resgister form start -->

<div class="form">
    <div class="container border border-dark-subtle w-50 my-5">
        <div class="row  p-5">
            <div class="col-12">
                
              <form method="post" enctype="multipart/form-data">
                
                
                    <div class="form-group mb-4">
                      <label class="text-black mb-2" for="fname">First name</label>
                      <input type="text" class="form-control" name="firstname" id="fname">
                    </div>
                  
                 
                    <div class="form-group mb-4">
                      <label class="text-black mb-2" for="lname">Last name</label>
                      <input type="text" class="form-control" name="lastname" id="lname">
                    </div>
                 
                <div class="form-group mb-4">
                  <label class="text-black mb-2" for="email">Email address</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group mb-5">
                  <label class="text-black mb-2" for="message">Password</label>
				  <input type="password" class="form-control" name="password" id="pass">
                </div>

                <button type="submit" class="btn btn-primary btn-outline-success text-white" name="create" >Register</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- register form end -->
<!-- footer part start -->

<footer>
    <div class="ck">

<nav>
    <a href="">Home</a>
    <a href="">About</a>
    <a href="">Menu</a>
    <a href="">Blog</a>
    <a href="">Drink</a>
    <a href="">Contact Us</a>
    <a href="">Privacy Policy</a>
    <a href="">Terms & Condition</a>
</nav>
    <div class="social-icon">
        Follow Us:
        <a href="">
        <i class="fa-brands fa-square-facebook fa-2xl" style="color: #6a6d73;"></i></a>
       <a href=""> <i class="fa-brands fa-twitter fa-2xl" style="color: #6a6d73;"></i></a>
    </div>
</div>

    <div class="tt">© copyright 2011 ©. All rights reserved</div>

    <div class="frm">
        <h2>Contact Us</h2>
        <form action="">
            <input type="text" placeholder="Enter Your Email">
            <button>SignUp</button>
        </form>
    </div>

    <div class="arrow">
        <a href="" onclick="btn()"><i class="fa-solid fa-arrow-up"></i></a>
           </div>

</footer>
    
    <script src="javascript.js" ></script>
    
</body>
</html>