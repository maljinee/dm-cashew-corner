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
    //if the user did login, then you load the page normally
    $_SESSION['authentication']=false;
  }
?>

<?php
  include('connect.php');
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
     
      	.form
      	{
        	vertical-align: right;
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

    <style type="text/css">
    	.nav-link 
      	{
        	color: rgba(255,255,255,.75);
	 	}
    </style>

    <style>
    	table 
    	{
    		width:100%;
      	}

   	 	table, th, td {
    		border: 1px solid black;
   			border-collapse: collapse;
		}

		th, td {
    		padding: 15px;
    		text-align: left;
		}

		table#t01 tr:nth-child(even) {
    		background-color: #eee;
		}

		table#t01 tr:nth-child(odd) {
   			background-color: #fff;
		}

		table#t01 th {
   	 		background-color: black;
   			color: white;
		}
	</style>

	<style>
		table, th, td {
   			border: 1px solid black;
    		border-collapse: collapse;
		}

		th, td {
    		padding: 15px;
    		text-align: left;
		}

		table#t01 {
    		width: 100%;    
    		background-color: #f1f1c1;
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

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4682B4;">
      <a class="navbar-brand" href="#" style="font-family: cursive;"><img src="theme2pics/food_Cashew-Nut-Seed-Fruit-512.png" height="30px" width="30px">DM Cashew Corner</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <style type="text/css">
           .btn{width:40px;}
          </style>

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

          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Suppliers">
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

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title=Reports>
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
         
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Year-end sale">
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
        <!-- <h1 class="h2">Handle Supplier Details</h1> -->
        <nav aria-label="breadcrumb">
   
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="suppliers.php">Suppliers</a></li>
        <li class="breadcrumb-item active" aria-current="page">Search Suppliers by Clues</li>
      </ol>
    </nav>
        
      <div class="btn-toolbar mb-2 mb-md-0">
            
      </div>
    </div>

    <!--  <canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->

        <?php
          $mysqli=new mysqli("localhost","root","","dmcashewcorner");
        ?>

        
  <form class="border-class" method="post" action="">
    <style type="text/css">
      .btn{min-width:90px;}
    </style>

    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Search By</strong></label>

   
      <div class="col-sm-3 form-group">
        <select class="form-control" id="sel1" name="sell">
          <option value="0">Enter a value</option>
          <option value="1">Order No</option>
          <option value="2">Supplier Name</option>
          <option value="3">Phone No</option>
          <option value="4">Product Type</option>
          <option value="5">Suppler Address</option>
          <option value="6">Last Order Name</option>
          <option value="7">Last Order Date</option>
          <option value="8">Last Order Amount</option>
        </select>

      </div>

      <script type="text/javascript">
        $(document).ready(function() {
  
          $("#sell").change(function() {
    
            var el = $(this) ;
    
            if(el.val() === "Order No" ) {
            $("#status").append("  <input type="text" name="suppliername" class="form-control" id="suppliername" placeholder="" value="<?php echo($suppliername);?>">");
          }
            else if(el.val() === "MANUAL" ) {
            $("#status option:last-child").remove() ; }
          });
  
        });

      </script>

      <?php

          $servername="localhost";
          $username="root";
          $password="";
          $dbname="dmcashewcorner";
         
          $porder_no="";
          $suppliername="";
          $contactno="";
          $item_name="";
          $address="";
          $order_name="";
          $date="";
          $quantity="";
          //$sell="sell";

          //echo $porder_n
          /*echo $row ['supplier_id'];*/ ?>
    
      <div class="col-sm-4">  
        <div class="btn-group col-sm-4">
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    </div>
    </div> 
  </div>






 
  

  

<div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Supplier Name</strong></label>
      <div class="col-sm-4">
        <input type="text" name="suppliername" class="form-control" id="suppliername" placeholder="" value="<?php echo($suppliername);?>">
            </div>
         <?php 
         ?>



           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 
  </div>

    
  
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Order No</strong></label>
      <div class="col-sm-4">
        <input type="text" name="porder_no" class="form-control" id="porder_no" placeholder="" value="<?php echo($porder_no);?>">

            </div>
         <?php 
         ?>

           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 

  </div>

  <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Contact No</strong></label>
      <div class="col-sm-4">
        <input type="text" name="contactno" class="form-control" id="contactno" placeholder="" value="<?php echo($contactno);?>">

            </div>
         <?php 
         ?>

           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 

  </div>

  <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Product Type</strong></label>
      <div class="col-sm-4">
        <input type="text" name="item_name" class="form-control" id="item_name" placeholder="" value="<?php echo($item_name);?>">

            </div>
         <?php 
         ?>

           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 

  </div>

   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Supplier Address</strong></label>
      <div class="col-sm-4">
        <input type="text" name="address" class="form-control" id="address" placeholder="" value="<?php echo($address);?>">

            </div>
         <?php 
         ?>

           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 

  </div>

   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Order Name</strong></label>
      <div class="col-sm-4">
        <input type="text" name="order_name" class="form-control" id="order_name" placeholder="" value="<?php echo($order_name);?>">

            </div>
         <?php 
         ?>

           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 

  </div>

   <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Order Date</strong></label>
      <div class="col-sm-4">
        <input type="date" name="date" class="form-control" id="date" placeholder="" value="<?php echo($date);?>">

            </div>
         <?php 
         ?>

           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 

  </div>

  <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Amount</strong></label>
      <div class="col-sm-4">
        <input type="text" name="quantity" class="form-control" id="quantity" placeholder="" value="<?php echo($quantity);?>">

            </div>
         <?php 
         ?>

           <div class="col-sm-2">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 

  </div>
</div>

  

    <br><br>

     <?php
        if (isset($_POST['sell'])) { // If the id post variable is set
          $sell = $_POST['sell'];
        } else { // If the id post variable is not set
          $sell = 1;
      } ?>

       <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="8"){
          echo "";

        
      ?>
    
      <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Order Name</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
      </thead>
    <tbody>
    <tr>

      <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";
            $suppliername="";
            $address="";
            $order_name="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];
            $data[2]=$_POST['contactno'];
            $data[3]=$_POST['item_name'];
            $data[4]=$_POST['address'];
            $data[5]=$_POST['order_name'];
            $data[6]=$_POST['date'];
            $data[7]=$_POST['quantity'];
            return $data;
          }

          //search
          if(isset($_POST['date']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid INNER JOIN purchaseorderlines pol ON po.porder_no=pol.porder_no WHERE pol.quantity='$info[7]'";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>
    </tbody>
</tr>
    </table>
  </div>

      
    <?php
    }
    ?>


     <?php
        if (isset($_POST['sell'])) { // If the id post variable is set
          $sell = $_POST['sell'];
        } else { // If the id post variable is not set
          $sell = 1;
      } ?>

       <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="7"){
          echo "";

        
      ?>
    
      <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Order Name</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
      </thead>
    <tbody>
    <tr>

      <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";
            $suppliername="";
            $address="";
            $order_name="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];
            $data[2]=$_POST['contactno'];
            $data[3]=$_POST['item_name'];
            $data[4]=$_POST['address'];
            $data[5]=$_POST['order_name'];
            $data[6]=$_POST['date'];
            return $data;
          }

          //search
          if(isset($_POST['date']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid INNER JOIN purchaseorderlines pol ON po.porder_no=pol.porder_no WHERE po.date='$info[6]'";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>
    </tbody>
</tr>
    </table>
  </div>

      
    <?php
    }
    ?>

    <?php
        if (isset($_POST['sell'])) { // If the id post variable is set
          $sell = $_POST['sell'];
        } else { // If the id post variable is not set
          $sell = 1;
      } ?>

       <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="6"){
          echo "";

        
      ?>
    
      <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Order Name</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
      </thead>
    <tbody>
    <tr>

      <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";
            $suppliername="";
            $address="";
            $order_name="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];
            $data[2]=$_POST['contactno'];
            $data[3]=$_POST['item_name'];
            $data[4]=$_POST['address'];
            $data[5]=$_POST['order_name'];
            return $data;
          }

          //search
          if(isset($_POST['item_name']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid INNER JOIN purchaseorderlines pol ON po.porder_no=pol.porder_no WHERE po.order_name='$info[5]'";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>
    </tbody>
</tr>
    </table>
  </div>

      
    <?php
    }
    ?>


    <?php
        if (isset($_POST['sell'])) { // If the id post variable is set
          $sell = $_POST['sell'];
        } else { // If the id post variable is not set
          $sell = 1;
      } ?>

       <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="5"){
          echo "";

        
      ?>
    
      <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Order Name</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
      </thead>
    <tbody>
    <tr>

      <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";
            $suppliername="";
            $address="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];
            $data[2]=$_POST['contactno'];
            $data[3]=$_POST['item_name'];
            $data[4]=$_POST['address'];
            return $data;
          }

          //search
          if(isset($_POST['item_name']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid INNER JOIN purchaseorderlines pol ON po.porder_no=pol.porder_no WHERE s.address='$info[4]'";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>
    </tbody>
</tr>
    </table>
  </div>

      
    <?php
    }
    ?>


    <?php
        if (isset($_POST['sell'])) { // If the id post variable is set
          $sell = $_POST['sell'];
        } else { // If the id post variable is not set
          $sell = 1;
      } ?>

       <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="4"){
          echo "";

        
      ?>
    
      <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Order Name</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
      </thead>
    <tbody>
    <tr>

      <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";
            $suppliername="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];
            $data[2]=$_POST['contactno'];
            $data[3]=$_POST['item_name'];
            return $data;
          }

          //search
          if(isset($_POST['item_name']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid INNER JOIN purchaseorderlines pol ON po.porder_no=pol.porder_no INNER JOIN items it ON pol.item_no=it.item_no WHERE it.item_name='$info[3]'";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>
    </tbody>
</tr>
    </table>
  </div>

      
    <?php
    }
    ?>




  

    <!-- <div class="col-sm-4">
        <input type="submit" name="Search" value="Search" class="btn btn-primary">
    </div> 
 -->
  <?php
        if (isset($_POST['sell'])) { // If the id post variable is set
          $sell = $_POST['sell'];
        } else { // If the id post variable is not set
          $sell = 1;
      } ?>

       <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="3"){
          echo "";

        
      ?>
    
      <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Last Order Name</th>
            <th>Last Order Date</th>
            <th>Last Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
      </thead>
    <tbody>
    <tr>

      <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";
            $suppliername="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];
            $data[2]=$_POST['contactno'];
            return $data;
          }

          //search
          if(isset($_POST['suppliername']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid INNER JOIN purchaseorderlines pol ON po.porder_no=pol.porder_no WHERE s.contactno='$info[2]' ORDER BY date DESC LIMIT 1 OFFSET 1";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>
    </tbody>
</tr>
    </table>
  </div>

      
    <?php
    }
    ?>






    <br><br><br>
      <?php
        if (isset($_POST['sell'])) { // If the id post variable is set
          $sell = $_POST['sell'];
        } else { // If the id post variable is not set
          $sell = 1;
      } ?>

       <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="2"){
          echo "";

        
      ?>
    
      <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Last Order Name</th>
            <th>Last Order Date</th>
            <th>Last Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
      </thead>
    <tbody>
    <tr>

      <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";
            $suppliername="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];

            $data[2]=$_POST['contactno'];
            return $data;
            return $data;
          }

          //search
          if(isset($_POST['suppliername']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid INNER JOIN purchaseorderlines pol ON po.porder_no=pol.porder_no WHERE s.suppliername='$info[1]' ORDER BY date DESC LIMIT 1 OFFSET 1";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>
    </tbody>
</tr>
    </table>
  </div>

      
    <?php
    }
    ?>
 


      <?php
        if (isset($_POST['sell'])) if($_POST['sell']=="1"){
      ?>

    <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            
            <th>Order No</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Order Name</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
        </thead>


      <tbody>
        <tr>

      <!-- <style>
        body {
          body {
            /* Set "my-sec-counter" to 0 */
            counter-reset: my-sec-counter;
          }

          tr::before {
            /* Increment "my-sec-counter" by 1 */
            counter-increment: my-sec-counter;
            content: "Section " counter(my-sec-counter) ". ";
          } 
        }

      </style>  -->
     
          <?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="dmcashewcorner";
            $porder_no="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          
          //get ddata frotheform
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            $data[1]=$_POST['suppliername'];
            $data[2]=$_POST['contactno'];
            return $data;
            return $data;
          }

          //search
          if(isset($_POST['porder_no']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid
                INNER JOIN purchaseorderlines pol  ON po.porder_no=pol.porder_no WHERE po.porder_no = '$info[0]'";
   
          if($result = mysqli_query($conn, $search_query)){
            if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
              while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "</tr>";
              }
            echo"</form>";
          echo "</table>";
          }
          mysqli_free_result($result);
          } else{
            echo "No records matching your query were found.";
          }
          } else{
          // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
 
          // Close connection
          mysqli_close($conn);
          ?>

          <?php
          }
          ?>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  <div></div>
</form>
  </tr>

  </tbody>          

  <?php
    if (isset($_POST['sell'])) if($_POST['sell']=="2"){
      echo "";
      ?>
    
    <div class="table-responsive" style="overflow-y: auto;height: 250px">
      <table class="table  table-sm">
        <thead>
          <tr>
            <!--  <th>Number</th> -->
            <th>Order Nooo</th>
            <th>Supplier Id</th>
            <th>Supplier Name</th>
            <th>Telephone No</th>
            <th>Order Name</th>
            <th>Order Date</th>
            <th>Order Amount</th>
            <th>Location</th>
            <th>Address</th>
            <th>Distance</th>
            <!-- <th>Header</th> -->
          </tr>
        </thead>
      <tbody>
        <tr>

      <style>
        body {
          body {
            /* Set "my-sec-counter" to 0 */
            counter-reset: my-sec-counter;
          }

          tr::before {
            /* Increment "my-sec-counter" by 1 */
            counter-increment: my-sec-counter;
            content: "Section " counter(my-sec-counter) ". ";
          } 
        }

      </style>

       <?php
        // var sell;
         ?>
      <?php
   //  $sell=$_POST['sell'];
      ?>
        
    
     
    <?php
          $servername="localhost";
          $username="root";
          $password="";
          $dbname="dmcashewcorner";
         
          $porder_no="";

          mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

          //connect to mysql database
          try{
            $conn=mysqli_connect($servername,$username,$password,$dbname);
          }catch(MySQLi_Sql_Exception $ex){
            echo("error in connecting");
          }

          //get ddata frotheform
          
          function getData()
          {
          $data=array();
            $data[0]=$_POST['porder_no'];
            return $data;
          }

          //search
          if(isset($_POST['porder_no']))
          {
            $info=getData();
              $search_query="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location,po.order_name,po.date,pol.quantity,po.porder_no FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid = po.supplierid
                INNER JOIN purchaseorderlines pol  ON po.porder_no=pol.porder_no WHERE po.porder_no = '$info[0]'";
   
            /*$search_result=mysqli_query($conn, $search_query);
              if($search_result)
              {
                if(mysqli_num_rows($search_result))
                  {
                  while($row=mysqli_fetch_array($search_result))
                  {*/

                    if($result = mysqli_query($conn, $search_query)){
    if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['porder_no'] . "</td>";
                echo "<td>" . $row['supplierid'] . "</td>";
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['order_name'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['quantity'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                
                    /*$supplierid=$rows['supplierid'];
                    $suppliername=$rows['suppliername'];
                    $contactno=$rows['contactno'];
                    $address=$rows['address'];
                    $distance=$rows['distance'];
                    $location=$rows['location'];*/
                     echo "</tr>";
        }

        echo"</form>";

      



        echo "</table>";
                 /*  }
                 }else{
                   echo("no data are available");
                 }
               }else{
                 echo("result error");
               }*/
              }
             mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
   // echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>





      <?php
    }
    ?>
</form>
</table>



  
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
            <button class="btn btn-outline-primary" type="submit" data-target="#loginModal" onclick="document.location.href='logout.php'">Logout</button>
            
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
        .required label:after {
          color: #e32;
          content: ' *';
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
        <button class="btn btn-outline-primary" data-target="#signupModal" data-dismiss="modal" data-toggle="modal">Create an Account</button>
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
      /*var ctx = document.getElementById("myChart");
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
        }*/
      }
    </script>


    <?php
    $_SESSION['authentication']=true;
    ?>

  </body>
</html>




