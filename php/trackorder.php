<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodigo.com/TrackOrder</title>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/trackorder.css">
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
		<img src="../images/background.png" height="300px" width="100%">
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
					<input class="srh" type="text" placeholder="Search">
					<button class="button">Search</button>
				</form>     
  

</div>

    </header>

    <!-- header section ends  -->
	
	<!-- body part start-->
    
	<div class="mydiv">
        <h1 id="mydivheader">FOODIGO.COM</h1><br><br>
        <p class="trackorder">Track Order</p>

        <form method="post" action="track2.php">
        <p class="text" >Your Order Number:</p>

        <input type="number" class="textarea" name="Onumber"><br>
        <p class="text" >Your Contact Number/E-mail Address:</p>
        <input class="textarea"name="Ydetails"><br>
    <center><button type="submit" class="submitbt">Submit</button></center></form>
                
    </div>

	<!--body part ends-->
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
                <img src="../images/instagram.png" alt=""height="50px" width="50px">
				<img src="../images/twitter.png" alt=""height="50px" width="50px" >
				<img src="../images/youtube.png" alt=""height="50px" width="50px">
            </div>
        </div>

       </div>

    </section>

    <div class="credit"> Copyright 2022 <span>SLIIT MLB_6.01_05 Group</span> all reserved</div>

    <!-- footer section ends  -->
 <Script src="js/homejs.js"></script>
</body>
</html>