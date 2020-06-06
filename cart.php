<?php 
@session_start();
include("Includes/db.php");
include("Functions/functions.php");
?>
<!DOCTYPE html5>
<html>
    <head>
        <title>Big Watch Mart</title>
        <!--<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="stylesseven.css">-->
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


#products_box{
	margin-top: 8.5%;
	margin-bottom: 20%;
	text-align: center;
	margin-left:23%;


}
#products_box form{
height: 50%;
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


<div id="products_box">
				
			<form action="" method="post" enctype="multipart/form-data">
			
				<table align="center" width="700" height="500" bgcolor="lavender">
					
					<tr align="center">
						<th>Remove</th>
						<th>Product(S)</th>
						<th>Quantity</th>
						<th>Total Price</th>
					</tr>
					
		<?php 
        
        $total=0;
		
		
		
		$ip = getIp(); 
		
		$sel_price = "select * from cart where ip_add='$ip'";
		
		$run_price = mysqli_query($con, $sel_price); 
		
		while($p_price=mysqli_fetch_array($run_price)){
			
			$pro_id = $p_price['prod_id']; 
			
			$pro_price = "select * from products where prod_id='$pro_id'";
			
			$run_pro_price = mysqli_query($con,$pro_price); 
			
			while ($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price = array($pp_price['prod_price']);
			
			$product_title = $pp_price['prod_name'];
			
			$product_image = $pp_price['prod_image']; 
			
			$single_price = $pp_price['prod_price'];
			
			$values = array_sum($product_price); 
			
			$total += $values; 
					
					?>
					
					<tr align="center">
						<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
						<td><?php echo $product_title; ?><br>
						<img src="images/<?php echo $product_image;?>" width="60" height="60"/>
						</td>
                        <td><select name="qty">
							
						<option >1</option>
	
						<option>2</option>
							
						<option>3</option>
							
						<option>4</option>


						</select></td>
                        
						<?php
						if(isset($_POST['update_cart'])){
						
							$qty = $_POST['qty'];
							
							$update_qty = "update cart set qty='$qty'";
							
							$run_qty = mysqli_query($con, $update_qty); 
							
							//$_SESSION['qty']=$qty;
							
							/*$values=$values*(int)$qty;

							$total = $total+$values ;*/
							$total = $total*(int)$qty."";
						}
						
						?>
						
						
						<td><?php echo "$" . $single_price; ?></td>
					</tr>
					
					
				<?php } } ?>
				
				<tr>
						<td colspan="4" align="right"><b>Sub Total:</b></td>
						<td><?php echo "$" . $total;?></td>
					</tr>
					
					<tr align="center">
						<td colspan="2"><input type="submit" name="update_cart" value="Update Cart"/></td>
						<td><input type="submit" name="continue" value="Continue Shopping" /></td>
						<td><button><a href="<?php 
						if(!isset($_SESSION['cust_email'])){
							echo'login.php';
						}
						else{
							echo'checkout.php';
						}
						
						?>" style="text-decoration:none; color:black;">Checkout</a></button></td>
					</tr>
					
				</table> 
			
			</form>
			
	<?php 
		
	function updatecart(){
		
		global $con; 
		
		$ip = getIp();
		
		if(isset($_POST['update_cart'])){
		
			foreach($_POST['remove'] as $remove_id){
			
			$delete_product = "delete from cart where prod_id='$remove_id' AND ip_add='$ip'";
			
			$run_delete = mysqli_query($con, $delete_product); 
			
			if($run_delete){
			
			echo "<script>window.open('cart.php','_self')</script>";
			
			}
			
			}
		
		}
		if(isset($_POST['continue'])){
		
		echo "<script>window.open('index.php','_self')</script>";
		
		}
        
	}
	echo @$up_cart = updatecart();
	?>

				
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