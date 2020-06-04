<?php


require 'config.php';
session_start();
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

::-webkit-scrollbar{
      display: none;
}

/*------------------------------------------------main---------------------------------------------------------*/

.mySlides {display: none}


/* Slideshow container */
.slideshow-container {
      background-image: url(1.png);
  position: relative;
  height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
  margin: auto;
}

.slideshow-container img{
      position: absolute;
      width: 50%;
      height: 50%;
      margin-left: 3%;
 
}
.mySlides img:nth-child(1){
      bottom: 8%;
}
.mySlides img:nth-child(1){
      bottom: 5%;
}
.mySlides img:nth-child(1){
      bottom: 8%;
}

ul li{
      list-style-type: none;
}
/* The dots/bullets/indicators */
.dot {     
  position: absolute;
  right: 5%;
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 2px;
  background-color:transparent;
  border: 3px solid #111111;
  border-radius: 50%;
  transition: background-color 0.6s ease;
}
.dot:nth-child(1){
top: 40%;
}
.dot:nth-child(2){
top: 45%;
}
.dot:nth-child(3){
top: 50%;
}

.active, .dot:hover {
  background-color: #ffffff;
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

@media(max-width: 786px) {
      .slideshow-container img{
      position: absolute;
      bottom: 5%;
      width: 70%;
}
}
/*------------------------------------------------section---------------------------------------------------------*/
section{
      height: 100vh;
      background-color: #fff;
      display: flex;
      overflow: hidden;
      margin-bottom:5% ;
}

.comf{
flex-grow: 1;
}
.comf{
      width: 50%;
      height: 50%;
}
.comff{
      flex-grow: 9;text-align: center;background-color: #d3ab3b;margin-top: 30px;
      padding: 5%;
      color: #6d5f32;
      height: 50%;
      clip-path: polygon(25% 0%, 100% 1%, 100% 100%, 25% 100%, 0% 50%);
     

}
section:nth-child(even) .comff{
     background-color: #968d70;
      padding: 5%;
      color: #e2ddca;
      clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
      z-index: 2;

} 
section:nth-child(even) .comf{
    transform: translate(-30%,0px);

} 
section:nth-child(3) .comff{
      flex-grow: 9;text-align: center;background-color: #095e80;
      color: #95e6ff;  

} 

.comff h2{
      font-size: 60px;
}
.comff h4{
      font-size: 30px;
      padding: 5%;
      text-align: left;
}

@media(max-width: 786px) {

      section{

      height: 100vh;
      background-color: #fff;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    
}

section:nth-child(even) .comf{
    transform: translate(0px,0px);

} 
section:nth-child(even) .comff{
  
      clip-path: polygon(0% 0%, 100% 0, 100% 50%, 100% 99%, 0% 100%);
    
} 
section:nth-child(even) {
      flex-direction: column-reverse;
}
.comff{
      clip-path: polygon(0% 0%, 100% 0, 100% 50%, 100% 99%, 0% 100%);
      height: 10%;
      padding: 0;
      flex-grow: 1;
}
section:nth-child(3) .comff{
      margin-top:0px;
    margin-bottom: 0px;
      padding: 0;
      flex-grow:1.2;    
}
}

/* --------------------------------------------------------------fotter-------------------------------- */



.fixed-footer{
        bottom: 0;
    }   
    .container{
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
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

section{
    margin:10%;
}
@media(max-width: 786px) {

section{
    margin:0%;
}
}
</style>
</head>
<body>
<div class="main">
    <div class="nav">
        <div class="menu-icon">
              <i class="fa fa-bars fa-2x"></i>
        </div>

        <div class="logo" style="z-index:10;background:white;padding:5px;">
<h3>LEC<span style="color:yellowgreen">TUL</span>US</h3>
        </div>

        <div class="menu" >
              <ul id="myDIV">
              <?php
                if (isset($_SESSION['uname']))
                {
                
                  ?>

<li style="font-weight:800;"><a href="index.php" style="color:black;font-size:16px">HOME</a>
</li>        
                <li style="font-weight:800;"><a href="shop.php" style="color:black;font-size:16px">SHOP</a>
</li>   
<li style="font-weight:800;"><a href="bucket.php" style="color:black;font-size:16px">CART</a>
</li>                
<li style="font-weight:800;"><a href="logout.php" style="color:red;font-size:16px">LOGOUT</a>
</li>           

                    
   
             <?php
                }
                else{
                  ?>
   <li style="font-weight:800;"><a href="form.html" style="color:yellowgreen;">Sign in</a></li>
          
                  <?php
                }
                ?>
              </ul>
        </div>
  
</div>
     



<!------------------------------------------------------------slider---------------------------------------------------------------->

<div class="slideshow-container">
   

      <div class="mySlides fade">
        <img src="https://www.transparentpng.com/thumb/furniture/iZxKY6-download-furniture-png.png">
      </div>
      
      <div class="mySlides fade">
        <img src="https://www.transparentpng.com/thumb/furniture/zj3ln2-furniture-photos.png" style="bottom:2%;">
      </div>
      
      <div class="mySlides fade">
        <img src="https://www.transparentpng.com/thumb/recliner/scratch-and-dent-furniture-mn-recliner-png-28.png" style="bottom: 0%;">
      </div>
      <div>
            <ul>
        <li class="dot" onclick="currentSlide(1)"></li> 
        <li class="dot" onclick="currentSlide(2)"></li> 
        <li class="dot" onclick="currentSlide(3)"></li> 
      </ul>
      </div>

      </div>
      <br>
      
   

   
</div>

<!------------------------------------------------------------section---------------------------------------------------------------->
<div class="section">

<section>
<div class="comf">
      <img src="section1.png" alt="">
</div>
<div class="comff">
      <h2>
            Comfortable
      </h2>
      <h4>
            Smooth quality material
      </h4>
</div>
</section>

<section>
      <div class="comff">
            <h2>
                Modern
            </h2>
            <h4>
                  Stay in trend
            </h4>
      </div>
      <div class="comf">
            <img src="section2.png" alt="">
      </div>
  
      </section>

      <section>
            <div class="comf">
                  <img src="section3.png" alt="">
            </div>
            <div class="comff">
                  <h2>
                        Quality
                  </h2>
                  <h4>
                        Highly durable material
                  </h4>
            </div>
            </section>      


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
                   <input type="submit" class="footer-form-submit-style" value="SUBMIT" >
                 </div>
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








<script>
      var slideIndex = 1;
      showSlides(slideIndex);
      
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
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
      }
</script>



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



</body>
</html>