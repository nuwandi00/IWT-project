<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperMarket.com</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/displaylogin.css">
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<body>
    
    <!-- header section starts  -->
    

    <header class="header">
    
    
    <div class="header-3">

            <div class="icons">
                <a href="http://localhost/OnlineCustomerSupportSystem/html/stores.html"><i><img src="../images/location.png" width="20px" height="20px"></i>Store Location</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/php/delivery.php"><i><img src="../images/delivery.png" width="20px" height="20px"></i>Shipping Method</a>
                <a href="http://localhost/OnlinecustomerSupportSystem/php/cart.php"><i><img src="../images/cart.png" width="20px" height="20px"></i>Cart</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/php/trackorder.php"><i><img src="../images/track.png" width="30px" height="25px"></i>Track</a>
            </div>
            
            <div class="buttons">
        <a href="http://localhost/OnlineCustomerSupportSystem/php/insertnew1.php" class="btn btn-1">LOGIN</a>
        <a href="http://localhost/OnlineCustomerSupportSystem/php/signup.php" class="btn btn-1">SIGN UP</a> 
        </div>
        </div>
        
        <div>
        <img src="../images/background.png" height="300px" width="1950px">
        </div>
      
    
    
<div class="header-2">

            <nav class="navbar">
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Home.html">Home</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/product.html">Our Products</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Offers.html">Offers</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/stores.html">Stores</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/bill_payment.php">Utility Bill Payment</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/customer.php">Cutomer Support</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/contactus.php">Contact Us</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/AboutUs.html">About Us</a>
            </nav>
        </div>
        
<div class="header-4">

     <form class="search-form">
                    <input type="text" placeholder="Search">
                    <button class="button">Search</button>
                </form>     
  

</div>

    </header>

    <!-- header section ends  -->
    
    


</body>
</html>

 <div class="container">
 <div class="col-lg-12">
 <br><br><br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <center>
 <table   width="45%"   style = "border: 3px solid black;"  >
 
 <tr>
 
 <th style ="text-align:left;"><h2> Id</h2> </th>
 <th style ="text-align:left;"><h2> Username </h2></th>
 <th style ="text-align:left;"><h2> Password</h2> </th>
 <th style ="text-align:left;"><h2> Delete</h2> </th>
 <th style ="text-align:left;"><h2> Update</h2> </th>

 </tr >

 <?php

 include 'conn1.php'; 
 $q = "select * from login ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td><h3> <?php echo $res['id'];  ?></h3> </td>
 <td><h3> <?php echo $res['username'];  ?></h3> </td>
 <td><h3> <?php echo '********';  ?></h3> </td>
 <td> <button class="btn-danger btn"> <a href="delete1.php?id=<?php echo $res['id']; ?>" class="text-white"><h3> Delete</h3> </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update1.php?id=<?php echo $res['id']; ?>" class="text-white"><h3> Update</h3> </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
</center>

 </div>
 </div>

 

</body>
</html>
<!-- footer section starts  -->

    <section class="footer">

       <div class="box-container">

        <div class="box">
            <h1 id="footerheader">FOODIGO</h1>
            <div class="icons icon-1">
                <a href="#"><i><img src="../images/phone.png" width="20px" height="20px"></i>+94 112 893 440</a>
                <a href="#"><i><img src="../images/fax.png" width="20px" height="20px"></i>+94 112 896 453</a>
                <a href="#"><i><img src="../images/email.png" width="20px" height="20px"></i> foodigo@gmail.com</a>
                <a href="#"><i><img src="../images/web.png" width="20px" height="20px"></i> www.foodigo.com</a>
            </div>
        </div>

        <div class="box">
            <h2>Whatsin Store</h2>
            <div class="icons">
                <a href="http://localhost/OnlineCustomerSupportSystem/html/vegi.html">Vegetables</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/fruits.html">Fruits</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/spices.html">Seeds and Spices</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/beverages.html">Soft Drinks</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/snaks.html">Biscuits & Cookies</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/snaks.html">Choclates</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/spices.html">Grocery & Staples</a>
                <a href="http://localhost/OnlineCustomerSupportSystem/html/bakery.html">Bakery</a>
            </div>
        </div>

        <div class="box">
            <h2>Useful Links</h2>
            <div class="icons">
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Home.html">Home</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/product.html">Our Products</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/Offers.html">Offers</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/stores.html">Stores</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/bill_payment.php">Utility Bill Payment</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/customer.php">Cutomer Support</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/php/contactus.php">Contact Us</a>
                    <a href="http://localhost/OnlineCustomerSupportSystem/html/AboutUs.html">About Us</a>
            </div>
        </div>

        <div class="box">
            <h2>Download App</h2>
            <div class="image">
                <img src="../images/facebook.png" alt="" height="50px" width="50px">
                <img src="../images/instagram.png" alt="" height="50px" width="50px">
                <img src="../images/twitter.png" alt="" height="50px" width="50px">
                <img src="../images/youtube.png" alt="" height="50px" width="50px">
            </div>
        </div>

       </div>

    </section>

    <div class="credit"> Copyright 2022 <span>SLIIT MLB_6.01_05 Group</span> all reserved</div>

    <!-- footer section ends  -->