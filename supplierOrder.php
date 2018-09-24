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
            vertical-align: center;
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
                        <li class="breadcrumb-item active" aria-current="page">supplier orders</li>
                    </ol>
                </nav>
                <div class="btn-toolbar mb-2 mb-md-0">

                </div>
            </div>



<form  class="border-class" id="myForm" method="post" action="supplierOrder.php">

                <style type="text/css">

                    .btn{min-width:90px;}
                </style>

                <div class="row btn-primary ">
                            <div class="form-group row col-lg-4">
                                <label for="inputPassword3" class="col-md-6 col-form-label"><strong>search by Name</strong></label>
                                <div class="col-md-6" style="padding-top: 10px">
                                    <input type="text" name="suppliername"  onkeyup="searchbyName()" class="form-control" id="suppliername" placeholder="" onkeypress="show1();show2();" >
                                </div>
                            </div>

                            <div class="form-group row col-lg-4">
                                <label for="inputEmail3" class="col-md-6 col-form-label"><strong>search by contact</strong></label>
                                <div class="col-md-6 " style="padding-top: 10px">
                                    <input type="text" name="contactno" onkeyup="searchbyContactno()" class="form-control" id="contactno" placeholder="" onclick="show1(),show2()"  onfocus="">
                                </div>
                            </div>

                            <div class="form-group row col-lg-4" style="padding-top: 10px">
                                <label for="inputEmail3" class="col-md-6 col-form-label"><strong>search by distance</strong></label>
                                <div class="col-md-6">
                                    <input type="text" name="distance" onkeyup="searchbyDistance()" class="form-control" id="distance" onclick="show1(),show2()" placeholder=""onfocus="">
                                </div>
                            </div>
                </div>

                <br><br>

                <div class="table-responsive" style="overflow-y: auto;height: 250px">
                            <table id="table" class="table table-bordered table-hover  table-sm">
                                <thead>
                                        <tr>
                                            <!--  <th>Number</th> -->
                                            <th>Supplier id</th>
                                            <th>Supplier name</th>
                                            <th>Contact No</th>
                                            <th>Address</th>
                                            <th>Distance</th>
                                            <th>Location</th>
                                        </tr>
                                </thead>
                                <tbody style=" height:"40px" overflow-y:"scroll">
                                            <tr >
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
                                                        $link = mysqli_connect("localhost", "root", "", "dmcashewcorner");

                                                        // Check connection
                                                        if($link === false){
                                                            die("ERROR: Could not connect. " . mysqli_connect_error());
                                                        }

                                                        $sql="SELECT s.supplierid,s.suppliername,s.contactno,s.address,s.distance,s.location FROM suppliers s";

                                                        if($result = mysqli_query($link, $sql)){
                                                            if(mysqli_num_rows($result) > 0){

                                                                echo "<form method='post'>";
                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo "<tr>";
                                                                        echo "<td>" . $row['supplierid'] . "</td>";
                                                                        echo "<td>" . $row['suppliername'] . "</td>";
                                                                        echo "<td>" . $row['contactno'] . "</td>";
                                                                        echo "<td>" . $row['address'] . "</td>";
                                                                        echo "<td>" . $row['distance'] . "</td>";
                                                                        echo "<td>" . $row['location'] . "</td>";
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
                            </table>
                </div>

</form>
<br><br><br><br>
    <div class="card">
        <h4 style="text-align: center">previous order of supplier</h4>
    </div>
<br><br>
<div class="table-responsive" style="overflow-y: auto;height: 250px">
    <table id="table1" class="table table-bordered table-hover  table-sm">
        <thead>
            <tr>
                <th>order no</th>
                <th>order name</th>
                <th>date</th>
                <th>invoice no</th>
                <th>total cost</th>
                <th>quantity</th>
                <th>profit per unit</th>
                <th>
                    <!-- <a  data-toggle="tooltip" title="click here to change status!">status</a>-->
                    status
                </th>
                <th>
                    supplier id
                </th>
                <th>delivery method</th>
                <th>delivery time</th>
                <th>payment method</th>
            </tr>
        </thead>
        <tbody>
                    <?php
                    $mysqli=new mysqli("localhost","root","","dmcashewcorner");
                    ?>

                    <?php
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $dbname="dmcashewcorner";


                    $order_no="";
                    $order_name="";
                    $date="";
                    $invoice_no="";
                    $total_cost="";
                    $quantity="";
                    $profit_per_unit="";
                    $status="";
                    $supplier_id="";
                    $delivery_method="";
                    $delivery_time="";
                    $payment_method="";

                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

                    //connect to mysql database
                    try{
                        $conn=mysqli_connect($servername,$username,$password,$dbname);
                    }catch(MySQLi_Sql_Exception $ex){
                        echo("error in connecting");
                    }
                    function getData()
                    {
                        $data=array();
                        $data[0]=$_POST['supplierReference'];
                        return $data;
                    }

                    //search
                    if(isset($_POST['supplierReference']))
                    {
                        $info=getData();
                        $search_query="SELECT * FROM purchaseorders AS po JOIN purchaseorderlines as pol on po.porder_no=pol.porder_no WHERE supplierid='$info[0]'";
                        $search_result=mysqli_query($conn, $search_query);

                        if($search_result)
                        {
                            if(mysqli_num_rows($search_result))
                            {
                                while($rows=mysqli_fetch_array($search_result))
                                {
                                    echo "<tr>";
                                        echo "<td>" . $rows['porder_no'] . "</td>";
                                        echo "<td>" . $rows['order_name'] . "</td>";
                                        echo "<td>" . $rows['date'] . "</td>";
                                        echo "<td>" . $rows['invoice_no'] . "</td>";
                                        echo "<td>" . $rows['total_cost'] . "</td>";
                                        echo "<td>" . $rows['quantity'] . "</td>";
                                        echo "<td>" . $rows['profit_per_unit'] . "</td>";
                                        echo "<td class='btn-primary'>" . $rows['Status'] . "</td>";
                                        echo "<td>" . $rows['supplierid'] . "</td>";
                                        echo "<td>" . $rows['delivery_method'] . "</td>";
                                        echo "<td>" . $rows['delivery_time'] . "</td>";
                                        echo "<td>" . $rows['payment_method'] . "</td>";
                                    echo "</tr>";
                                }
                            }else{
                                echo("no data are available");
                            }
                        }else{
                            echo("result error");
                        }
                    }

                    if(isset($_POST['update'])){
                        echo ("in update");
//                        $status=$_POST['status'];
//                        $pid=$_POST['pid'];
//                        $update_query="UPDATE purchaseorders Status = '$status' WHERE porder_no='$pid'";
//                        $update=mysqli_query($conn,$update_query);
//                        echo ($update);
                    }

                    ?>
        </tbody>
    </table>
</div>




<script>
    function setButtons() {
        document.getElementById("delete").disabled = true;
        document.getElementById("clear").disabled = true;
        // alert("page loaded");
    }

    function searchbyName() {
        var input, filter, table, tr, td, i;

        input = document.getElementById("suppliername");
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

</script>

<script type="text/javascript">
    var table = document.getElementById('table'),rIndex;

    for(var i=1; i < table.rows.length; i++)
    {
        table.rows[i].onclick = function()
        {
            rIndex=this.rowIndex;
            getOrder(this.cells[0].innerHTML);

        }
    }

    function getOrder($supid) {
        var form=document.createElement("form");
        form.setAttribute("method","post");
        form.setAttribute("action","supplierOrder.php");

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "supplierReference");
        hiddenField.setAttribute("value",$supid);
        form.appendChild(hiddenField);

        document.body.appendChild(form);
        form.submit();
    }


</script>
<script>
    var table =document.getElementById('table1'),rIndex;
    for(var i=1; i < table.rows.length; i++)
    {

        table.rows[i].cells[7].onclick = function()
        {
            rIndex=this.rowIndex;
            updateStatus(this);

        }
    }

    function updateStatus($e) {
        console.log($e.parentElement.firstElementChild.innerHTML);
        var oid=$e.parentElement.firstElementChild.innerHTML;
        var status =prompt("please enter new order status");
        $e.innerHTML=status;
        console.log(status);
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", "update_order.php"+"?orderNo="+oid+"&status="+status, false ); // false for synchronous request
        xmlHttp.send( null );
        console.log( xmlHttp.responseText);
        //

    }
</script>





<script type="text/javascript">
    function show1()
    {
        document.getElementById("update").disabled=false;
    }
</script>



<script type="text/javascript">
    jQuery("#add").prop('disabled', true);

    var toValidate = jQuery('#suppliername, #contactno, #address, #location'),
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

<script>

</script>






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

<script>

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

</script>

<?php
$db=new PDO('mysql:host=localhost;dbname=dmcashewcorner;charset=utf8mb4', 'root', '');

if(isset($_POST['supplierid'])&&($_POST['suppliername'])&&($_POST['contactno'])&&($_POST['address'])&&($_POST['distance'])&&($_POST['location']))
{

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




