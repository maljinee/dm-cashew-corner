<?php
  session_start();
 
  if (!($_SESSION['authentication']))
  {
    //if the value was not set, you redirect the user to your login page
    header('Location:theme2.php');
    exit;
  }
  else
  {
    $_SESSION['authentication']=false;
    //if the user did login, then you load the page normally
  }
?>
   
<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .nav-link 
      {
        color: #6c757d;
      }

      a:hover{
        color: #fff;
      }

      a:active{
        color: #f8f9fa;
      }

      .form
      {
        vertical-align: right;
      }
    </style>

    <style type="text/css">
      .nav-link 
      {
        color: rgba(255,255,255,.75);
      }
    </style>

    <script type="text/javascript">
      
    $(".nav a").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");});
    
    </script>

    <style type="text/css">
      .navbar-item.active 
      {
        color: #6610f2;
      }
    </style>

    <title>Dashboard Template for Bootstrap-DM Cashew Corner</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet"> 

    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  --> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  -->
    <!--  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  </head>

  <body>


  
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4682B4;">
      <a class="navbar-brand" href="#" style="font-family: cursive;"><img src="theme2pics/food_Cashew-Nut-Seed-Fruit-512.png" height="30px" width="30px">DM Cashew Corner</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
          <form class="form-inline my-2 my-lg-0">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for...">
                <span class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </form>

        <ul class="navbar-nav px-3 navbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
                <span class="d-lg-none">Alerts
                  <span class="badge badge-pill badge-warning">6 New</span>
                </span>
            </a>

              <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-success">
                    <strong><i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-danger">
                    <strong><i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-success">
                    <strong><i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item small" href="#">View all alerts</a>
              </div>
          </li>

        <li class="nav-item navbar-right">
          <a class="nav-link" href=""> 

        <?php
          //mysqli_connect("localhost","root","");
          //mysqli_select_db("dmcashewcorner");

        $name=$_SESSION["userName1"];
        //echo $name;

        $mysqli=new mysqli("localhost","root","","dmcashewcorner");
        $result=$mysqli->query("select * from users where user_name='$name'");
        //$query=mysqli_query("select * from signup where email='$email'");
        $row=$result->fetch_assoc();

        $user=$row['full_name'];

        echo "$user";

        $_SESSION['full_name']=$user;
        $_SESSION['authentication']=true;


        // $_SESSION['authorized']=true;
        //$_SESSION['authorized']=true;

        /*$connection = mysqli_connect('localhost','root','') or die("cannot connect"); 
        mysqli_select_db($connection,'dmcashewcorner') or die("cannot select DB");

        $username1=$_REQUEST["username1"];
        $mysqli=new mysqli("","root","","dmcashewcorner");
        $result=$mysqli->query("select * from signup where user_name='$username1'");
        //$query=mysqli_query("select * from signup where email='$email'");
        $row=$result->fetch_assoc();
        echo $row["full_name"];
        */
        //echo htmlentities($row['_message']);
        //$row=mysqli_fetch_array($query);
        //print_r($row);die();
        //echo $email;die();

      ?> 



        </a>
        </li>

        <li class="nav-item navbar-right">
          <a class="nav-link" data-toggle="modal" href="#exampleModal" >
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>  
  </div>
</nav>

 
    <!-- <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>   -->
    
<!--<nav class="navbar navbar-dark bg-dark fixed-top sticky-top justify-content-right">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0 navbar-right">DM Cashew Corner</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>  -->
<!-- <form class="justify-content-right">
    <input class="form-control form-control-dark w-25" type="text" placeholder="Search" aria-label="Search">
  </form> -->
   <!--   <ul class="navbar-nav px-3 navbar-right">
        <li class="nav-item navbar-right">
          <a class="nav-link" href="#" >Sign out</a>
        </li>
      </ul>  -->
   <!-- </nav>   -->

   <!--  <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>  -->

   

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark nav-link sidebar navbar-dark" style="background-color: #4682B4;">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
             <!--  <li class="nav-item active">
                <a class="nav-link active" href="#" class="active">
                  <span data-feather="home"></span>
                  Dashboard<span class="sr-only">(current)</span>
                   <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </a>
              </li> -->
         <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link active" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text active">Dashboard</span>
          </a>
         </li>
              <!--  <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="monitor"></span>
                  About
                </a>
              </li> -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
          <a class="nav-link" href="#">
            <i class="fa fa-info-circle"></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>

              <!--  <li class="nav-item">
                <a class="nav-link" href="suppliers.php">
                  <span data-feather="users" ></span>
                  Suppliers
                </a>
              </li> -->

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Suppliers">
          <a class="nav-link" href="suppliers.php">
            <i class="fa fa-address-card-o"></i>
            <span class="nav-link-text">Suppliers</span>
          </a>
        </li>


             <!--  <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="user"></span>
                  Customers
                </a>
              </li> -->


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
          <a class="nav-link" href="customers.php">
            <i class="fa fa-group"></i>
            <span class="nav-link-text">Customers</span>
          </a>
        </li>

            <!-- 
               <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="book"></span>
                  Employee Duties
                </a>
              </li> -->
             
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Employee Duties">
          <a class="nav-link" href="#">
            <i class="fa fa-address-book-o"></i>
            <span class="nav-link-text">Employee Duties</span>
          </a>
        </li>


              <!--  <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="dollar-sign"></span>
                  Payroll
                </a>
              </li>
               -->

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payroll">
          <a class="nav-link" href="#">
            <i class=" fa fa-money"></i>
            <span class="nav-link-text">Payroll</span>
          </a>
        </li>

           <!-- <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li> -->

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">
          <a class="nav-link" href="#">
            <i class="fa fa-pencil-square-o"></i>  
            <span class="nav-link-text">Orders</span>
          </a>
        </li>

            <!--   <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li> -->
              <!-- <input type="submit" name="reports" id="reports"> -->

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
          <a class="nav-link" href="#">
            <i class="fa fa-shopping-cart"></i>  
            <span class="nav-link-text">Products</span>
          </a>
        </li>
              
            <!--   <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li> -->



       <?php

          if($_SESSION['userType'] == 'manager') {
        ?>

        <li class="nav-item text-muted disabled" data-toggle="tooltip" data-placement="right" title="Reports">
          <a class="nav-link" href="#">
            <i class="fa fa-newspaper-o disabled text-muted"></i>  
            <span class="disabled text-muted" id="reports" class="nav-link-text">Reports</span>
          </a>
        </li>

           <?php
          }
          ?>
       
             
            </ul>

            <?php
             $user=$row['full_name'];
           //  echo "$user";
            ?>
           
        
  

      
        <?php

          if($_SESSION['userType'] == 'manager') {
        ?>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
             
              <span>Saved reports</span>
              
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Current month">
          <a class="nav-link" href="#">
            <i class="fa fa-file-pdf-o"></i>  
            <span class="nav-link-text">Current month</span>
          </a>
        </li>

         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Last quarter">
          <a class="nav-link" href="#">
            <i class="fa fa-file-pdf-o"></i>  
            <span class="nav-link-text">Last quarter</span>
          </a>
        </li>
         
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Social engagement">
          <a class="nav-link" href="#">
            <i class="fa fa-file-pdf-o"></i>  
            <span class="nav-link-text">Social engagement</span>
          </a>
        </li>
         
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Year-end sale">
          <a class="nav-link" href="#">
            <i class="fa fa-file-pdf-o"></i>  
            <span class="nav-link-text">Year-end sale</span>
          </a>
        </li>

        <?php
}
?>
         
             <!--  <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li> -->
            <!--   <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li> -->
            </ul>
          </div>
        </nav>

        <br><br><br><br>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <!-- <h1 class="h2">Dashboard</h1> -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
                </nav>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Inventory Level</button>
               <!--  <button class="btn btn-sm btn-outline-secondary">Export</button> -->
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
              
            </div>
            <div class="btn-group mr-2">
              <button class="btn btn-outline-primary" data-target="#signupModal" data-dismiss="modal" data-toggle="modal">Create an Account</button>
            </div>
          </div>



          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>


          <h2>Recent Orders</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Order No</th>
                  <th>Date</th>
                  <th>Cashew Type</th>
                  <th>Unit Cost</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>


    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Are you sure you want to logout?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             <!-- <button class="btn btn-outline-success btn-primary" data-target="#loginModal" data-toggle="modal" data-dismiss="modal">Logout</button> -->
             <div>
             <button class="btn btn-outline-primary" type="submit" data-target="#loginModal" onclick="document.location.href='logout.php'">Logout</button>
             <?php
            /* session_destroy();*/
             ?>
           </div>
             <!--  <button class="btn btn-sm btn-outline-secondary" type="submit" onClick="document.location.href='suppliers2requiredDetails.php'" action="suppliers2requiredDetails.php"> -->
           <!--   <a class="" href="suppliers2requiredDetails.php"> -->
                
            <!--<a class="btn btn-primary"  data-target="#loginModal">Logout</a>   -->
          </div>
        </div>
      </div>
    </div>


    <div class="container">
    <div class="row">
      <div class="col-xs-12">


  <div class="modal fade" id="loginModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            
            <h4 class="modal-title">Login</h4>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
             <form class="form-signin" method="post" action="">
      
     <!-- <div class="form-group">
        <label for="fullName">Name</label>
        <input type="text" id="fullNames" class="form-control" placeholder="Full Name" name="fullnames" required>


      </div> -->
       <style>
    /*.required:after { content:" *"; }
*/

   /* .required label {
    font-weight: bold;
}*/
.required label:after {
    color: #e32;
    content: ' *';
    /*display:inline;*/
}
</style>​


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
        <div>
        <input type="password" id="password1" class="form-control" placeholder="Password" name="password1" required="">
        <!--<span class="help-block">Strong Password</span> -->
      </div>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
       <a href="forgotpassword.php" class="forgot-password"> Forgot the password? </a>
               
          </div>

          <div class="modal-footer">
          
            <button class="btn btn-primary" type="submit" id="loginbtn" name="submit">Login</button>
          <!--  <button class="btn btn-primary" type="submit" data-dismiss="modal">Close</button> -->
            <button class="btn btn-outline-primary" data-target="#signupModal" data-dismiss="modal" data-toggle="modal">Create an Account</button>
            <!--  <button class="btn btn-primary" type="submit" name="submit">Sign Up</button> -->
              

          </div>

        </form>
        </div>

        

      </div>

    </div>
    
  </div>
  </div>
  </div>


        
  


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>


   <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #17a2b8">
            <h4 class="modal-title">Create Accounts</h4>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>

         

          <div class="modal-body" style="height: 450px; overflow-y: auto;">

            <form class="form-signin" method="post">

             <!--  <div class="form-group">
                <label for="inputUserName"><strong>This field is only for staff members</strong></label>
              </div> -->
      
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
                <label for="eMail">Account Type</label>
              </div class="col-sm-4 form-group">
                <!-- <input type="email"  name="email" class="form-control" placeholder="Type" required /> -->
                 <select class="form-control" id="sel1" name="sell">
        <option>Administrator</option>
        <option>Manager</option>
        <option>Sales Person</option>
        
      </select>
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

          <div class="modal-footer"><button class="btn btn-primary" type="submit" name="submit" action="signupsuccess.php">Create</button>
            <button class="btn btn-primary" type="submit" data-dismiss="modal">Close</button>


 <!-- <div class="modal-footer">" type="submit" name="submit" action="signupsuccess.php">Sign Up</button>
              -->
</div>

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






 