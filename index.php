<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
    <title>Document</title>
</head>
  <body>
        <!-- header*************** -->
      <div class="topArea">
        <div class="header_Photo"> <img src="../images/hair-salon-png-hd-hairdressing-u0026-styling-services-hairdressing-hd-png-1295.png" alt=""></div>
         <div id="logo"> 
          <img src="../images/logo.jpg"> 
         </div> 
        
         <!--NAV bar*************** -->
          <nav class="navMenu">
            
            <a href="index.php">Home</a>
            <a href="find_a_salon.php">Salons</a>
            <a href="gallery.php">Gallery</a>
            <a href="2.php">Register</a>
            <a href="aboutUs.php">About</a>

            <div  class="sign">
              <a href="signup.php"><button class="but">Login</button></a>
              <a href="signup.php"><button  class="but">SignUp</button></a>
            </div>
          </nav>

          
      </div>

         <!-- header text and search button*************** -->
        <div class="hero-text">
            <h4>Welcome To DIVINE</h4>
            <h2>Best Hair Salons For A <br> Professional Look</h2>
            <h6>DIVINE provides the best of the best..</h6>
            <br><br>
            <form class="search" action="">
              <input type="search" placeholder="Search here..." required>
              <a href="2.php">
              <button type="submit">Search</button>
            </a>
            </form>
            
        </div>
         

           <!-- slider*************** -->
          <div class="box">
            <figure class="snip1573 ">
             <img src="../images/1.jpg" alt="sample89" />
             <figcaption>
               <h3>gallery</h3>
             </figcaption>
              <a href="../html/gallery.php"></a>
            </figure>

           <figure class="snip1573 "><img src="../images/3.jpg" alt="sample94" />
             <figcaption>
               <h3>Explore</h3>
             </figcaption>
             <a href="#"></a>
           </figure>

           <figure class="snip1573"><img src="../images/6.jpg" alt="sample92" />
             <figcaption>
               <h3>Explore</h3>
             </figcaption>
             <a href="#"></a>
           </figure>

           <figure class="snip1573"><img src="../images/5.jpg" alt="sample92" />
             <figcaption>
               <h3>Gallery</h3>
             </figcaption>
             <a href="#"></a>
           </figure>
          </div>
          

         
            
         <!--register salon-->
      
          <div class="col-md-8">

            <div class="card-body">
              <h6 class="cd-title">Register Now</h6>
              <h2 class="card-text">
                Multi Location Salon
              </h2>
              <h5 class="card-text">
                <small class="text-muted">join with us quickly</small>
              </h5>
                <a href="2.php"><button type="button5" class="btn_btn-primary">REGISTER SALONS</button></a>
            </div>

          </div>

  <!--review-->
          <section class="review" id="review">

            <h1 class="heading">Customer's Review</h1>

            <h2 class="clients"> What Our Clients Say About Us</h2>
            <h6 class="cl2">Let your hairstylists do their amazing job. Trim the hair
              to get your desired look. Book appointment with us for your favourite
              hair styles
            </h6>
        
            <div class="box-container">
        
                <div class="box">
                  <img src="../images/quote-img.png" alt="" class="quote">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                  <img src="../images/review-1.png" class="user" alt="">
                  <h3>derek rude</h3>   
                </div>
        
                <div class="box">
                  <img src="../images/quote-img.png" alt="" class="quote">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                  <img src="../images/review-2.png" class="user" alt="">
                  <h3>jenny white</h3>
                </div>
                
            </div>
        
        </section>
        
       <script src="../js/home.js"></script>
  </body>


  <!-- footer****************** -->
             
      <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo">DIVINE</h1>
                  
              
              <address>
                553 Colombo, Arthur st<br>
                <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
              </address>
        </div>
            
        <ul class="footer__nav">
          <li class="nav__item">
              <h2 class="nav__title">ABOUT</h2>
          
                <ul class="nav__ul">
                  <li>
                    <a href="aboutUs.php">About us</a>
                  </li>
          
                  <li>
                    <a href="career.php">Career</a>
                  </li>
                      
                  <li>
                    <a href="find_a_salon.php">Find a Salon</a>
                  </li>
                  <li>
                    <a href="gallery.php">Gallery</a>
                  </li>
                 
                </ul>
          </li>  
        </ul>

        <p class="black">Stay informed about our new registered salons</p>
            
        <div class="legal">
          <p>&copy; Group 11. All rights reserved.</p>
              
        </div>
      </footer>


</html>