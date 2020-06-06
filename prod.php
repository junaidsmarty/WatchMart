<?php
@session_start();
include('Includes/db.php');
//include('Functions/functions.php');
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


#single_product{
    margin-top: 8.5%;
    margin-bottom: 8%;
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
                  <a href="#">ROLEX</a>
                  <a href="#">AUDEMARS PIGUET</a>
                  <a href="brands.php">MORE+</a>
                </div>
                <li><a href="index.php">Home</a></li>
              </li>
            </ul>
            </div>
<?php
//cart();

if (isset($_GET['prod_id'])){
    $product=$_GET['prod_id'];
    global $con;
    $product_sql="select * from products where prod_id='$product'";
    $run_product=mysqli_query($con, $product_sql);
    $count_products=mysqli_num_rows($run_product);
    if($count_products==0){
        echo "<h2>No Products were found</h2>";
    }
    else{
        while($row_product= mysqli_fetch_array($run_product)){
            $pro_id=$row_product['prod_id'];
            $pro_name=$row_product['prod_name'];
            $pro_brand=$row_product['brand_name'];
            $pro_price=$row_product['prod_price'];
            $pro_size=$row_product['prod_size'];
            $pro_material=$row_product['prod_material'];
            $pro_dial=$row_product['prod_dial'];
            $pro_image=$row_product['prod_image'];
            
            echo "<div id='single_product'>
            <table border='1px'>
            <tr>
            <td><img src='images/$pro_image'></img></td>
            <td>
            <table border='1px'>
            <tr>
            <td>Brand: <h1>$pro_brand</h1></td>
            </tr>
            <tr> 
            <td>Name: <h2>$pro_name</h2></td>
            </tr>
            <tr>
            <td><p>Size: <b>$pro_size</b></p></td>
            </tr>
            <tr>
            <td><p>Material: <b>$pro_material</b></p></td>
            </tr>
            <tr>
            <td><p>Dial: <b>$pro_dial</b>mm</p></td>
            </tr>
            <tr>
            <td><p>$<b>$pro_price</b></p></td>
            </tr>
            <tr>
            <td><a href='brands.php?cart_id=$pro_id'><button>Add to Cart</button></a></td>
            </tr>
            </table>
            </td>
            </tr>
            </table>
            </div>";
        }
    }/*<a href='prod.php?prod_id=$pro_id'><button>Add to Cart</button></a>*/
    /*<a href='' onclick='this.href='prod.php?prod_id=$pro_id&qty='+ document.getElementsById('quantity').value;'>Add to Cart</a> */
}
?>
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