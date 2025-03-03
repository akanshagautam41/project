<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/aboutstyle.css">
    <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>
    
<?php 
include "header-otherpage.php";
?>
    

<div class="about" >
    <div class="about-lft">
        <div class="image">
        <div class="image1">
            <img src="image/food-1.jpg" alt="" id="im1">
        </div>
        <div class="image2">
            <img src="image/food-2.jpg" alt="" id="im2">
        </div>
        <div class="image3">
            <img src="image/food-3.jpg" alt="" id="im3">
        </div>
        <div class="image4">
            <img src="image/food-4.jpg" alt="" id="im4">
        </div>
    </div>
    </div>
    <div class="about-rgt" id="ab">
        <h5>About us</h5>
        <h1>Welcome to <i class="fa-solid fa-utensils"></i> Restaurant</h1>
        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>

        <div class="ex">
         <div class="ex-lf">
            <div class="txt-dsl">
            <div class="ex-txt-lft " id="sec">
                <h1 >15</h1>
            </div>
           <div class="ex-txt-rgt">
            <p >Years of</p>
            <h6 >Experience</h6>
        </div>
    </div>
         </div>
         <div class="ex-rgt">
            <div class="txt-dsl2 ">
            <div class="ex-text-rgt" id="sec1">
                <h1 >50</h1>
            </div>
            <div class="ex-text-lft">
                <p >Popular</p>
                <h6 >Master Chefs</h6></div>
         </div>
        </div>

        </div>

        <div class="btn">
            <a  href="#">Read More</a>
        </div>
    </div>
    
    
</div>




<!-- footer part start -->

<footer>
    <div class="ck">

<nav>
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="menu.html">Menu</a>
    <a href="blog.html">Blog</a>
    <a href="drinks.html">Drink</a>
    <a href="contact.html">Contact Us</a>
    <a href="contact.html">Privacy Policy</a>
    <a href="blog.html">Terms & Condition</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  

function time(){
    var a = 0;
    setInterval(function(){
        a = a + Math.floor(Math.random()*2)
        if(a < 16){
            document.querySelector("#sec h1").innerHTML = a 
        }
    },200)
}
time() 
</script>

<script>
   

function time(){
    var a1 = 0;
    setInterval(function(){
        a1 = a1 + Math.floor(Math.random()*2)
        if(a1 < 51){
            document.querySelector("#sec1 h1").innerHTML = a1 
        }
    },200)
}
time() 
</script>
    
    <script src="javascript.js" ></script>
    
</body>
</html>