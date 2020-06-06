<?php
include('Includes/db.php');

function getbrand(){
    if (isset($_GET['brand_title'])){
        //echo $_GET['brand_title'];
        $brand=$_GET['brand_title'];
        global $con;
        $brand_sql="select * from products where brand_name='$brand'";
        $run_brand=mysqli_query($con, $brand_sql);
        $count_brands=mysqli_num_rows($run_brand);
        if($count_brands==0){
            echo "<h2>No Products were found</h2>";
        }
        else{
            while($row_brand_pro= mysqli_fetch_array($run_brand)){
                $pro_id=$row_brand_pro['prod_id'];
                $pro_name=$row_brand_pro['prod_name'];
                $pro_brand=$row_brand_pro['brand_name'];
                $pro_price=$row_brand_pro['prod_price'];
                $pro_size=$row_brand_pro['prod_size'];
                $pro_material=$row_brand_pro['prod_material'];
                $pro_dial=$row_brand_pro['prod_dial'];
                $pro_image=$row_brand_pro['prod_image'];
                
                echo "<div id='single_product'> 
                <h2 >$pro_name</h2>
                <a href='prod.php?prod_id=$pro_id'><img src='images/$pro_image'></img></a>
                <p><b>$$pro_price</b></p>
                </div>";
            }
        }
    }
}
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
function cart(){
    /*global $con;


    $q="SELECT * from products";
    $r=mysqli_query($con,$q);
    while($arr2=mysqli_fetch_array($r)){
        $prod_id=$arr2['prod_id'];

*/
    if(isset($_GET['cart_id'])){
        global $con;
        $ip=getIp();
        /*$qty=$_POST['qty'];*/
        $qty= 1;
        $prod_id=$_GET['cart_id'];
        $check_prod="SELECT * from cart where prod_id='$prod_id' AND  ip_add='$ip'";
        $run_check=mysqli_query($con,$check_prod);
        if(mysqli_num_rows($run_check)>0){
            /*$update_prod="UPDATE `cart` SET `qty`= `qty` + $qty WHERE prod_id=$prod_id AND ip_add=$ip";
            $run_prod=mysqli_query($con,$update_prod);*/
            echo "<script>alert('Product is already added to your cart.');
            window.open('prod.php?prod_id=$prod_id','_self');</script>";
        }
        else{
            $insert_prod="INSERT INTO `cart`(`prod_id`, `ip_add`,`qty`) VALUES ('$prod_id','$ip', '$qty')";
            $run_prod=mysqli_query($con,$insert_prod);
            /*if($run_prod==TRUE){
                echo "Insertion successful";
            }
            else{
                echo "Nothing!!";
            }*/
            echo "<script>alert('Product is added to your cart.');
            window.open('prod.php?prod_id=$prod_id','_self');</script>";
        }
    } 
}
?>