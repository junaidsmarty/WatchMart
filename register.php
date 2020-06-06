<?php 
include("includes/db.php");
include("Functions/functions.php");
?>


<!DOCTYPE html5>
<html>
    <head>
        <title>Big Watch Mart</title>
        <!--<link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" type="text/css" href="stylesthree.css">-->
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




/*Styles   three*/
/*THIS CSS IS FOR REGISTRATION.HTML*/
*{
    margin: 0%;
    padding: 0%;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

body {
     background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) ,url("./watch9.jpg");
     background-color: white;
     height: 100%;
     width: 100%;
     background-size: cover;
     background-position: center;
 }
 /* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
  
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  hr {
    border: 1px transparent #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Set a style for all buttons */
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  .signupbtn{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  button:hover {
    opacity:1;
  }
.signupbtn:hover{
  opacity:1;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }
  
  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }
  
  /* Add padding to container elements */
  .container {
    padding: 16px;
    color:darkgrey;
    margin-left: 20%;
    margin-right: 20%;
    margin-top:8%;
  }
  
  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }
  
  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
  }
        </style>
    </head>
    <body>
            <div class="abc">
                    <ul>
                            <div class="logo"><a href="index.php"><img src="images/logoburned.png" alt="company logo"></a></div>
                            <li><a href="#"><img src="images/cart2.png" alt="cart" width="28" height="28"></a></li>
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

                     <form action="" method="post">
                <div class="container">
                  <h1>Sign Up</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
              
                  <label for="name"><b>Username</b></label>
                  <input type="text" placeholder="Enter name" name="name" required>
                  
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
              
                  <label for="rpw"><b>Repeat Password</b></label>
                  <input type="password" placeholder="Repeat Password" name="rpw" required>
                  
                  <label for="add"><b>Postal Address</b></label>
                  <input type="text" placeholder="Postal Address" name="add" required>
                  
                  <label for="num"><b>Phone Number</b></label>
                  <input type="text" placeholder="Phone Number" name="num" required>
                  
                  <label for="acc"><b>Bank Account Swift Code</b></label>
                  <input type="text" placeholder="Bank Account Swift Code" name="acc" required>
                  
                  <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                  </label>
                  
                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p>
                  <p>If you already have a account: <a href="login.php" style="color:dodgerblue">Login</a></p>
                  <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <input type="submit" name="asd" class="signupbtn" value="Sign Up">
                  </div>

                </div>
                </form>


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
                            <form action="register.php" method="POST">
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
              </form>
              
            
    </body>
    </html>
    <?php
   if(isset($_POST['asd'])){

    $name=$_POST['name'];  
    $email=$_POST['email'];
      $psw=$_POST['psw'];
     
      $add=$_POST['add'];
      $num=$_POST['num'];
      $acc=$_POST['acc'];
      $iipp=getIp();
     $q="INSERT INTO `customers`(cust_ip,cust_name,cust_email,cust_pass,cust_add,cust_contact,cust_account) VALUES ('$iipp','$name','$email','$psw','$add','$num','$acc')";
     $run=mysqli_query($con,$q);
     if($run){
      echo "<script>alert('Registration successfull!')</script>";

     }
     else{
      echo "<script>alert('Registration not successfull!')</script>";

     }






   }



    ?>
