<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>
<?php 

include "header-otherpage.php"
?>


<div class="contact">
    <div class="contact-text">
        <h6>Contact Us</h6>
        <h1>Contact For Any Query</h1>
    </div>
    <div class="qery">
        <div class="booking">
            <h5>Booking</h5>
            <p><i class="fa-regular fa-solid fa-envelope-open"></i> book@example.com</p>
        </div>
        <div class="gernal">
            <h5>General</h5>
            <p><i class="fa-regular fa-solid fa-envelope-open"></i> info@example.com</p>
        </div>
        <div class="technical">
            <h5>Technical</h5>
            <p><i class="fa-regular fa-solid fa-envelope-open"></i> tech@example.com</p>
        </div>
    </div>
    <div class="contact-form">
        <div class="ifrme-lft">
            <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
        </div>
        <div class="formdt">
            <div class="formtxt">
                <div class="form-lgt">
                    <input type="text" placeholder="Your Name">
                </div>
                <div class="form-rgt">
                    <input type="text" placeholder="Your Email">
                </div>
            </div>
            <div class="formtxt2">
                <input type="text" placeholder=" Subject">
            </div>
            <div class="formtxt3">
                <textarea name="Message" id="" cols="0" rows="0" placeholder="Message"></textarea>
            </div>
            <div class="formtxt4">
                <button type="submit">Send Message</button>
               
            </div>
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
    <a href="contact.php">Contact Us</a>
    <a href="blog.html">Privacy Policy</a>
    <a href="index.html">Terms & Condition</a>
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