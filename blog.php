<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>
<?php 
include "header-otherpage.php";
?>
    

<div class="blog">
    <div class="blog-1">
    <div class="blog-image">
        <img src="image/blogimage1.avif" alt="">
    </div>
    <h2>Cozy restaurant</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="tt">...</span><span id="wd">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

    <button onclick="bl()" id="rd">Read more</button>
</div>

<div class="blog-2">
    <div class="blog-image">
        <img src="image/blogimage2.avif" alt="">
    </div>
    <h2>Cozy restaurant</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="fun">...</span><span id="tex">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

    <button onclick="bng()" id="bnt">Read more</button>
</div>

<div class="blog-3">
    <div class="blog-image">
        <img src="image/blogimage4.avif" alt="">
    </div>
    <h2>Cozy restaurant</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="tgt">...</span><span id="dol">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

    <button onclick="blog()" id="read">Read more</button> 
</div>
    
<div class="blog-4">
    <div class="blog-image">
        <img src="image/blogimage4.avif" alt="">
    </div>
    <h2>Cozy restaurant</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>

<button onclick="myFunction()" id="myBtn">Read more</button> 
</div>
<div class="blog-5">
    <div class="blog-image">
        <img src="image/blogimage5.avif" alt="">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="dot">...</span><span id="mo">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
     <button onclick="read()" id="Btn">Read More</button>
</div>
<div class="blog-6">
    <div class="blog-image">
        <img src="image/blogimage6.avif" alt="">
    </div>
    <h2>Cozy restaurant</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas vitae scel<span id="wrd">...</span><span id="mor">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
     <button onclick="page()" id="Bt">Read More</button>
</div>
    
</div>





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