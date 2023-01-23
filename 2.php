<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/re.css">
    <link rel="stylesheet" href="../css/navfooter.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
    <header>
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

          <!--end of nav bar*************** -->
          
    
    </header>

    <div class="containerz">
      <header>Register Form</Form></header>
      <div class="progress-bar">
        <div class="step">
          <p>Step</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Step</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Step</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Step</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form action="" method="post">
          <div class="page slide-page">
            <div class="title">customer details:</div>
            <div class="field">
              <div class="label">business Name</div>
              <input type="text" placeholder="business" name="name">
            </div>
            <div class="field">
              <div class="label">Email</div>
              <input type="text" placeholder="remo@ddd.com" name="email">
            </div>
            <div class="field">
              <div class="label">Number</div>
              <input type="text" placeholder="0119874520" name="mobileno">
            </div>
            <div class="field">
              <div class="label">Address</div>
              <input type="text" placeholder="11,colombo" name="address">
            </div>

            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Select time and date</div>
            <div class="field">Date of Appointment
              <input type="datetime-local" id="Test_DatetimeLocal" style="color: white; "  name="app_date">
          </div>

            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">select services</div> 
                facial<input type="checkbox" value="facial" name="services[ ]"><br>
                Haircut<input type="checkbox" value="Haircut" name="services[ ]"><br>
                Threading<input type="checkbox" value="Threading" name="services[ ]"><br>
                Hair Styling<input type="checkbox" value="Hair Styling" name="services[ ]"><br>
                Manicure<input type="checkbox" value="Manicure" name="services[ ]"><br>
                Bridal Services<input type="checkbox" value="Bridal Services" name="services[ ]"><br>
                Pedicure<input type="checkbox" value="Pedicure" name="services[ ]"><br>
                Party make-up<input type="checkbox" value="Party make-up" name="services[ ]">
          
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">WELCOME</div>
            <div class="field">
              <p>hhhhhhhhhhh</p>
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit" name="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="../js/re.js"></script>

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
                <h2 class="nav__title">About Us</h2>
          
                <ul class="nav__ul">
                  <li>
                    <a href="#">Contact us</a>
                  </li>
          
                  <li>
                    <a href="#">Career</a>
                  </li>
                      
                  <li>
                    <a href="#">Find a Salon</a>
                  </li>
                  <li>
                    <a href="#">Gallery</a>
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

<?php
//insert data to data base
	if(isset($_POST['submit'])){

    require 'db_connection.php';
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobile=$_POST['mobileno'];
		$address=$_POST['address'];
		$date=$_POST['app_date'];
		$service=$_POST['service[ ]'];
		//$password=$_POST['pword'];

		$request= "INSERT INTO customer (name, email, phone, address, app_date, service) VALUES
		('$name','$email','$mobile','$address','$date','$service')";
		
		
		
		mysqli_query($conn, $request);		 
		
		echo
    "<script> alert('Successfull'); </script>";
		
	}
	else{
		echo "Somthing went wrong! try again";
	}
	
	

?>
