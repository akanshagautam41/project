<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="banner">
            <div class="overlay"></div>
            <video muted autoplay >
                <source src="/image/banner.mp4" type="video/mp4">
            </video>
            <div class="data">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas doloremque a excepturi, odio minus sit in quibusdam adipisci inventore, repellat voluptates fuga quasi! Iure, vel.</p>
               <a href="reservation.html">Book Table</a>
            </div>
        </div>

        <header>
            
            <div class="logo" id="log">
                <img src="https://cdn.iconscout.com/icon/free/png-512/free-burger-3069113-2550746.png?f=webp&w=256" height="40" alt="">
                <span id="bar" onclick="navbar()"><i class="fa-solid fa-bars"></i>  </span>
            </div>
    
            
            <nav id="menu" class="navbar">
                <a href="menu.php" class="clr">Our Food</a>
            <a href="drinks.php" class="clr">Our Drink</a>
            <a href="reservation.php" class="clr">Reservation</a>
            <a href="contact.php" class="clr">Contact Us</a>
            <a href="register.php" class="clr">Register</a>
            <?php
            if (!isset( $_SESSION['uid'])) { ?>
        <a href="login.php" class="clr">Login</a>
        <?php } else {
            ?>
             <a href="login.php" class="clr">Login</a>
             <a href="login.php" class="clr">Welcome <?php echo $_SESSION['fname']. " " .$_SESSION['lname']?></a>

             <?php } ?>
            </nav>
           
    </header>
</body>
</html>