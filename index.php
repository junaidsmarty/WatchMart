<?php
@session_start();
include("Includes/db.php");
?>

<!DOCTYPE html5>
<html>
    <head>
        <title>Big Watch Mart</title>
        <!--<link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="stylestwo.css">-->
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



/*Style two*/
/*THIS CSS IS FOR HOME.HTML*/
*{
    margin: 0%;
    padding: 0%;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.jk{
  margin-top: 1%;
}
.jk p{
  text-align: center;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: dimgray;
  text-shadow:2px 2px chartreuse;
  
}
.jk h1{
  text-align: center;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  color: dimgray;
  text-shadow:2px 2px chartreuse;
  margin-bottom: 3%;
}
.hero-image {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./watch4.jpg");
    height: 85%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    margin-top: 7%;
  }
  
  .hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  
  .hero-text button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px 25px;
    color: black;
    background-color: #ddd;
    text-align: center;
    cursor: pointer;
  }
  
  .hero-text button:hover {
    background-color: #555;
    color: white;
  }
  .row2 > .column {
    padding: 0 8px;
  }
  
  .row2:after {
    content: "";
    display: table;
    clear: both;
  }
  
  .column {
  box-sizing: border-box;
  
    float: left;
    width: 25%;
  }
  
  /* The Modal (background) */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }
  
  /* Modal Content */
  .modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }
  
  /* The Close Button */
  .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }
  
  .mySlides {
    display: none;
  }
  
  .cursor {
    cursor: pointer;
  }
  
  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  img {
    margin-bottom: -4px;
  }
  
  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }
  
  .demo {
    opacity: 0.6;
  }
  
  .active,
  .demo:hover {
    opacity: 1;
  }
  
  img.hover-shadow {
    transition: 0.3s;
  }
  
  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .hero-image1 {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./watch10.jpg");
    height: 85%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    margin-top: 2%;
  }
  
  .hero-text1 {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  
  .hero-text1 button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px 25px;
    color: black;
    background-color: #ddd;
    text-align: center;
    cursor: pointer;
  }
  
  .hero-text1 button:hover {
    background-color: #555;
    color: white;
  }
  .flex-container {
    display: flex;
    height: 400px;
    flex-wrap: wrap;
    align-content: space-between;
    background-color:black;
  
  }
  
  .flex-container > div {
    /*background-color: #f1f1f1;*/
    width: 100px;
    margin-left: 12%;
    text-align: center;
    line-height: 75px;
    font-size: 30px;
  }
  .flex-container img{
    height : 95%;
  }
  .hero-image2 {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./make4.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    margin-top: 2%;
    margin-bottom: 2%;
  }
  
  .hero-text2 {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
  }
  
  .hero-text2 button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px 25px;
    color: black;
    background-color: #ddd;
    text-align: center;
    cursor: pointer;
  }
  
  .hero-text2 button:hover {
    background-color: #555;
    color: white;
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

<a href="index.php?logout" >LOGOUT</a>
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
                    <li><a href="#home"><form method="get" action="">
                            <input type="text" name="find" />
                            <input type="submit" name="search" value="search" />
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
                    <div class="hero-image">
                    <div class="hero-text">
                      <h1 style="font-size:50px">Big Watch Mart</h1>
                      <p>Welcome into the watch World</p>
                      <a  href="<?php if(!isset($_SESSION['cust_email'])){
                        echo'login.php';
                      }
                      else{
                        echo'brands.php';
                      }
                      ?>"><button>BUY</button></a>
                    </div>
                  </div>
                  <div class="jk">
                    <p>CRAFTSMANSHIP</p>
                    <p></p>
                    <h1>The Art of Fusion</h1>
                  </div>                  
                  <div class="row2">
                        <div class="column">
                          <img src="images/watch5.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="images/watch6.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="images/watch7.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                          <img src="images/watch8.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
                        </div>
                      </div>
                      
                      <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">
                      
                          <div class="mySlides">
                            <div class="numbertext">1 / 4</div>
                            <img src="images/watch5.jpg" style="width:100%">
                          </div>
                      
                          <div class="mySlides">
                            <div class="numbertext">2 / 4</div>
                            <img src="images/watch6.jpg" style="width:100%">
                          </div>
                      
                          <div class="mySlides">
                            <div class="numbertext">3 / 4</div>
                            <img src="images/watch7.jpg" style="width:100%">
                          </div>
                          
                          <div class="mySlides">
                            <div class="numbertext">4 / 4</div>
                            <img src="images/watch8.jpg" style="width:100%">
                          </div>
                          
                          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                          <a class="next" onclick="plusSlides(1)">&#10095;</a>
                      
                          <div class="caption-container">
                            <p id="caption"></p>
                          </div>
                      
                      
                          <div class="column">
                            <img class="demo cursor" src="images/watch5.jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="images/watch6.jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="images/watch7.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                          </div>
                          <div class="column">
                            <img class="demo cursor" src="images/watch8.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                          </div>
                        </div>
                      </div>
                      
                      <script>
                      function openModal() {
                        document.getElementById("myModal").style.display = "block";
                        document.getElementByClassName("abc").style.display="none";
                      }
                      
                      function closeModal() {
                        document.getElementById("myModal").style.display = "none";
                      }
                      
                      var slideIndex = 1;
                      showSlides(slideIndex);
                      
                      function plusSlides(n) {
                        showSlides(slideIndex += n);
                      }
                      
                      function currentSlide(n) {
                        showSlides(slideIndex = n);
                      }
                      
                      function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        var captionText = document.getElementById("caption");
                        if (n > slides.length) {slideIndex = 1}
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";
                        dots[slideIndex-1].className += " active";
                        captionText.innerHTML = dots[slideIndex-1].alt;
                      }
                      </script>
           <div class="jk">
            <p>OFFICIAL TIMEKEEPER</p>
            <p></p>
            <h1>Power Meets Precision</h1>
          </div>                  
                     
          <div class="hero-image1">
            <div class="hero-text1">
              <h1 style="font-size:50px">PARTNERSHIPS</h1>
              <p>Official Sponsor of Formula 1 Races</p>
              <a href="brands.php"><button>DISCOVER MORE</button></a>
            </div>
          </div>   
          <div class="jk">
            <p>COLLECTION</p>
            <p></p>
            <h1>Meet our Timepieces</h1>
          </div>
          <div class="flex-container">
            <div class="hub"><img src="images/hublot1.jpg"></div>
            <div class="hub"><img src="images/hublot2.jpg"></div>
            <div class="hub"><img src="images/hublot3.jpg"></div>
            <div class="hub"><img src="images/hublot4.jpg"></div> 
          </div>
          <div class="jk">
            <p>WATCH MAKING</p>
            <p></p>
            <h1>The art of Timepices</h1>
          </div>
               
          <div class="hero-image2">
            <div class="hero-text2">
              <h1 style="font-size:50px">CRAFTSMANSHIP </h1>
              <p>THE ART OF FUSION</p>
              <a href="about.php"><button>EXPLORE CRAFTSMANSHIP</button></a>
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
                    <form  method="POST">
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
    <?php
    if(isset($_GET['search'])){
    $find=$_GET['find'];
    $qu="select * from products where brand_name like '%$find%' or prod_name like '%$find%' ";
    $run=mysqli_query($con,$qu);
    $fetch=mysqli_fetch_array($run);
    $brand_name=$fetch['brand_name'];
  
      echo"<script>window.open('sample.php?bt=$brand_name','_self')</script>";



    }
    
    
    
    
    ?>
    