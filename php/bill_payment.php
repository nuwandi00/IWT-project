<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utility Bill Payments</title>

    <!-- custom css/js file link  -->
    <link rel="stylesheet" href="../css/utilitybill_style.css">
    <script type="text/javascript" src = "../js/billscript.js"> </script>
    
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
        <img src="../images/background.png" height="300px" width="1590px">
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
                    <input type="text" class="search" placeholder="Search">
                    <button class="button">Search</button>
                </form>     
  

</div>

    </header>

    <!-- header section ends  -->
    
    <!-- body part start-->
    
    
    <hr class="line2">

    <div class="container">
        <div class="paybills">
        <img  src="../images/paybills.jpg" width="300px" height="200px"> </div>
        <h2 class= "head1">Pay your Utility Bills<br> right from your home</h2> 
    </div>

<!---Button 1------------->
<div>
    <div class="tab">
        <button id="btn1" onclick="onClickForm1()" class="tabs">Mobile <br><img src="../images/telecom.jpg" width="100px" height="100px">  </button>

    </div>
    
    <form id="Form" class= "Form1" method="post" action="mobile.php">
        <label > Select Service Provider</label>
        <select name="text" id="carrier">
            <option value="none" selected disabled hidden>Select</option>
            <option value= "slt">SLT-Telecom</option>
            <option value= "dialog">Dialog</option> 
            <option value= "mobitel">Mobitel</option> 
            <option value= "hutch"> Hutch</option> 
            <option value= "airtel">Airtel</option>  </select> <br><br>

        <label> Account Number</label>
        <input type="text" class="accnumber" name="accnumber"><br>
        <label> Amount</label>
        <input type="text" class="amount" name="amount"><br>
        <label> Email </label>
        <input type="text" class="email" name="email"><br>

        <button type="submit"class="submit" value="submit">Submit</button>

    </form>

<!------Button 2------------------->

<div class="tab">
        <button id="btn1" onclick="onClickForm2()" class="tabs">Water <br><img src="../images/water.png" width="100px" height="100px">  </button>

    </div>
    
    <form id = "Form" class="Form2"  method="post" action="water.php">
        <label class="ftitle"> National Water Supply & Drainage Board</label>
         <br><br>

        <label> Account Number</label>
        <input type="text" class="accnumber" name="accnumber"><br>
        <label> Amount</label>
        <input type="text" class="amount" name="amount"><br>
        <label> Email </label>
        <input type="text" class="email" name="email"><br>


        <button type="submit"class="submit" value="submit">Submit</button>
    </form>

<!---Button 3------------->

    <div class="tab">
        <button id="btn3" onclick="onClickForm3()" class="tabs">Electricity <br><img src="../images/electricity.jpg" width="100px" height="100px">  </button>
    </div>

    
    
    <form id = "Form" class="Form3"  method="post" action ="electricity.php">
        <label> Select Service</label>
        <select name="text" id="carrier">
            <option value="none" selected disabled hidden>Select</option>
            <option value= "ceb">Ceylon Electricity Board (CEB)</option>
            <option value= "leco">Lanka Electricity Company (LECO) </option> 
        </select> <br><br>

        <label> Account Number</label>
        <input type="text" class="accnumber" name="accnumber"><br>
        <label> Amount</label>
        <input type="text" class="amount" name="amount"><br>
        <label> Email </label>
        <input type="text" class="email" name="email"><br>
        
        <button type="submit"class="submit" value="submit">Submit</button>
    </form>

<!------Button 4------------------->

<div class="tab">
        <button id="btn4" onclick="onClickForm4()" class="tabs">Insurance <br><img src="../images/insurance.png" width="100px" height="100px">  </button>

    </div>
    
    <form id = "Form" class="Form4"  method="post" action ="insurance.php">
        <label> Select Service</label>
        <select name="text" id="carrier">
            <option value="none" selected disabled hidden>Select</option>
            <option value= "lolc">LOLC</option>
            <option value= "vip">Celinco VIP</option> 
            <option value= "fairfirst">FairFirst</option> 
            <option value= "slic"> Sri Lanka Insurance Company (SLIC)</option> 
            </select> <br><br>

        <label> Account Number</label>
        <input type="text" class="accnumber" name="accnumber"><br>
        <label> Amount</label>
        <input type="text" class="amount" name="amount"><br>
        <label> Email </label>
        <input type="text" class="email" name="email"><br>

        <button type="submit"class="submit" value="submit">Submit</button>
    </form>
</div>
<!------------------------------Payment ------------------------------>




<div class="card">
        <form class = "Payment"  method ="post" action ="payment.php">
            <h2>Payment</h2>
            <label class="fname">Accepted Cards</label><br>
            <img class="payment" src="../images/payment.png" width="250px" length="250px"><br>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John Fernando"><br>
            <label for="ccnum">Credit card number </label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444"><br>
            <label for="expmonth">Exp Month </label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col">
                <label for="expyear">Exp Year </label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="682">
              </div>
            </div>
            <br><br><br><br>


            <div>
            <input type = "checkbox" checked="checked"  name ="address" class="chbox">
            Shipping address is same as billing</div><br><br>
            <input type ="submit" value = "Proceed to Payment" class="checkout">
          </div>

</form>
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
                <img src="../images/instagram.png" alt="" height="50px" width="50px">
                <img src="../images/twitter.png" alt="" height="50px" width="50px">
                <img src="../images/youtube.png" alt="" height="50px" width="50px">
            </div>
        </div>

       </div>

    </section>

    <div class="credit"> Copyright 2022 <span>SLIIT MLB_6.01_05 Group</span> all reserved</div>

    <!-- footer section ends  -->

</body>
</html>