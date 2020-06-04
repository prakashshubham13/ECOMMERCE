
<?php
require 'config.php';
session_start();
$uname=$_SESSION['uname'];



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/8893b709f5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
                /*------------------------------------------------signin form---------------------------------------------------------*/
*{
    padding: 0;
    margin: 0;
}
::-webkit-scrollbar{
    display: none;
}

        body{
            background:url(n.png);
      
            background-size:cover;
            background-repeat:no-repeat;
        }


        *{
            margin: 0;
            padding: 0;
        }
    html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            background: #ffffff;
        }
        
/*------------------------------------------------navbar---------------------------------------------------------*/
        
ion-icon {
font-size: 100px;
color: white;
}    

.logo {
  line-height: 60px;
  position: fixed;
  float: left;
  margin: 16px 46px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  letter-spacing: 2px;
}

.nav {
  position: fixed;
  width: 100%;
  line-height: 40px;
  z-index: 99999;
}

.nav ul {
  line-height: 60px;
  list-style: none;
  background: rgba(0, 0, 0, 0);
  overflow: hidden;
  color: #fff;
  padding: 0;
  text-align: right;
  margin: 0;
  padding-right: 40px;
  transition: 1s;
}

.nav.white ul {
  background: rgb(255, 255, 255);
}

.nav ul li {
  display: inline-block;
  padding: 16px 40px;;
}

.nav ul li a {
  text-decoration: none;
  color: black;
  font-weight: 800;
  font-size: 19px;
}

.menu-icon {
  line-height: 60px;
  width: 100%;
  background: rgb(255, 255, 255);
  text-align: right;
  box-sizing: border-box;
  padding: 15px 24px;
  cursor: pointer;
  color: rgb(0, 0, 0);
  display: none;
}

@media(max-width: 786px) {

  .logo {
        position: fixed;
        top: 0;
        margin-top: 16px;
  }

  .nav ul {
      
        background: rgb(255, 255, 255);
  }

  .nav.white ul {
        background: rgb(255, 255, 255);
  }



  .nav ul li {
        box-sizing: border-box;
        width: 100%;
        padding: 24px;
        text-align: center;
  }

  .menu-icon {
        display: block;
  }
  #myDIV{
        display: none;
  }
}




        .shop{
 
    display: flex;
    justify-content: space-evenly; 
    flex-wrap: wrap;
    flex:1 0 21%; 
    
} 
.card{
    background-color: rgb(34, 185, 255);
    border-radius: 5%;
    display: inline-block;
    
    padding: 2%;
    margin: 2%;

}
.img{
    width: 200px;
    height: 200px;
    border-radius: 5%;
}
.img img{
width: 100%;
height: 100%;
}
form input[type=submit]{
    background-color: crimson;
    border-radius: 5%;
    padding: 2%;
    margin: 2%;
    outline: none;
    border: 1px solid crimson;
    cursor: pointer;
}

form input:nth-child(1)[type=submit]{
    background-color: rgb(21, 255, 21);
    border-radius: 5%;
    padding: 2%;
    margin: 2%;
    outline: none;
    border: 1px solid rgb(21, 255, 21);
    cursor: pointer;
}

form input[type=submit]:hover{
 
 border-radius: 0%;

 border: 2px solid black;

}
.box{
    background-color:black;
    color:white;
    text-align:center;
    padding:2%;
    position: relative;
   
    margin-top: 6%; 
}













.clr{
  clear: both;
}
.footer-wrapper{
  width: 100%;
  height: auto;
  min-height: 250px;
  margin:auto;
  background-color:black;
  background-image: url(m.png);
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  overflow: hidden;
  position:relative;
  padding-top: 75px;
  bottom: 0px;
  margin-bottom:0%;
}
.footer-social-icons{
  width: 100%;
  height: auto;
  margin:auto;
  margin-bottom: 40px;
}
.footer-social-icons ul{
  margin:0px;
  padding: 0px;
  text-align: center;
}
.footer-social-icons ul li{
  display: inline-block;
  margin-right: 2px;
  width: 36px;
  height: 36px;
  text-align: center;
}
.footer-social-icons ul li a{
  color: #fff;
  display: block;
  font-size: 22px;
  text-shadow: 0px 0px 5px rgba(0,0,0,0.75);
}
.footer-social-icons ul li a i{
  line-height: 36px;
}
.footer-social-icons ul li:nth-child(1){
    background: #3b5998;
}
.footer-social-icons ul li:nth-child(2){
    background: #1da1f2;
}
.footer-social-icons ul li:nth-child(3){
    background: #25d366;
}
.footer-social-icons ul li:nth-child(4){
    background: #c32aa3;
}
.footer-social-icons ul li:nth-child(5){
    background: #007bb5;
}
.footer-social-icons ul li:nth-child(6){
    background: #ff0000;
}
.footer-social-icons ul li:nth-child(7){
    background: #db4437;
}
.footer-social-icons ul li:nth-child(8){
    background: #00aff0;
}
.footer-social-icons ul li:nth-child(9){
    background: #09b83e;
}
.footer-social-icons ul li:nth-child(10){
    background: #bd081c;
}
.footer-mid-part{
  width: 100%;
  height: auto;
  margin: auto;
}
.footer-section-one{
  width: 100%;
  height: auto;
  margin: auto;
  padding: 20px 20px;
  background: rgba(255,255,255,.1);
}
.footer-section-two{
  width: 100%;
  height: auto;
  margin: auto;
  padding: 20px 20px;
}
.footer-section-three{
  width: 100%;
  height: auto;
  margin: auto;
  padding: 20px 20px;
  background: rgba(255,255,255,.1);
}
.footer-heading{
   width: 100%;
  height: auto;
  margin: auto;
}
.footer-heading h2{
  font-size: 18px;
  text-align: left;
  color: #fff;
  text-transform: uppercase;
  margin: 0px;
}
.footer-contact-box{
  width: 100%;
  height: auto;;
  margin: auto;
  margin-top: 13px;
}
.footer-contact-icon{
  width: 25px;
  height: 25px;
  float: left;
}
.footer-contact-icon i{
  color: #fff;
  font-size: 20px;
}
.footer-contact-text{
  width: 85%;
  height: auto;
  float: left;
  margin-left: 10px;
}
.footer-contact-text p{
  font-size: 14px;
  text-align: left;
  color: #fff;
  cursor: pointer;
}
.footer-contact-text p a{
  font-size: 14px;
  text-align: left;
  color: #fff;
  text-decoration: none;

}
.footer-contact-text p:hover{
  color: #f00;
}
.footer-contact-box:hover .footer-contact-icon i{
   color: #f00;
}
.footer-contact-box:hover .footer-contact-text p a{
  color: #f00;
}
.footer-link{
  width: 100%;
  height:auto;
  margin: auto;
  margin-top: 20px;
}
.footer-link ul{
  margin:0px;
  padding: 0px;
}
.footer-link ul li{
  list-style-type: none;
  text-align: center;
  padding-top: 5px;
}
.footer-link ul li a{
  font-size: 14px;
  color: #fff;
  text-decoration: none;
   text-transform: capitalize;;
}
.footer-link ul li a:hover{
  color: #f00;
}
.footer-section-two .footer-heading h2{
  text-align: center;
}
.footer-form{
  width: 100%;
  height: auto;
  margin: auto;
  margin-top: 20px;
}
.footer-form-box{
   width: 100%;
  height: 30px;
  margin: auto;
  margin-top: 5px;
}
.footer-form-style{
  width: 100%;
  height: 40px;
  border-left: none;
  border-top: none;
  border-right: none;
  border-bottom:1px solid rgba(255,255,255,.1);
  background:transparent;
  font-size: 14px;
  text-align: left;
  padding: 0px 10px;
  color: #fff;
}
.footer-form-submit-style{
  width: 129px;
  height: 35px;
  font-size: 16px;
  text-align: center;
  color: #fff;
  text-transform: uppercase;
  background: rgba(255,255,255,.5);
  border:none;
  margin-top: 3px;
}
.footer-form-submit-style:active{
  background: #f00;
}
.footer-bottom{
  width: 100%;
  height: auto;
  margin: auto;
  margin-top: 10px;
  margin-bottom: 10px;
}
.footer-bottom{
  font-size: 14px;
  text-align: center;
  color: #fff;
}
.top-img{
  position: absolute;
  background: url(top-divder.png);
  top: -20px;
  left: 0px;
  width: 100%;
  height: 55px;
}
h1{
  font-size: 60px;
  text-align: center;
  text-transform: uppercase;
  padding-top: 30px;
}
h1 span{
  color: #f00;
}
/*RESPONSIVE CODE*/
@media only screen and (max-width: 1199px){
  .footer-wrapper{
    position: relative;
    background-attachment: scroll;
  }
  h1{
    font-size: 4vw!important;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .footer-section-one{
    padding: 12px;
  }
  .footer-social-icons ul li{
    margin-bottom: 5px;
  }
}


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align:center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

@media(max-width: 786px) {
.box{
  position:relative;
  margin-top:22%; 
}
}
    </style>
</head>
<body>
    
<div class="nav">
        <div class="menu-icon">
              <i class="fa fa-bars fa-2x"></i>
        </div>

        <div class="logo">

        </div>

        <div class="menu" >
              <ul id="myDIV">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="#">CART</a></li>
                    <li><a href="logout.php" style="color:red;">LOGOUT</a></li>
              </ul>
        </div>
  
</div>

<br>



<div class="box">
    <h1>
        YOUR CART
    </h1>
</div>







<div class="shop">
<?php
$c=0;
$s=0;
$result = mysqli_query($conn,"select * from car where id='$uname'");

while($row = mysqli_fetch_array($result))
{
    $a=$row['product'];
$resultt = mysqli_query($conn,"select * from shop where sno=$a"); 
while($roww = mysqli_fetch_array($resultt))
{
    
?>


<div class="card">   
<img src="pic/<?php echo $roww['img'] ?>" alt="" class="img">
    <br>
    <h3><?php echo $roww['name'];?></h3>
    <br>
    <h4>PRICE: $<?php echo $roww['price'];?></h4>
    <?php $s=$s+$roww['price'];?>
    <?php $c++ ?>
    <br>
    <form action="delete.php" method="POST">
      <input type="text" value="<?php echo $roww['sno'];?>" name="id" style="display:none;">
    <!-- <input type="submitt" value="BUY NOW" name="buy"> -->
    <input type="submit" value="REMOVE" name="cart">


</form>
</div>






    <?php
   
}
}

?>

</div>
<br><br>
<?php 
if($s>0)
{
  $d=2;
$di=0.2;
}
else
{

  $d=0;
$di=0;
}
?>
<?php $gt=($s+$d)-($s+$d)*$di ?>
<div class="bill" style="text-align:center;">
<hr>
<h3>TOTAL ITEMS:<?php echo $c ?></h3>
<br>
<table>
<tr>
<th>TOTAL</th>
<th>DELIVERY CHARGE</th>
<th>DISCOUNT</th>
<th>GRAND TOTAL</th>
</tr>
<tr>
<td>$<?php echo $s;?></td>
<td>$<?php echo $d ?></td>
<td><?php echo $di*100?>%</td>
<td>$<?php echo $gt ?></td>
</tr>

</table>
<br>
<a href="pay.php" style="background-color:yellowgreen;display:inline;text-decoration:none;padding:5px;margin:10px;color:black;">
BUY NOW
</a>
<br>
<br>
<br>
</div>
















 
<div class="footer-wrapper">
  <div class="top-img"></div>
  <div class="container-fluid">
    <div class="footer-social-icons">
      <ul>
        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-wechat"></i></a></li>
        <li><a href="#" target="_blank"><i class="fa fa-pinterest"></i></a></li>
      </ul>
    </div>


        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="footer-section-three">
            <div class="footer-heading"><h2>Get in touch</h2></div>
             <div class="footer-form">
               <form action="mssg.php" method="post">
                 <div class="footer-form-box">
                   <input type="text" class="footer-form-style" placeholder="Name" name="name" required/>
                 </div>
                 <br>
                 <div class="footer-form-box">
                   <input type="email" class="footer-form-style" placeholder="Email" name="email" required/>
                 </div>
                 <br>
                 <div class="footer-form-box">
                   <input type="text" class="footer-form-style" placeholder="Message" name="mssg" required/>
                 </div>
                 <br>
                 <div class="footer-form-box">
                   <input type="submit" class="" style="padding:10px;border-radius:0%;padding-left:15px;padding-right:15px;font-size:17px;color:white;background:grey;border:grey;" value="SUBMIT" >
                 </div>
                 <br><br>
               </form>
             </div>

          </div>
        </div>
      </div>
    </div>
 <div class="footer-bottom">
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12">
     <h3 style="color:black;">DESIGNED AND DEVELOPED BY <span style="color:crimson;">SONAL PANDEY </span></h3>
     </div>
   </div>
 </div>


  </div>
</div>








<script type="text/javascript">

// Menu-toggle button

$(document).ready(function() {
      $(".menu-icon").on("click", function() {
         
            var x = document.getElementById("myDIV");
if (x.style.display === "none") {
x.style.display = "block";
} else {
x.style.display = "none";
}
      });
});

// Scrolling Effect

$(window).on("scroll", function() {
      if($(window).scrollTop()) {
            $('.nav').addClass('white');
         
      }

      else {
            $('.nav').removeClass('white');
      }
})


</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>