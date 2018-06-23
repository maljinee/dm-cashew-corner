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
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">   </script>

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
      .nav-link {
    color: rgba(255,255,255,.75);
}
    </style>

    <style type="text/css">
      .table{
        height: 40px;
        overflow-y: scroll;
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
    
</head>
  <body onload="setButtons()">
    <script type="text/javascript">
      function clearfun() {
        alert("called clear");
      }
    </script>

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
              //  echo($_SESSION['usertest']);
              //echo json_encode($_SESSION);
              // echo"thirdpage" . ($_SESSION['name']);
              // echo ($_SESSION['username1']);
              // $username1=$_REQUEST["username1"];
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
              
          

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title=Reports>
          <a class="nav-link" href="#">
            <i class="fa fa-newspaper-o"></i>  
            <span class="nav-link-text">Reports</span>
          </a>
        </li>
             
            </ul>

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
         
            </ul>
          </div>
        </nav>

        <br><br><br><br>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <!-- <h1 class="h2">Handle Supplier Details</h1> -->
            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Handle Customer Details</li>
  </ol>
</nav>
            <div class="btn-toolbar mb-2 mb-md-0">
           
            </div>
          </div>

         <!--  <canvas class="my-4" id="myChart" width="900" height="380"></canvas> -->

         <?php

         $mysqli=new mysqli("localhost","root","","dmcashewcorner");
      

         ?>

  <?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="dmcashewcorner";
   $customerid="";
   $customername="";
   $contactno="";
   $address="";
   $distance="";
   $location="";

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
  //  $my_var = isset($_POST['myPostData']) ? $_POST['myPostData'] : "";
   // $data[0]= isset($_POST['supplierid']) ? $_POST['supplierid'] : "";

    $data[0]=$_POST['customerid'];
    $data[1]=$_POST['customername'];
    $data[2]=$_POST['contactno'];
    $data[3]=$_POST['address'];
    $data[4]=$_POST['distance'];
    $data[5]=$_POST['location'];
    return $data;
  }

  //search
  if(isset($_POST['search']))
  {
    $info=getData();
   // $search_query="SELECT * FROM suppliers WHERE supplierid='$info[0]'";
    $search_query="SELECT * FROM customers WHERE customername='$info[1]'";
    // $search_query="SELECT * FROM suppliers WHERE contactno='$info[2]'";
   //   $search_query="SELECT * FROM suppliers WHERE location='$info[5]'";
    $search_result=mysqli_query($conn, $search_query);
      if($search_result)
      {
        if(mysqli_num_rows($search_result))
        {
          while($rows=mysqli_fetch_array($search_result))
          {
            $customerid=$rows['customerid'];
            $customername=$rows['customername'];
            $contactno=$rows['contactno'];
            $address=$rows['address'];
            $distance=$rows['distance'];
            $location=$rows['location'];
          }
        }else{
          echo("no data are available");
        }
      }else{
        echo("result error");
      } 
  }
    

  //Searhbyname
   if(isset($_POST['searchsn']))
  {
    $info=getData();
   // $search_query="SELECT * FROM suppliers WHERE supplierid='$info[0]'";
    $search_query="SELECT * FROM customers WHERE customername='$info[1]'";
    // $search_query="SELECT * FROM suppliers WHERE contactno='$info[2]'";
   //   $search_query="SELECT * FROM suppliers WHERE location='$info[5]'";
    $search_result=mysqli_query($conn, $search_query);
      if($search_result)
      {
        if(mysqli_num_rows($search_result))
        {
          while($rows=mysqli_fetch_array($search_result))
          {
            $customerid=$rows['customerid'];
            $customername=$rows['customername'];
            $contactno=$rows['contactno'];
            $address=$rows['address'];
            $distance=$rows['distance'];
            $location=$rows['location'];
          }
        }else{
          echo("no data are available");
        }
      }else{
        echo("result error");
      } 
  }



  //searchbycontactno
  if(isset($_POST['searchcn']))
  {
    $info=getData();
   // $search_query="SELECT * FROM suppliers WHERE supplierid='$info[0]'";
    $search_query="SELECT * FROM customers WHERE contactno='$info[2]'";
    // $search_query="SELECT * FROM suppliers WHERE contactno='$info[2]'";
   //   $search_query="SELECT * FROM suppliers WHERE location='$info[5]'";
    $search_result=mysqli_query($conn, $search_query);
      if($search_result)
      {
        if(mysqli_num_rows($search_result))
        {
          while($rows=mysqli_fetch_array($search_result))
          {
            $customerid=$rows['customerid'];
            $customername=$rows['customername'];
            $contactno=$rows['contactno'];
            $address=$rows['address'];
            $distance=$rows['distance'];
            $location=$rows['location'];
          }
        }else{
          echo("no data are available");
        }
      }else{
        echo("result error");
      } 
  }


  //insert
  if(isset($_POST['insert'])){
    $info=getData();
    $insert_query="INSERT INTO customers(customerid,customername,contactno,address,distance,location)VALUES('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]')";
    try{
      $insert_result=mysqli_query($conn,$insert_query);
      if($insert_result)
      {
        if(mysqli_affected_rows($conn)>0){
      
          echo("data inserted successfully");
        }else{
          echo ("data are not inserted");
        }
      }
    }catch(Exception $ex){
      echo("error inserted".$ex->getMessage());
    }
  }

  //delete
  if(isset($_POST['delete'])){
    $info=getData();
    $delete_query="DELETE FROM customers WHERE customerid='$info[0]'";
    try{
      $delete_result=mysqli_query($conn,$delete_query);
      if($delete_result){
        if(mysqli_affected_rows($conn)>0)
        {
          echo("data deleted");
        }else{
          echo("data not deleted");
        }
      }
    }catch(Exception $ex){
      echo ("error in delete".$ex->getMessage());
    }
  }

  //edit
  if(isset($_POST['update'])){
    $info=getData();
    $update_query="UPDATE customers SET customername='$info[1]',contactno='$info[2]',address='$info[3]',distance='$info[4]',location='$info[5]' WHERE customerid='$info[0]'";
    try{
      $update_result=mysqli_query($conn,$update_query);
      if($update_result){
        if(mysqli_affected_rows($conn)>0){
          echo("data updated");
        }else{
          echo("data not updated");
        }
      }
    }catch(Exception $ex){
      echo ("error in update".$ex->getMessage());
    }
  }



   ?>

   

  

  <form onreset="cleartheform()" class="border-class" id="myForm" method="post" action="customers3handlecustomers.php">
    
      <style type="text/css">
      
      .btn{min-width:90px;}
    </style>

     
     

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Customer Id</strong></label>
    <div class="col-sm-5">
      <input type="number" name="customerid" onkeyup="searchbyId()" class="form-control" id="customerid" placeholder="" value="<?php echo($customerid);?>">
    </div>
 <!--  <script type="text/javascript">
    window.onload = function() {
   document.getElementById('supplierid').disabled = true;
};

</script>
  -->
  
    <?php /*echo $row ['supplier_id'];*/ ?>
    
    <div class="col-sm-4">
         <input type="submit" name="insert" id="add" value="Add" disabled="disabled" onclick="alertAdd()" class="btn btn-primary btn-md">
      

   
    <!-- Example split danger button -->
<div class="btn-group col-sm-4">
 <!--  <button type="button" class="btn btn-primary">Search by</button> -->
<!--   <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="min-width: 40px"> -->
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <input type="submit" name="searchsn" value="Customer Name" class="btn btn-primary btn-md dropdown-item" style="min-width: 150px">
    <input type="submit" name="searchcn" value="Contact no" class="btn btn-primary btn-md dropdown-item" style="min-width: 150px">
   
  </div>
</div> 

 </div> 

 
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"><strong>Customer Name</strong></label>
    <div class="col-sm-5">
      <input type="text" name="customername"  onkeyup="searchbyName()" class="form-control" id="customername" placeholder="" onkeypress="show1();show2();" value="<?php echo($customername);?>">
    </div>
    <div class="col-sm-4" id="">

     

        <input type="submit" 
         name="update" id="update" onclick="updateConfirm()" value="Update" disabled="disabled" class="btn btn-primary">
       <!--  <button type="submit" class="btn btn-primary">Update</button> -->

       
    </div> 





  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Contact No</strong></label>
    <div class="col-sm-5">
      <input type="text" name="contactno" onkeyup="searchbyContactno()" class="form-control" id="contactno" placeholder="" onclick="show1(),show2()" value="<?php echo($contactno);?>" onfocus="">
    </div>
      <div class="col-sm-4">
        <input type="submit" name="search" value="Search" id="search" onclick="show1()"  class="btn btn-primary">
      <!--   <button type="submit" class="btn btn-primary">View</button> -->
    </div> 
 


  <!--   <input type="button" value="button" id="two" onclick="show1()" disabled="disabled"/>
<input type="action" value="button" id="three" disabled="disabled"/> -->

  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Address</strong></label>
    <div class="col-sm-5">
      <input type="text" name="address" onkeyup="searchbyAddress()" class="form-control" id="address" placeholder="" onclick="show1(),show2()" value="<?php echo($address);?>" onfocus="">
    </div>
    <div class="col-sm-4">
       <input type="reset" name="Reset" id="clear" value="Clear" class="btn btn-primary"> 
       <!--  <button type="submit" class="btn btn-danger">Delete</button> -->
       <!-- <button type="reset" value="Reset">Reset</button>  -->
    </div> 
      


  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Distance</strong></label>
    <div class="col-sm-5">
      <input type="text" name="distance" onkeyup="searchbyDistance()" class="form-control" id="distance" onclick="show1(),show2()" placeholder="                                                                               Km" value="<?php echo($distance);?>" onfocus="">
       </div>  
        <div class="col-sm-4">
        <input type="submit" onclick="confirmDlt()" name="delete" id="delete" value="Delete" class="btn btn-danger">
       <!--  <button type="submit" class="btn btn-danger">Delete</button> -->
    </div> 
       
  
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label"><strong>Location</strong></label>
    <div class="col-sm-5">
      <input type="text" name="location" onkeyup="searchbyLocation()" class="form-control" id="location" placeholder="" value="<?php echo($location);?>" onfocus="" onclick="show1(), show2()">
    </div>


</div>

   <div>
     

    </div>

<br><br>
         
 
     <div class="table-responsive" style="overflow-y: auto;height: 250px">
            <table id="table" class="table table-bordered table-hover  table-sm"  >
              <thead>
                <tr>
                 <!--  <th>Number</th> -->
                  <th>Customer Id</th>
                  <th>Customer Name</th>
                  <th>Contact No</th>
                  <th>Address</th>
                  <th>Distance</th>
                  <th>Location</th>
               

                  <!-- <th>Header</th> -->
                </tr>
              </thead>
              <tbody height:"40px" overflow-y:"scroll">
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

  $mysqli=new mysqli("localhost","root","","dmcashewcorner");

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dmcashewcorner");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



  

 $sql="SELECT 
          c.customerid,c.customername,c.contactno,c.address,c.distance,c.location FROM

      customers c

        

         "; 




if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
            echo "<form method='post'>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               /* echo "<td>" . $row['counter-increment: my-sec-counter; content: "Section " counter(my-sec-counter) ". ";'] . "</td>";*/
              /*  echo "<td><input type='text' value='" . $row['supplierid'] . "' name='supplierid' id='supplierid'></td>";
                echo "<td><input type='text' value='" . $row['suppliername'] . "' name='suppliername' id='suppliername'></td>";
                echo "<td><input type='text' value='" . $row['contactno'] . "' name='contactno' id='contactno'></td>";
                echo "<td><input type='text' value='" . $row['address'] . "' name='address' id='address'></td>";
                echo "<td><input type='text' value='" . $row['distance'] . "' name='distance' id='distance'></td>";
                echo "<td><input type='text' value='" . $row['location'] . "' name='location' id='location'</td>";
                echo "<td><input class='btn btn-primary' type='submit' name='update' id='update' value='Edit'></td>";
*/
               /*  type="submit" name="update" id="update" value="Update" disabled="disabled" class="btn btn-primary
*/

               /* class="btn btn-primary"*/

               /* echo "<td><input type='text' contenteditable='false' value='" . $row['supplierid'] . "' name='id'></td>";*/

                echo "<td>" . $row['customerid'] . "</td>";
                echo "<td>" . $row['customername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['distance'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
               /* echo "<td><input class='btn btn-primary' type='submit' name='update' id='update' value='Edit'></td>";*/
                

            echo "</tr>";
        }

        echo"</form>";

      



        echo "</table>";

       
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</tr>

</tbody>          


</form>
</table>

<script type="text/javascript">
  function alertAdd(){
    confirm("Add Data?");
  }
</script>

<script type="text/javascript">
  function confirmDlt(){
    confirm("Delete selected Data?");
  }
</script>

<script type="text/javascript">
  function updateConfirm(){
    confirm("Update Data?");
  }
</script>





<script>

function setButtons() {
  document.getElementById("delete").disabled = true;
  document.getElementById("clear").disabled = true;
 // alert("page loaded");
}

function searchbyId() {
  var input, filter, table, tr, td, i;

  input = document.getElementById("customerid");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function searchbyName() {
  var input, filter, table, tr, td, i;

  input = document.getElementById("customername");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


function searchbyContactno() {
  var input, filter, table, tr, td, i;

  input = document.getElementById("contactno");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function searchbyAddress() {
  var input, filter, table, tr, td, i;

  input = document.getElementById("address");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


function searchbyDistance() {
  var input, filter, table, tr, td, i;

  input = document.getElementById("distance");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

function searchbyLocation() {
  var input, filter, table, tr, td, i;

  input = document.getElementById("location");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>


<script type="text/javascript">
  var table = document.getElementById('table'),rIndex;

  for(var i=1; i < table.rows.length; i++)
  {
    table.rows[i].onclick = function()
    {
       rIndex=this.rowIndex;
      // console.log(rIndex);
      document.getElementById("customerid").value=this.cells[0].innerHTML;
      document.getElementById("customername").value=this.cells[1].innerHTML;
      document.getElementById("contactno").value=this.cells[2].innerHTML;
      document.getElementById("address").value=this.cells[3].innerHTML;
      document.getElementById("distance").value=this.cells[4].innerHTML;
      document.getElementById("location").value=this.cells[5].innerHTML;
      enableDeleteBtn();
      enableClearBtn();
      enableUpdateBtn();
      disableCtrlBtns();
    }
  }

  function enableDeleteBtn() {
    if (document.getElementById("delete").disabled == true){
      document.getElementById("delete").disabled = false;
    }
  }
  function enableClearBtn() {
    if (document.getElementById("clear").disabled == true){
      document.getElementById("clear").disabled = false;
    }
  }
  function enableUpdateBtn() {
    if (document.getElementById("update").disabled == true){
      document.getElementById("update").disabled = false;
    }
  }
  function disableCtrlBtns() {
    // add btn
    if (document.getElementById("add").disabled == false){
      document.getElementById("add").disabled = true;
    }
    // search btn
    if (document.getElementById("search").disabled == false){
      document.getElementById("search").disabled = true;
    }
  }


//validate();


</script>



 <script type="text/javascript">
function cleartheform() {
  document.getElementById("delete").disabled = true;
  document.getElementById("update").disabled = true;
  document.getElementById("search").disabled = false;


}
</script>

<script type="text/javascript">

function show1()
{
    document.getElementById("update").disabled=false;
}

</script>

<script type="text/javascript">
  function confirmdlt(){}
</script>

 <!-- <script type="text/javascript">
function show2()
{
    document.getElementById("clear").disabled=false;
}

</script> -->


<!--  <script type="text/javascript">
function show3()
{
    document.getElementById("delete").disabled=false;
}

</script>
 -->





<script type="text/javascript">
jQuery("#add").prop('disabled', true);

var toValidate = jQuery('#customername, #contactno, #address, #location'),
    valid = false;
toValidate.keyup(function () {
    if (jQuery(this).val().length > 0) {
        jQuery(this).data('valid', true);
    } else {
        jQuery(this).data('valid', false);
    }
    toValidate.each(function () {
        if (jQuery(this).data('valid') == true) {
            valid = true;
        } else {
            valid = false;
        }
    });
    if (valid === true) {
        jQuery("#add").prop('disabled', false);
    } else {
        jQuery("#add").prop('disabled', true);
    }
});

</script>


     <?php
        
     

      ?> 
 
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
        <input type="" id="username1" class="form-control" placeholder="User Name" name="username1" required="">
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
        $db=new PDO('mysql:host=localhost;dbname=dmcashewcorner;charset=utf8mb4', 'root', '');
 
        if(isset($_POST['supplierid'])&&($_POST['suppliername'])&&($_POST['contactno'])&&($_POST['address'])&&($_POST['distance'])&&($_POST['location']))  
        {
                                 

      //$value = isset($array['username']) ? $array['username'] : '';

       $supplierid=$_POST["supplierid"];
       $suppliername=$_POST["suppliername"];
       $contactno=$_POST["contactno"];
       $address=$_POST["address"];
       $distance=$_POST["distance"];
       $location=$_POST["location"];

     

    $db=new PDO('mysql:host=localhost;dbname=dmcashewcorner;charset=utf8mb4', 'root', '');

    $statement=$db->prepare("INSERT INTO suppliers(sup_id,sup_name,tp_no,address,distance,location)VALUES(?,?,?,?,?,?)");
    $statement->execute(array($supplierid,$suppliername,$contactno,$address,$distance,$location));
    $rows = $statement->rowCount();
    }
    
    ?>

    <?php
    $_SESSION['authentication']=true;
    ?>


  </body>
</html>




