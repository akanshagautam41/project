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

<!-- contact form start -->
<div class="form ">
    <div class="container border border-dark-subtle w-50 my-5 " >
        <div class="row p-5 ">
            <div class="col-12  ">
            <form method="post" enctype="multipart/form-data" >

<?php 
    
    ?>
 <div class="form-group mb-4">
    <label class="text-black mb-4" for="email">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" name="email" value="<?php if(isset($_COOKIE['username'])){ echo $_COOKIE['username'];}?>">
  </div>

  <div class="form-group mb-5">
    <label class="text-black mb-4" for="message">Password</label>
    <input type="password" class="form-control" name="password" id="pass" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];}?>">
  </div>

  <?php 
  
  
  ?>
  <div class="form-group mb-4">
    
    <input type="checkbox" class="" name="remember" id="passwordchck" value="">
    <label class="text-black" for="xyz">Remember</label>
  </div>

  <button type="submit" name="create" class="btn btn-primary-hover-outline">Login</button>
  <a href="forgot_pass">Forgot password?</a>
</form>
            </div>
        </div>
    </div>
</div>


<!-- contact form end -->

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