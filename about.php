<?php @session_start();
include("Includes/db.php");
?>
<!DOCTYPE html5>
<html>
    <head>
        <title>Big Watch Mart</title>
        <!--<link rel="stylesheet" type="text/css" href="styles.css">-->
        <style>
          *{
    margin: 0%;
    padding: 0%;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
/*}
 .row {
    display: inline-block;
}
 .na .row ul li a{
    text-decoration: none;
    color: #ffffff;
    padding: 20px 20px; /*button ka size*/
   /* border: 1px solid transparent;
    transition: 0.6s ease;
}
 .na .row ul li a:hover{
    background-color: white;
    color: black;
}*/
body {
   /* background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ,url("../images/background.jpeg");
    */
    background-color: white;
    height: 100%;
    width: 100%;
    background-size: cover;
    background-position: center;
}
.abc{
    position: fixed;
    margin-bottom: 10%;
      top: 0;
      width: 100%;
      z-index: 100;
      background-color: #333;
    }
     .loog{
     color:white;
      float:right;
      padding-right:2%;
    }
 .abc ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
      
    }
    
    .abc li {
      float: right;
    }
    
    .abc li a, .dropbtn {
      display: inline-block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    .abc li a:hover, .dropdown:hover .dropbtn {
      background-color: red;
    }
    
    .abc li.dropdown {
      display: inline-block;
    }
    
    .abc .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .abc .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .abc .dropdown-content a:hover {background-color: #f1f1f1;}
    
    .abc .dropdown:hover .dropdown-content {
      display: block;
    }
.logo img{
    float: left;
    width: 150px;
    height: auto;
    
}
.cart{
    height: auto;
}
.heading{
    padding-top: 2%;
    padding-left: 10px;
    width: 50%;
    /*margin-right: 40%;
    border-top:3px solid black ;*/
   margin-top: 7%;
     display:inline-block;
}
.heading h1{
    
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: dimgray;
  text-shadow:2px 2px chartreuse;

}
 .heading p {
    color: darkslategray;
    text-align: center;
}
.ustad{
    
    float: right;
    width:48.7%;
    height:80%; 
    /*border: 3px solid black;*/
    margin-top: 8%; 

}
.na{
    width: 100%;
    height: 100px;
    background-color: rgba(0,0,0,0.7);
}
.menu{
    line-height: 45px;
    font-weight: 700;
    text-transform: uppercase;
}

.nav ul{
    padding: o;
    list-style-type: none;
    margin: 0;
}
.na .menu .row{
    display: inline-block;
    position: relative;
}
.na .menu .row a{
    cursor: pointer;
    padding: 12px;
    color:#ffffff;
    display: block;
    text-decoration: none;
}
/*.list:hover{
    background-color: white;
    color: black;
    
    transition: 0.6s ease;
}*/
.na .mov{  /*movement of nav buttons and search bar, must include add to CART opt*/
    float: right;
    padding-right: 1%;
}
.submenu{
    display: none;
    position: absolute;
    width: 220px;
    text-transform: none;
    
}
.list{
    list-style-type: none;
    border-left: 4px solid transparent;
}
.row:hover .submenu{
    display: block;
    z-index: 100;
}
.list:hover{
    background-color: rgba(0,0,0,0.7);
    border-left: 4px solid rgba(450,0,60,0.8)
}
.row:hover{
    background-color:grey;
}
.jane{
    padding-top: 1%;
    padding-left: 10px;
    width: 50%;
    /*border-top:3px solid black ;*/
    margin-top: 1%;
}
.jane h2{
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: dimgray;
  text-shadow:2px 2px chartreuse;

}
.jane p {
    color: darkslategray;
    text-align: center;

}
.lime{
    /*display: inline-block;*/
    width: 38%;
    float: right;
    margin-top: 2%;
    
    
}
.lime h3{
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: dimgray;
  text-shadow:2px 2px chartreuse;

}
.lime p{
    color: darkslategray;
    text-align: center;

}
.fourth{
    display: inline-block;
    width: 38%;
    float: right;
    margin-top: -380px;
   
}
.fourth h4{
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: dimgray;
  text-shadow:2px 2px chartreuse;

}
.fourth p{
    color: darkslategray;
    text-align: center;

}
.check{
     box-sizing: border-box;
     margin-top: 1%;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 96%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.watch{
    margin-top: 1%;
}
.footer {
    /*position: fixed;*/
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #717171;
    color: white;
    
 }
ul{
    list-style: none;
}
 .Col1{
     margin-top: 2%;
     margin-bottom: 2%;
     text-align: center;
     display: inline-block;
     width: 30%;
 }
 .Col2{
    margin-left: 5%;
    margin-top: 2%;
    margin-bottom: 2%;
     text-align: center;
    width: 30%;
    display: inline-block;
}
.Col3{ 
    margin-top: -5%;
    margin-left: 2%;
    text-align: center;
     display: inline-block;
     width: 30%;
}
.Socials{
    width: 50%;
    margin: auto;
    padding-left: 40%;
}
.Socials img{
    height: 5%;
    width: 5%;
}
.copy{
    margin: auto;
    padding-left: 20%;
    width: 49%;
}
.waat{
    text-align: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: dimgray;
  text-shadow:2px 2px chartreuse;
}



</style>
    </head>
    <body>
    

       <!-- <div class="main"> 
            <nav class="na">
            <div class="mov">
            <ul class="menu">
            <li class="row"><a href="home.html">Home</a></li>
            <li class="row"><a href="#">Brands</a>
            <ul class="submenu">
                <li class="list"><a href="#">Rolex</a></li>
                <li class="list"><a href="#">Audemars Piguet</a></li>
                <!<li class="list"><a href="#">Richard Mille</a></li>
                <li class="list"><a href="#">Hublot</a></li>
                <li class="list"><a href="#">Rado</a></li>
                <li class="list"><a href="#">Tissot</a></li>
                <li class="list"><a href="#">Omega</a></li>
                <li class="list"><a href="#">More + </a></li>
            </ul>
            </li>
            <li class="row"><a href="#">New Arrivals</a></li>
            <li class="row"><a href="index.html">About us</a></li>
            <li class="row"><form>
                <input type="search" name="search" />
                <input type="submit" value="Search" />
                </form>
            </li>
            <li class="row"><a href="#"><img src="images/cart4.png" alt="cart"></a></li>
            </ul>
            </div>
            </nav>
</div>-->
<div class="abc">
  <div class="loog">
<?php
          if(!isset($_SESSION['cust_email'])){
            echo"Welcome Guest";
          }
        else{
          $s=$_SESSION['cust_email'];
          $q="select * from customers where cust_email='$s'";
          $runq=mysqli_query($con,$q);
          $fetch=mysqli_fetch_array($runq);
          $cust_name=$fetch['cust_name'];
          echo "WELCOME  ".$cust_name;
        }

?>

<a href="index.php?logout">LOGOUT</a>
</div>
<?php
echo"<br/>";
if(isset($_GET['logout'])){
  session_destroy();
  echo"<script>alert('Please Login First!')</script>";
}
?>
    <ul>
            <div class="logo"><a href="index.php"><img src="images/logoburned.png" alt="company logo"></a></div>
            <li><a href="cart.php"><img src="images/cart2.png" alt="cart" width="28" height="28"></a></li>
            <li><a href="#home"><form>
                    <input type="search" name="search" />
                    <input type="submit" value="Search" />
                    </form></a></li>
      <li><a href="about.php">About us</a></li>
      <li><a href="news.php">News</a></li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Brands</a>
        <div class="dropdown-content">
          <a href="#">ROLEX</a>
          <a href="#">AUDEMARS PIGUET</a>
          <a href="brands.php">MORE+</a>
        </div>
        <li><a href="index.php">Home</a></li>
      </li>
    </ul>
    </div>
    
    
        <div class="heading">
        <h1><bold>Big Watch Mart</bold></h1><br>
        <p>Big Watch Mart brings the finest selection of timepieces and customizable timepieces from all over the globe to our European-styled shop in San Gabriel. For more than 50 years, people have known us for our robust selection of watches and customizable watches in a variety of price points, and as the area's only certified Rolex dealer, we pride ourselves on the impeccable quality of our selection. We also carry small brands that you won't find anywhere in the area, but beyond our products, we build relationships with our customers. You'll feel like you're chatting with a friend as our Watch experts help you find the right piece.</p>
    </div>
    <img class="ustad" src="images/watch.jpeg" alt="ustad">
    <div class="jane"> 
        <h2>Rolex: Our Platinum partner</h2><br>
        <p>Rolex watches are crafted from the finest raw materials and assembled with scrupulous attention to detail. Every component is designed, developed and produced to the most exacting standards.</p>
    <br/>
        <p>Pioneer in the development of the wristwatch, Rolex designs, develops and produces in-house all the essential components of its watches, from the casting of the gold alloys to the machining, crafting, assembly and finishing of the movement, case, dial and bracelet.</p>      
        <br/>
       <p>Rolex is at the origin of numerous major watchmaking innovations, and has registered over 400 patents in the course of its history. Switzerland is the crucible where Rolex watches are brought to life thanks to the know-how and commitment of more than 6,000 employees at the brand’s four sites, all at the cutting edge of watchmaking technology.</p>  
    </div>
    <img class="watch" src="images/rolex.jpeg" alt="watch">
    <div class="lime">
    <h3>Watchmaking,The Rolex Way</h3><br>
    <p>Nothing beats experiencing first-hand the meticulous details, the balanced weight, the comfort and simply the feel of a Rolex watch. Visit us at Hing Wa Lee Jewelers and we will guide you through the range of Rolex models, and advise you on the technical aspects of Rolex watches to help you find the watch that was made for you.</p>
    <br>   
</div>
<div class="fourth">
<h4>Why we build watches; Relationship with the history</h4><br>
<p>From the beginning, wristwatches were almost exclusively worn by women, while men used pocketwatches up until the early 20th century. The concept of the wristwatch goes back to the production of the very earliest watches in the 16th century. Some people say the world's first wristwatch was created by Abraham-Louis Breguet for Caroline Murat, Queen of Naples, in 1810. Elizabeth I of England received a wristwatch from Robert Dudley in 1571, described as an arm watch. By the mid nineteenth century, most watchmakers produced a range of wristwatches, often marketed as bracelets, for women.
         <br/>
        Wristwatches were first worn by military men towards the end of the nineteenth century, when the importance of synchronizing maneuvers during war without potentially revealing the plan to the enemy through signaling was increasingly recognized</p>
    </div><br>
    <br> <div class="waat"><h1>Our timepieces are Extraordinary</h1></div><br>
    <div class="check">
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/watch1.jpg" style="width:100%">
          <div class="text">New Arrivals</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/watch2.jpg" style="width:100%">
          <div class="text">Best on the Market</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/watch3.jpg" style="width:100%">
          <div class="text">Coming Soon</div>
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>
        
        <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        </div>
        <div class="sea"> 
            <div class="footer">
                <div class="Col1">
                    <ul>
                        <li>About Us</li>
                        <li>How it Works</li>
                        <li>Why Choose Us</li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="Col2">
                    <ul>
                        <li>Privacy Policy</li>
                        <li>Terms & Conditions</li>
                        <li>Testimonials</li>
                        <li>Watch Exchange</li>
                    </ul>
                </div >
                <div class="Col3">
                    <p>Subscribe to get latest automotive news</p>
                    <form action="" method="POST">
                        <input type="email" name="mail">
                        <input type="submit" name="submit" value="Subscribe">
                    </form>
                </div>
                <div class="Socials">
                    <img src="images/fb.png" alt="">
                    <img src="images/insta.png" alt="">
                    <img src="images/twitter.png" alt="">
                    <img src="images/youtube.png" alt="">
                </div>
                <div class="copy">
                <p >Big Watch Mart.com FZE - © 2019, All rights reserved</p>
            </div>
            </div>
        </div>
    </body>
</html>
