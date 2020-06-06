<?php
Include('Functions/functions.php');
@session_start();
include("Includes/db.php");
?>
<!DOCTYPE html5>
<html>
    <head>
        <title>Big Watch Mart</title>
        <!--<link rel="stylesheet" type="text/css" href="Styles/styles.css">
        <link rel="stylesheet" type="text/css" href="Styles/stylesfive.css">-->
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



/*   Styles   Five*/

/*THIS CSS IS FOR BRANDS.HTML*/
*{
    margin: 0%;
    padding: 0%;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.brand{
    text-align: center;
    background-color:lavenderblush;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    margin-bottom: 2%;
    margin-top: 8%;
    
}
.row1 {
    display: flex;
  }
  
  /* Create three equal columns that sits next to each other */
  .column {
    flex: 33.33%;
    padding: 5px;
    margin-bottom: 2%;
    text-align: center;
  }

  img:hover {
    animation: shake 0.5s;
    animation-iteration-count: infinite;
    background-color: white;
  }
  
  @keyframes shake {
    0% { transform: translate(1px, 1px) rotate(0deg); }
    10% { transform: translate(-1px, -2px) rotate(-1deg); }
    20% { transform: translate(-3px, 0px) rotate(1deg); }
    30% { transform: translate(3px, 2px) rotate(0deg); }
    40% { transform: translate(1px, -1px) rotate(1deg); }
    50% { transform: translate(-1px, 2px) rotate(-1deg); }
    60% { transform: translate(-3px, 1px) rotate(0deg); }
    70% { transform: translate(3px, 1px) rotate(-1deg); }
    80% { transform: translate(-1px, -1px) rotate(1deg); }
    90% { transform: translate(1px, 2px) rotate(0deg); }
    100% { transform: translate(1px, -2px) rotate(-1deg); }
  }  
        </style>
    </head>
    <body>
        <div class="abc">
          <div class="loog">
          <?php
          if(!isset($_SESSION['cust_email'])){
            echo"Welcome Guest ";
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
                  <a href="det_brand.php?brand_title=Rolex">ROLEX</a>
                  <a href="det_brand.php?brand_title=AP">AUDEMARS PIGUET</a>
                  <a href="brands.php">MORE+</a>
                </div>
                <li><a href="index.php">Home</a></li>
              </li>
            </ul>
            </div>
            <?php
            cart();
            ?>
            <div class="brand">
                <br>
                <h1>BRANDS</h1>
                <br>
                <hr>
                <br>
                <p>Bug watch mart is an authorized dealer for the world renowned watch brands listed below. With a comprehensive training program, many of our staff are multi-lingual and are highly trained to serve the needs of both the Local and international clientele. Our staff are collectively fluent in more than 10 Chinese dialects and English. In addition to attending seminars hosted by vendors to keep current on the latest products and trends, many of our staff have visited Swiss watch-making houses to gain a greater understanding of the industry.</p>
                <br>
                <p>To provide better customer service to our client, Hing Wa Lee Jewelers have jewelry & watch maker on site at our premises to help customers on watch repairs and jewelry designs.</p>
                 <br>
            </div>
            <div class="row1">
                    <div class="column"><a href="det_brand.php?brand_title=Rolex">
                      <img src="images/brand1.jpg" alt="Snow" style="width:50%">
                    </div>
                    <div class="column"><a href="det_brand.php?brand_title=AP">
                      <img src="images/brand2.jpg" alt="Forest" style="width:50%">
                    </div>
                    <div class="column"><a href="det_brand.php?brand_title=Bre">
                      <img src="images/brand3.jpg" alt="Mountains" style="width:50%">
                    </div>
                  </div>
                  <div class="row1">
                        <div class="column"><a href="det_brand.php?brand_title=Car">
                          <img src="images/brand4.jpg" alt="Snow" style="width:50%">
                        </div>
                        <div class="column"><a href="det_brand.php?brand_title=GP">
                          <img src="images/brand5.jpg" alt="Forest" style="width:50%">
                        </div>
                        <div class="column"><a href="det_brand.php?brand_title=Hublot">
                        <img src="images/brand6.jpg" alt="Mountains" style="width:50%">
                        </div>
                      </div>
                      <div class="row1">
                            <div class="column"><a href="det_brand.php?brand_title=Rm">
                              <img src="images/brand7.jpg" alt="Snow" style="width:50%">
                            </div>
                            <div class="column"><a href="det_brand.php?brand_title=Tag">
                              <img src="images/brand8.jpg" alt="Forest" style="width:50%">
                            </div>
                            <div class="column"><a href="det_brand.php?brand_title=Tissot">
                              <img src="images/brand9.jpg" alt="Mountains" style="width:50%">
                            </div>
                          </div>
                          <div class="row1">
                                <div class="column"><a href="det_brand.php?brand_title=Rd">
                                  <img src="images/brand10.jpg" alt="Snow" style="width:50%">
                                </div>
                                <div class="column"><a href="det_brand.php?brand_title=Pia">
                                  <img src="images/brand11.jpg" alt="Forest" style="width:50%">
                                </div>
                                <div class="column"><a href="det_brand.php?brand_title=Rado">
                                  <img src="images/brand12.jpg" alt="Mountains" style="width:50%">
                                </div>
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