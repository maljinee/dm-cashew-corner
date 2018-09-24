<?php
 session_start();
 /*echo json_encode($_SESSION);*/
 if (!($_SESSION['authentication']))
 {
    //if the value was not set, you redirect the user to your login page
    header('Location:theme2.php');
    exit;
  }
  else
  {
    //if the user did login, then you load the page normally
    $_SESSION['authentication']=false;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   -->
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

    </style>

    <style type="text/css">
              .nav-link {
            color: rgba(255,255,255,.75);
              }
    </style>

    <style type="text/css">
            .border-class
            {
              border:thin black solid;
              margin:20px;
              padding:20px;
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


  <body>

    <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top sticky-top bg-dark">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 navbar-right" href="#">DM Cashew Corner</a>  -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4682B4;">
              <a class="navbar-brand" href="#" style="font-family: cursive;"><img src="theme2pics/food_Cashew-Nut-Seed-Fruit-512.png" height="30px" width="30px">DM Cashew Corner</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>

                <form class="form-inline my-2 my-lg-0">
               <!--   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Search for...">
                      <span class="input-group-append">
                        <button class="btn btn-primary" type="button" style="min-width: 40px">
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
                   <!--  <span class="indicator text-warning d-none d-lg-block">
                      <i class="fa fa-fw fa-circle"></i>
                    </span> -->
                  </a>
                  <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <span class="text-success">
                        <strong>
                          <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                      </span>
                      <span class="small float-right text-muted">11:21 AM</span>
                      <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <span class="text-danger">
                        <strong>
                          <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                      </span>
                      <span class="small float-right text-muted">11:21 AM</span>
                      <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <span class="text-success">
                        <strong>
                          <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
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
                      echo($_SESSION['full_name']);
                     $_SESSION['authentication']=true;


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

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark nav-link sidebar navbar-dark bg-dark">
          <div class="sidebar-sticky">

            <ul class="nav flex-column">

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                  <a class="nav-link" href="dashboard.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                  </a>
                 </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
                  <a class="nav-link" href="#">
                    <i class="fa fa-info-circle"></i>
                    <span class="nav-link-text">About</span>
                  </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                  <a class="nav-link" href="suppliers.php">
                    <i class="fa fa-address-card-o"></i>
                    <span class="nav-link-text">Suppliers</span>
                  </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
                  <a class="nav-link" href="customers.php">
                    <i class="fa fa-group"></i>
                    <span class="nav-link-text">Customers</span>
                  </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Employee Duties">
                  <a class="nav-link" href="#">
                    <i class="fa fa-address-book-o"></i>
                    <span class="nav-link-text">Employee Duties</span>
                  </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payroll">
                  <a class="nav-link" href="#">
                    <i class=" fa fa-money"></i>
                    <span class="nav-link-text">Payroll</span>
                  </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">
                  <a class="nav-link" href="#">
                    <i class="fa fa-pencil-square-o"></i>
                    <span class="nav-link-text">Orders</span>
                  </a>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Products">
                  <a class="nav-link" href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="nav-link-text">Products</span>
                  </a>
                </li>

                <?php
                  if($_SESSION['userType'] == 'manager') {
                   ?>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                          <a class="nav-link" href="#">
                            <i class="fa fa-newspaper-o"></i>
                            <span class="nav-link-text">Reports</span>
                          </a>
                        </li>
                  <?php
                  }
                  ?>

            </ul>

            <?php
              if($_SESSION['userType'] == 'manager') {
            ?>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                  <span>Saved reports</span>
                  <a class="d-flex align-items-center text-muted" href="#exampleModal">
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

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Year-end-sale">
                      <a class="nav-link" href="#">
                        <i class="fa fa-file-pdf-o"></i>
                        <span class="nav-link-text">Year-end sale</span>
                      </a>
                    </li>

                  <?php
                  }
                  ?>

            </ul>
          </div>

          <br><br><br><br><br><br><br><br><br><br>
              
        </nav>

        <br><br><br><br>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
               <!--  <h1 class="h2">Please enter required details</h1> -->
                 <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                   <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Required Details</li>
                </ol>
                </nav>
                <div class="btn-toolbar mb-2 mb-md-0">
                </div>
              </div>
  <h4>
        <P style="text-align: center">Please enter required details</P>
  </h4>
  <form class="border-class" method="POST" name="form1" action="./save_sorder.php">

      <div class="form-group row col-md-12 ml-md">



          <label class="col-sm-2 col-form-label"><strong>Customer Name</strong></label>
          <div class="col-sm-4 form-group">
              <input type="text" name="customername" class="form-control" id="customername" placeholder="                                      ">
          </div>

          <div class="col-sm-1">
              <!--   <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label> -->
          </div>

          <div class="col-sm-2">
              <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Order No</strong></label>
          </div>

          <div class="col-sm-3">
              <input type="text" name="abc" class="form-control" id="abc" placeholder="                                      ">

          </div>

      </div>



      <div class="form-group row col-md-12 ml-md">



                <label class="col-sm-2 col-form-label"><strong>Date</strong></label>
                 <div class="col-sm-4 form-group">
                     <input type="date" name="date" class="form-control" id="date-" placeholder="                                      ">
                 </div>

                <div class="col-sm-1">
                <!--   <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label> -->
                </div>

                <div class="col-sm-2">
                     <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Order No</strong></label>
                </div>

                <div class="col-sm-3">
                   <input type="text" name="orderNo" class="form-control" id="orderNo" placeholder="                                      ">

                </div>

          </div>

          <div class="form-group row col-md-12 ml-md">
                <label  class="col-sm-2 col-form-label"><strong>Order Name</strong></label>
                <div class="col-sm-4">
                  <input type="text" name="orderName" class="form-control" id="orderName" placeholder="                                                      ">
                </div>

                <div class="col-sm-1">
                <!--   <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label> -->
                </div>

                <div class="col-sm-2">
                     <label class="col-sm-3 col-form-label"><strong>Item Name</strong></label>
                </div>

                <div class="col-sm-3 form-group">
                 <!--  <label for="sel1">Select list (select one):</label> -->
                   <input type="text" name="itemName" class="form-control" id="itemName" placeholder="                                      ">
                </div>
           </div>

          <div class="form-group row col-md-12 ml-md">
                <label class="col-sm-2 col-form-label"><strong>Invoice No</strong></label>

                <div class="col-sm-4 form-group">
                       <input type="text" name="invoiceNo" class="form-control" id="invoiceNo" placeholder="" />
                </div>

                <div class="col-sm-1">
                <!--   <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label> -->
                </div>

                <div class="col-sm-2">
                     <label  class="col-sm-3 col-form-label"><strong>Quantity</strong></label>
                </div>

                <div class="col-sm-3">
                   <input type="text" name="quantity" class="form-control" id="quantity" placeholder="                                     ">
                </div>

          </div>

              <div class="form-group row col-md-12 ml-md">
                  <label class="col-sm-2 col-form-label"><strong>Delivery Time</strong></label>
                  <div class="col-sm-4 " >
                      <input type="text" name="deliveryTime" class="form-control" id="deliveryTime" placeholder="                                                        Hr">
                  </div>

                  <div class="col-sm-1">
                      <!--   <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label> -->
                  </div>

                  <label  class="col-sm-2 "><strong>Payment Method</strong></label>

                  <div class="col-sm-3 form-group">
                      <select name="paymentMethod" class="form-control" id="paymentMethod">
                          <option>by cash</option>
                          <option>by card</option>
                      </select>
                  </div>


              </div>


            <div class="form-group row col-md-12 ml-md">

                    <div class="col-sm-2 col-form-label">
                         <label  class="col-sm-3 col-form-label"><strong>Delivery Cost</strong></label>
                    </div>

                    <div class="col-sm-4">
                      <input type="text" name="deliveryCost" class="form-control" id="deliveryCost" placeholder="                                    (Rs)">
                    </div>

                    <div class="col-sm-1">
                    <!--   <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label> -->
                    </div>
                <div class="col-sm-2">
                    <label class="col-sm-3 col-form-label"><strong>Item Number</strong></label>
                </div>
                <div class="col-sm-3 form-group">
                    <!--  <label for="sel1">Select list (select one):</label> -->
                    <input type="number" name="itemNumber" class="form-control" id="itemNumber" placeholder="                                      ">
                </div>
            </div>


          <div class="form-group row col-md-12 ml-md">

              <div class="form-group row col-md-12 ml-md">
                  <label class="col-sm-2 col-form-label"><strong>Delivery Method</strong></label>
                  <div class="col-sm-4 form-group">
                      <select name="deliveryMethod" class="form-control" id="deliveryMethod">
                          <option>Delivery by Supplier</option>
                          <option>by Company Vehicles</option>
                      </select>
                  </div>
                  <div class="col-sm-1">
                      <!--   <label for="inputEmail3" class="col-sm-3 col-form-label"><strong>Quantity</strong></label> -->
                  </div>
                  <div class="col-sm-2">
                      <label class="col-sm-3 col-form-label"><strong>Quality</strong></label>
                  </div>
                  <div class="col-sm-3 form-group">
                      <!--  <label for="sel1">Select list (select one):</label> -->
                      <input type="number" name="quality" class="form-control" id="quality" placeholder="                                      ">
                  </div>

              </div>
          </div>

      <div class="form-group row col-md-12 ml-md">
          <label class="col-sm-2 col-form-label"><strong>cost per unit</strong></label>
          <div class="col-sm-4">
              <input type="text" name="costPerUnit" class="form-control" id="costPerUnit" placeholder="                                    (Rs)">
          </div>
      </div>

          <div class="col-md-3">
                <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
           </div>

    </div>

</form>

         

 

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
             <!--  <button class="btn btn-outline-success btn-primary" data-target="#loginModal" data-toggle="modal" data-dismiss="modal">Logout</button>  -->
             <!--   <button class="btn btn-outline-primary" data-target="#loginModal" data-dismiss="modal" data-toggle="modal">Logout</button> -->


               <button class="btn btn-outline-primary" type="submit" data-target="#loginModal" onclick="document.location.href='logout.php'">Logout</button>
              

              
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
      <p>iqdiheihrifwiwiji
      <h1>\sfesfs<

    </script>

    <?php
    /*$_
    ['authentication']=true;*/
    ?>

    <?php
 $_SESSION['authentication']=true;
    ?>



  </body>
</html>


  <!--   <?php
  /* $_SESSION['authentication']=true;*/
    ?> -->



