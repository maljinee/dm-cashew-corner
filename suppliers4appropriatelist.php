<?php
 session_start();

 /*echo json_encode($_SESSION);
*/

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
  $mysqli=new mysqli("localhost","root","","dmcashewcorner");

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
      .nav-link {
    color: rgba(255,255,255,.75);
}
    </style>

    <style>       
         table {
  overflow: hidden;
}

tr:hover {
  background-color: #ADD8E6;
}

tr  {
  position: relative;
}
tr:hover::after,
/*th:hover::after*/ {
  content: "";
  position: absolute;
  background-color: #ADD8E6;
  left: 0;
  top: -5000px;
  height: 10000px;
  width: 100%;
  z-index: -1;
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
      <!--    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
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
          <li class="nav-item navbar-right">
            <a class="nav-link" href=""> 
              <?php
              echo($_SESSION['full_name']);
             $_SESSION['authentication']=true;
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
        <nav class="col-md-2 d-none d-md-block bg-dark nav-link sidebar navbar-dark bg-dark">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <!-- <li class="nav-item active">
                <a class=" nav-link" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="monitor"></span>
                  About
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users" ></span>
                  Suppliers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="user"></span>
                  Customers
                </a>
              </li>
            
               <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="book"></span>
                  Employee Duties
                </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="dollar-sign"></span>
                  Payroll
                </a>
              </li>
              
              
              

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li> -->

               <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="dashboard.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
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

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reports">
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
             <!--  <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
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
            </ul>
          </div>
        </nav>

        <br><br><br><br>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <!-- <h1 class="h2">Suppliers</h1> -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="suppliers.php">Suppliers</a></li>
               <li class="breadcrumb-item"><a href="suppliers2requiredDetails.php">Required Details</a></li>
               
                <li class="breadcrumb-item active" aria-current="page">Appropriate Supplier List</li>
              </ol>
            </nav>
            <br><br><br>

            
            
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">

          <!--  <button class="btn btn-primary" type="submit" data-dismiss="modal">Close</button> -->
           <!--  <button class="btn btn-sm btn-outline-secondary" type="submit" onClick="document.location.href='suppliers2requiredDetails.php'" action="suppliers2requiredDetails.php">Most appropriate supplier list and Place orders</button>

           <button class="btn btn-sm btn-outline-secondary" type="submit" onClick="document.location.href='suppliers3handleSuppliers.php'" action="suppliers3handleSuppliers.php">Handle Supplier Details</button>
          
                 -->  
          
          
                  
            
              


               <!--  <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button> -->
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

         <!--  <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
 -->
          <h3>Appropriate Supplier List</h3>
<!-- 
          table-striped
 -->
          <div class="table-responsive">
            <table class="table  table-sm">
              <thead>
                <tr>
                 <!--  <th>Number</th> -->
                  <th>Supplier Name</th>
                  <th>Telephone No</th>
                  <th>Location</th>
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

  $mysqli=new mysqli("localhost","root","","dmcashewcorner");

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "dmcashewcorner");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


/*$sql="SELECT
  Suppliers.suppliername, Suppliers.contactno,
  Suppliers.location, event.event_id, event.type
FROM
  student, event
  LEFT JOIN score ON student.student_id = score.student_id
          AND event.event_id = score.event_id
WHERE
  score.score IS NULL
ORDER BY
  student.student_id, event.event_id";

  SELECT pa.ProjectID, p.Project_Title, a.Account_ID, a.Username, a.Access_Type, c.First_Name, c.Last_Name
      FROM Project_Assigned pa
INNER JOIN Account a
        ON pa.AccountID = a.Account_ID
INNER JOIN Project p
        ON pa.ProjectID = p.Project_ID
INNER JOIN Clients c
        ON a.Account_ID = c.Account_ID
     WHERE a.Access_Type = 'Client';*/

   /* $sql="SELECT 
          supplierid,AVG(profit_per_unit) FROM table GROUP BY supplierid

      suppliers s
      
        INNER JOIN purchaseorders po
          ON s.supplierid=po.supplierid
        INNER JOIN purchaseorderlines pol
          ON po.porder_no=pol.porder_no
        WHERE
          pol.profit_per_unit<500
        ORDER BY  
          profit_per_unit DESC";  */
        // session_start();
       //  echo $_SESSION['sell'];
        //  ($_SESSION['sell']);
        //  $_SESSION['sell']=true;
       //  $x = $_POST['sell'];
       //  $x =$_SESSION['sell'];
         $value=$_POST['sell'];
//$value= '01';
        //  echo $value;
         /* echo "maljinee";*/

 $sql="SELECT 
          s.suppliername,s.contactno,s.location FROM

      suppliers s

        INNER JOIN purchaseorders po
  

          ON s.supplierid=po.supplierid
        INNER JOIN purchaseorderlines pol
          ON po.porder_no=pol.porder_no
        WHERE

       pol.(SELECT AVG(profit_per_unit) FROM purchaseorderlines pol  GROUP BY s.suppliername)<500


         /* pol.profit_per_unit<500*/

        ORDER BY  
          profit_per_unit DESC"; 

  $sql="SELECT s.suppliername,s.contactno,s.location,AVG(profit_per_unit) AS profit_per_unit
  FROM suppliers s 
  INNER JOIN purchaseorders po
  

        ON s.supplierid=po.supplierid
        INNER JOIN (SELECT*FROM purchaseorderlines WHERE item_no = '" . $value . "') pol
          ON po.porder_no=pol.porder_no

          GROUP BY s.suppliername
          ORDER BY profit_per_unit DESC";


          

          /* INNER JOIN (SELECT*FROM purchaseorderlines WHERE item_no=' " . $value . "') pol*/


          /*

          SELECT s.suppliername,s.contactno,s.location,AVG(profit_per_unit) AS profit_per_unit FROM suppliers s INNER JOIN purchaseorders po ON s.supplierid=po.supplierid 
INNER JOIN (SELECT*FROM purchaseorderlines WHERE item_no='01') pol ON po.porder_no=pol.porder_no GROUP BY s.suppliername ORDER BY profit_per_unit DESC


          */

/*(
    SELECT ((sum(col1) + sum(col2))/count(*))
    FROM test
      WHERE uid=5
    )  */
//group by supplier id avarage column name
   /* SELECT ID, AVG(number) FROM table GROUP BY ID
*/

        /*  purchaseorderlines,purchaseorders,suppliers
          INNER JOIN purchaseorderlines ON purchaseorderlines.porder_no=purchaseorders.porder_no
          AND suppliers.supplierid=purchaseorders.supplierid
          WHERE
          purchaseorderlines.profit_per_unit IS NULL
          ORDER BY
          purchaseorderlines.profit_per_unit";


          $sql="SELECT 
          suppliers.suppliername,suppliers.contactno,suppliers.location FROM
          purchaseorderlines,purchaseorders,suppliers
          INNER JOIN purchaseorderlines ON purchaseorderlines.porder_no=purchaseorders.porder_no
          AND suppliers.supplierid=purchaseorders.supplierid
          WHERE
          purchaseorderlines.profit_per_unit IS NULL
          ORDER BY
          purchaseorderlines.profit_per_unit";
*/

                // Attempt select query execution with order by clause
/*$sql = "SELECT * FROM purchaseorderlines ORDER BY profit_per_unit";*/



if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        /*echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";*/
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
               /* echo "<td>" . $row['counter-increment: my-sec-counter; content: "Section " counter(my-sec-counter) ". ";'] . "</td>";*/
                echo "<td>" . $row['suppliername'] . "</td>";
                echo "<td>" . $row['contactno'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
            echo "</tr>";
        }







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
              <!--   <tr>
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
              </tbody> -->
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
            <!--  <button class="btn btn-outline-primary" data-target="#loginModal" data-dismiss="modal" data-toggle="modal">Logout</button>
               -->

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



            <button class="btn btn-primary" type="submit" id="loginbtn" name="submit">Login</button>
          <!--  <button class="btn btn-primary" type="submit" data-dismiss="modal">Close</button> -->
            <button class="btn btn-outline-primary" data-target="#signupModal" data-dismiss="modal" data-toggle="modal">Create an Account</button>
            <!--  <button class="btn btn-primary" type="submit" name="submit">Sign Up</button> -->
              

  



   
  

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
<?php
   $_SESSION['authentication']=true;
    ?>


  

  </body>
</html>

 