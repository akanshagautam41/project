<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/reservation.css">
    <link rel="stylesheet" href="css/header-footer.css">
</head>
<body>
<?php 
include "header-otherpage.php";
?>

<div class="reservation">
    <div class="reserv-lft">
        <video muted autoplay controls>
            <source src="./image/banner.mp4" type="video/mp4" >
        </video>
    </div>
    <div class="reserv-rgt">
        <h6>Reservation</h6>
        <h2>Book A table Online</h2>
        <div class="frm">
            <div class="frm-tab">
                <div class="frm-tab-lgt">
<input type="text" placeholder="Enter Your Name">
                </div>
                <div class="frm-tab-rgt">
<input type="text" placeholder="Enter Your Email">
                </div>
            </div>
            <div class="frm-tab2">
                <div class="frm-tab2-lgt">
<input type="datetime" placeholder="Date & Time">
                </div>
                
                <div class="frm-tab2-rgt">
                    <label for="">no of People</label>
                    <select name=""  id="select">
                        <option value="">People 1</option>
                        <option value="">People 2</option>
                        <option value="">People 3</option>
                      </select>
                      
                    </div>
                </div>
                <div class="frm-tab3">
                    <textarea name="Special Request" id="" cols="0" rows="0" placeholder="Special Request"></textarea>
                </div>
                <div class="frm-tab4">
                    <button>Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- food item list end first -->




<footer>
    <div class="ck">

<nav>
    <a href="index.html">Home</a>
    <a href="about.html">About</a>
    <a href="menu.html">Menu</a>
    <a href="blog.php">Blog</a>
    <a href="drinks.html">Drink</a>
    <a href="contact.html">Contact Us</a>
    <a href="contact.html">Privacy Policy</a>
    <a href="blog.php">Terms & Condition</a>
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
    
        

<!-- Footer part end -->

<!-- javascript file attached -->
<script src="javascript.js" ></script>
    
</body>
</html>