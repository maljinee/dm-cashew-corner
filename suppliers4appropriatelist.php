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

     <!--  <style>
      tr:hover {
        background-color: transparent;
      }



    
    </style> -->

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
  background-color:;
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

               <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
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
            <table class="table table-bordered table-hover  table-sm">
              <thead>
                <tr>
                 <!--  <th>Number</th> -->
                  <th>Supplier Name</th>
                  <th>Telephone No</th>
                  <th>Location</th>
                  <th></th>
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

          $link=new mysqli("localhost","root","","dmcashewcorner");

          //$link = mysqli_connect("localhost", "root", "", "dmcashewcorner");

        // Check connection
        if($link == false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }


        $sell=$_POST['sell'];

        $averageCostPerUnit= $_POST['averageCostPerUnit'];

        $quantity= $_POST['quantity'];

        $costPerUnit = $_POST['costPerUnit'];

        $season = $_POST['season'];

        $paymentMethod= $_POST['paymentMethod'];

        $distance= $_POST['distance'];

        $deliveryMethod= $_POST['deliveryMethod'];

        $deliveryCost = $_POST['deliveryCost'];

        $timeToReceive=   $_POST['timeToReceive'];

        $qVariation=0.9;
        $dtVariation=1.25;

        $sql="SELECT i.item_no,pol.porder_no,pol.cost_per_unit,p.delivery_cost,p.delivery_method,p.supplierid,p.delivery_time,pol.quantity FROM items AS i JOIN purchaseorderlines AS pol ON pol.item_no=i.item_no JOIN purchaseorders AS p ON p.porder_no=pol.porder_no  WHERE i.item_no=$sell AND p.season=$season AND pol.quantity>=$qVariation*$quantity AND p.delivery_time<=$dtVariation*$timeToReceive AND p.delivery_method='by supplier'";


        $blogic=array();
        $fResult=array();


        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){


                while($row = mysqli_fetch_array($result)){
                    array_push($blogic,$row);

                }

                $average =array();
                $tempArray=array();
                $keyArray=array();
                $tempid=null;

                for ($i=0;$i<count($blogic);$i++){
                    array_push($keyArray,$blogic[$i]["supplierid"]);
                }
                rsort($keyArray);

                for ($i=0;$i<count($keyArray);$i++){
                    if ($tempid==$keyArray[$i]){
                        continue;
                    }else{
                        $tempid=$keyArray[$i];
                        for($i=0;$i<count($blogic);$i++){
                            if($blogic[$i]["supplierid"]==$tempid){
                                array_push($tempArray,$blogic[$i]);
                            }
                        }
                        if(count($tempArray)>0){
                            $av=0;
                            for($i=0;$i<count($tempArray);$i++){

                                $av=$av+$tempArray[$i]["delivery_cost"]+$tempArray[$i]["cost_per_unit"] * $tempArray[$i]["quantity"];
                            }
                            $av=$av/(count($tempArray));
                        }
                        $t=array("id"=>$tempid,"average"=>$av);
                        array_push($average,$t);
                        reset($tempArray);
                    }


                }

                do {
                    $swapped=false;
                    for($i=0,$c=count($average)-1;$i<$c;$i++){

                        $first=$average[$i]["average"];
                        $second=$average[$i+1]["average"];

                        $compare=$first>$second;
                        if($compare){
                            list($average[$i+1],$average[$i])=array($average[$i],$average[$i+1]);
                            $swapped=true;
                        }
                    }

                }while($swapped);



                for ($i=0;$i<count($average);$i++){
                    $sid=$average[$i]["id"];
                    $q="SELECT suppliername,contactno,location FROM suppliers WHERE supplierid=$sid";
                    $re=mysqli_query($link,$q);
                    $rr=mysqli_fetch_assoc($re);
                    array_push($fResult,$rr);
                }


                for ($i=0;$i<count($fResult);$i++){
                    $row=$fResult[$i];
                    echo "<tr>";
                       /* echo "<td>" . $row['counter-increment: my-sec-counter; content: "Section " counter(my-sec-counter) ". ";'] . "</td>";*/
                        echo "<td>" . $row['suppliername'] . "</td>";
                        echo "<td>" . $row['contactno'] . "</td>";
                        echo "<td>" . $row['location'] . "</td>";
                        echo "<td><a><button>Place Order</button></a></td>";
                    echo "</tr>";
                }

               /* <td><a href='delete.php?id=".$book['Staff_ID']."'>Delete</a></td>*/


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

            </table>
          </div>

            <div class="col-sm-4" action="suppliers6placeorders.php">
                <input type="submit" name="search" value="Place a Order" id="search" onClick="document.location.href='suppliers6placeorders.php'"  class="btn btn-primary">
                <!--   <button type="submit" class="btn btn-primary">View</button> -->
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

 