

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="../css/navfooter.css">

    
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
            
            <form  class="sign" action="../html/signup.php">
              <button class="but">Login</button>
              
              <button  class="but">SignUp</button>
            </form>

            
            
            <div class="searchbar">
            <form class="search" action="">
                <input type="search" placeholder="Search here..." required>
                <button type="submit">Search</button>
              </form>
            </div>
          </nav>

          
        </div>
      
        <div class="signup">
         <div class="container right-panel-active">
            <!-- Sign Up -->
            <div class="container__form container--signup">
                <form action="./signup_backend.php" method="post" class="form" id="form1" >
                    <h2 class="form__title">Sign Up</h2>
                 
                    <input type="email" placeholder="Email" class="input" name="email"/>
                    <input type="password" placeholder="Password" class="input" name="password" />
                    <input type="password" placeholder="RE-Password" class="input" name="repassword" />
                    <button class="btn" type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        
            <!-- LOG In -->
            <div class="container__form container--signin">
                <form action="./signin_backend.php" method="post" autocomplete="off" class="form" id="form2">
                    <h2 class="form__title">Log In</h2>
                    <input type="email" placeholder="Email" name="email" class="input">
                    <input type="password" placeholder="Password" name="password" class="input">
                    <a href="#" class="link">Forgot your password?</a>
                    <button class="btn" type="submit" name="submit">Log In</button>
                </form>
            </div>
        
            <!-- Overlay -->
            <div class="container__overlay">
                <div class="overlay">
                    <div class="overlay__panel overlay--left">
                        <button class="btn" id="signIn">Log In</button>
                    </div>
                    <div class="overlay__panel overlay--right">
                        <button class="btn" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
          
          <script src="../js/home.js"></script>
          <script src="../js/signUp.js"></script>
          </body>


             <!-- footer****************** -->
             
          <footer class="footer">
            <div class="footer__addr">
              <h1 class="footer__logo">DIVINE</h1>
              
              <address>
                5534 Somewhere In. The World 22193-10212<br>
                    
                <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
              </address>
            </div>
            
            <ul class="footer__nav">
              <li class="nav__item">
                <h2 class="nav__title">ABOUT</h2>
          
                <ul class="nav__ul">
                  <li>
                    <a href="../html/aboutUs.php">About us</a>
                  </li>
          
                  <li>
                    <a href="../html/career.php">Career</a>
                  </li>
                      
                  <li>
                    <a href="../html/find_a_salon.php">Find a Salon</a>
                  </li>
                  <li>
                    <a href="../html/gallery.php">Gallery</a>
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


