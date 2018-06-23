<?php  
session_start();//session starts here 

?>   
  
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <title>Carousel Template for Bootstrap-DM Cashew</title>

    <style>
    .required label:after {
    color: #e32;
    content: ' *';
    display:inline;
    }
    </style>​



  </head>
 
  <body>
    <!--database connection -->
    <?php
      try{
        $database =new PDO('mysql:host=localhost;dbname=contactsbook;charset=utf8mb4', 'root', '');
        }
      
      catch(PDOException $ex){
        echo "Something happend";
        echo "<p>".$ex->getmessage()."<p>";
      }
    ?>
      
    <!--navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
      <div class="container">
<!-- <a href="theme2pics/food_Cashew-Nut-Seed-Fruit-512.PNG"></a> -->
        <a class="navbar-brand" href="#" style="font-family: cursive;"><img src="theme2pics/food_Cashew-Nut-Seed-Fruit-512.png" height="30px" width="30px"> DM Cashew Corner</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">Cashew</a>
                  <a class="dropdown-item" href="#">Gifts and Hampers</a>
                  <a class="dropdown-item" href="#">Directory</a>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orders.php">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Flavors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
            <button class="btn btn-outline-success btn-primary" data-target="#loginModal" data-toggle="modal">Login</button>
            </li>  
          </ul>
        </div>
      </div>
    </nav> 
    
    <!--carousel -->
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="theme2pics/peanut.jpg" height="500" width="1920" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left" style="font-family: cursive;">
                <h1>Fresh Cashews at CashewCorner.lk</h1>
                <p>Order Via Phone and Get It Delivered Doorstep</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">View Products</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="theme2pics/page-bannernew.jpg" height="500" width="1920" alt="Second slide">
            <div class="container">
              <div class="carousel-caption" style="font-family: cursive;">
                <h1>Massive Range of Quality Cashew from CashewCorner.lk</h1>
                <p>One stop shop for all types of Cashews in Sri Lanka</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse Gallery</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="theme2pics/IMG_0036_1920x500_acf_cropped.jpg" height="500" width="1920" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right" style="font-family: cursive;">
                <h1>Available in Wholesale & Retail</h1>
                <p>Within Sri Lanka</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Contact Us</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <!-- content -->
      <!-- Three columns of text below the carousel -->
      <div class="container">

        <div class="row">
          <div class="col-sm-8">
            <h2 class="mt-4">What We Do</h2>
            <p>The company DM Cashew Food Marketing has much experience in Cashew Nut Processing industry and Packaging Industry as it is led by professional with special advice and close relationship with Sri Lanka cashew Corporation.</p>
            <p>The Products have conquered the Sri Lankan market and now aiming at developing overseas markets with our finest range cashew products.</p>
            <p>
            <a class="btn btn-primary btn-lg" href="#">Read more&raquo;</a>
            </p>
          </div>
          <div class="col-sm-4">
            <h2 class="mt-4">Contact Us</h2>
            <address>
              <strong>DM Cashew Corner</strong>
              <br>Rukmale, Wewagama
              <br>Kuliyapitiya, Sri lanka 
              <br>
            </address>
            <address>
              <abbr title="Phone">P:</abbr>
              077-5227131
              <br>
              <abbr title="Email">E:</abbr>
              <a href="mailto:#">dmcashew24@gmail.com</a>
            </address>
          </div>
        </div>
            <br>
            <h2><u>Latest</u></h2>
        
        <div class="row">
          <div class="col-sm-4 my-4">
            <div class="card">
              <img class="card-img-top" src="theme2pics/Rosted-Cashew-Nuts-500x500.jpg" height="250px" alt="" >
              <div class="card-body">
                <h4 class="card-title">Roasted Cashew Nuts</h4>
                <p class="card-text">Rs. 360.00</p>
                <p class="card-text">Product Code: Nuts  Availability: In Stock </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 my-4">
            <div class="card">
              <img class="card-img-top" src="theme2pics/Raw-Cashew-Nuts-in-Sri-Lanka-500x500.jpg" height="250px" alt="">
              <div class="card-body">
                <h4 class="card-title">Row Cashew Nuts</h4>
                <p class="card-text">Rs. 390.00</p>
                <p class="card-text">Product Code: Nuts  Availability: In Stock </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 my-4">
            <div class="card">
              <img class="card-img-top" src="theme2pics/Devilled-Cashew-500x500.jpg" height="250" alt="">
              <div class="card-body">
                <h4 class="card-title">Deviled Cashew Nuts</h4>
                <p class="card-text">Rs. 390.00</p>
                <p class="card-text">Product Code: Nuts  Availability: In Stock </p>
              </div>
              <div class="card-footer">
                <a href="#" class="btn btn-primary">Find Out More!</a>
              </div>
            </div>
          </div>
        </div>
      
      </div>
        
      <br><br> 
      
      <!-- Four columns of text below the carousel -->
      <div class="container marketing">
        
        <h3><u>Best Selling Products</u></h3>
        <br>

        <div class="row">
          <div class="col-lg-3">
            <img class="" src="theme2pics/download.jpg" alt="Generic placeholder image" width="140" height="140">
            <h3>BBQ Cashew</h3>
            <p>Unit Price: LKR.820.00</p>
            <P>Unit weight:200g</P>
            <p>Availability:Processed and packed for the order</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-3">
            <img class="" src="theme2pics/download (1).jpg" alt="Generic placeholder image" width="140" height="140">
            <h3>Burnt Cashew</h3>
            <p>Unit Price: LKR.820.00</p>
            <P>Unit weight:200g</P>
            <p>Availability:Processed and packed for the order</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-3">
            <img class="" src="theme2pics/download (2).jpg" alt="Generic placeholder image" width="140" height="140">
            <h3>Dehydrate Cashew</h3>
            <p>Unit Price: LKR.820.00</p>
            <P>Unit weight:200g</P>
            <p>Availability:Processed and packed for the order</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-lg-3">
            <img class="" src="theme2pics/download4.jpg" alt="Generic placeholder image" width="140" height="140">
            <h3>Masala Cashew</h3>
            <p>Unit Price: LKR.860.00</p>
            <P>Unit weight:200g</P>
            <p>Availability:Processed and packed for the order</p>
            <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
          </div>
        </div>
      </div>

      <!-- START THE FEATURETTES -->
      <!--
      <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

      <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

      <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

      <hr class="featurette-divider">
      -->
      <!-- /END THE FEATURETTES -->
 
      <br><br><br>

      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>


      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="modal fade" id="loginModal" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" style="background-color: #17a2b8">
                    <h4 class="modal-title">Login</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                  </div>

                  

                  <div class="modal-body">

                    
                    <form class="form-signin" method="post" action="">
                      <div class="form-group">
                        <label for="inputUserName"><strong>This field is only for staff members</strong></label>
                      </div>

                      <div class="form-group">
                        <div class="required">
                          <label for="inputUserName">User Name</label>
                        </div>
                        <input type="text" id="username1" class="form-control" placeholder="User Name" name="username1" required="">
                      </div>

                      <div class="form-group">
                        <div class="required">
                          <label for="inputPassword">Password</label>
                        </div>
                        <input type="password" id="password1" class="form-control" placeholder="Password" name="password1" required="">
                        </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
       <a href="forgotpassword.php" class="forgot-password"> Forgot password? </a>
               
          </div>

          <div class="modal-footer">
          
            <button class="btn btn-primary" type="submit" id="loginbtn" name="submit">Login</button>
          <!--  <button class="btn btn-primary" type="submit" data-dismiss="modal">Close</button> -->
           <!--  <button class="btn btn-outline-primary" data-target="#signupModal" data-dismiss="modal" data-toggle="modal">Create an Account</button> -->
            <!--  <button class="btn btn-primary" type="submit" name="submit">Sign Up</button> -->
              

          </div>

        </form>
        </div>

        

      </div>

    </div>
    
  </div>
  </div>
  </div>

 


<?php 


  
include "connect.php";
  
if(isset($_POST['username1'])&&($_POST['password1']))  
{  





    $userName1 = $_POST["username1"];
    $passWord1 = $_POST["password1"];

     $md5pass1=md5($passWord1);
     $sha1pass1=sha1($md5pass1);
     $cryptpass1=crypt($sha1pass1,st); 
            

            

       
    try {
                    

               
        $statement = $database->prepare("SELECT * From users Where user_name = ? and password = ?");
        $statement->execute(array($userName1,$cryptpass1));
        $rows = $statement->rowCount();

                    
        } catch(PDOException $ex) {
            echo "An Error occured!<br>";
            echo $ex->getMessage();
        }

 
 
  
    if($rows>0)  
    {  
         $_SESSION['authentication']=true;
        $_SESSION['userName1'] = $_POST["username1"];
       // $_SESSION['userId'] = x;
        echo "<script>window.open('dashboard.php','_self')</script>";  
  
        //$_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
    }  
}
?>  



<!--  <?php      
  /*    $userName1=$_POST['username11'];
      $passWord1=$_POST['password11'];


     $md5pass1=md5($passWord1);
     $sha1pass1=sha1($md5pass1);
     $cryptpass1=crypt($sha1pass1,st); 


      //to prevent mysql injection
      $userName1=stripcslashes($username1);
      $passWord1=stripcslashes($password1);
      $userName1=mysql_real_escape_string($username1);
      $passWord1=mysql_real_escape_string($Password1);

      //connect to the server and select database
      $db=new PDO('mysql:host=localhost;dbname=dmcashewcorner;charset=utf8mb4', 'root', '');
      mysql_connect("localhost","root","");
      mysql_select_db("dmcashewcorner");

      //query the database for signup
      $result=mysql_query("select * from signup where user_name='$userName1' and password='$cryptpass1'")
      or die("Failed to query database".mysql_error());

      $row=mysql_fetch_array($result);
      if($row['user_name']==$userName1 && $row['password']==$cryptpass1){
        echo "Login Success!!! Welcome".$row['user_name'];
      }else{
        echo "Faild to login";
      } */
      
?>-->


    <div class="modal fade" id="signupModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #17a2b8">
            <h4 class="modal-title">Sign Up</h4>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>

         

          <div class="modal-body" style="height: 450px; overflow-y: auto;">

          <!--   <style type="text/css">
                    .modal-body{
                      height: 450px;
                      overflow-y: auto;
                     }
                  </style>
                    -->
            
            <form class="form-signin" method="post">

              <div class="form-group">
                <label for="inputUserName"><strong>This field is only for staff members</strong></label>
              </div>
      
              <div class="form-group">
                 <div class="required">
                <label for="fullName">Name</label>
              </div>
                <input type="text" name="fullname" class="form-control" placeholder="Full Name"  required />
              </div>

              <div class="form-group">
                 <div class="required">
                <label for="eMail">Email</label>
              </div>
                <input type="email"  name="email" class="form-control" placeholder="Email address" required />
              </div>

              <div class="form-group">
                 <div class="required">
                <label for="inputUserName">User Name</label>
                 </div>
                <input type="text" name="username" class="form-control" placeholder="User Name"  required="" />
              </div>


      <script type="text/javascript"> 
        var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>   

              <div class="form-group">
                 <div class="required">
                <label for="inputPassword">Password</label>
              </div> 
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"  required="" onkeyup='check();' />
                <!--<span class="help-block">Strong Password</span> -->
              <div>
          </div>
        </div>



              <div class="form-group">
                 <div class="required">
                <label for="inputPassword">Password Confirm</label>
              </div>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Password Confirm"  required="" onkeyup='check();'  />

                 <span id='message'></span>
                
                <!--<span class="help-block">Strong Password</span> -->
              <div>
               
          </div>
        </div>
             </div>

          <div class="modal-footer">
            <button class="btn btn-primary" type="submit" name="submit" action="signupsuccess.php">Sign Up</button>
            <button class="btn btn-primary" type="submit" data-dismiss="modal">Close</button>

             
</div>


<!-- <div class="alert alert-primary" role="alert">
  Sign up success!
</div>
         -->    <!--  <button class="btn btn-outline-success btn-primary" data-target="#signinModal" data-dismiss="modal" data-toggle="modal">Creata an Account</button> -->

          </div>

      
 
            </form>


          </div>




          <script src="http://code.jquery.com/jquery.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

          <script>
              $('#form').submit(function(e) {
                  $('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
                  $('#messages_content').html('<h4>MESSAGE HERE</h4>');
                  $('#modal').modal('show');
                  e.preventDefault();
            });
        </script>


    
        </div>


      </div>
      
    </div>


        <?php 
        $db=new PDO('mysql:host=localhost;dbname=dmcashewcorner;charset=utf8mb4', 'root', '');
 
        if(isset($_POST['username'])&&($_POST['password'])&&($_POST['fullname'])&&($_POST['email']))  
        {
                                 

      //$value = isset($array['username']) ? $array['username'] : '';


       $userName=$_POST["username"];
       $passWord=$_POST["password"];
       $fullName=$_POST["fullname"];
       $eMail=$_POST["email"];

      $md5pass=md5($passWord);
      $sha1pass=sha1($md5pass);
      $cryptpass=crypt($sha1pass,st); 

    $db=new PDO('mysql:host=localhost;dbname=dmcashewcorner;charset=utf8mb4', 'root', '');

    $statement=$db->prepare("INSERT INTO users(user_name,password,full_name,email)VALUES(?,?,?,?)");
    $statement->execute(array($userName,$cryptpass,$fullName,$eMail));
    $rows = $statement->rowCount();
    }
    
    ?>

    <?php
    $_SESSION['authenticated']=true; 
    ?>
  



  </body>
</html>



