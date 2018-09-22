<?php

class sql_connect{
        public static $con;
       function __construct()
       {
           try{
               self::$con = mysqli_connect("localhost","root","","dmcashewcorner");
              // print_r($_POST);
           }catch (Exception $exception){
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
       }

}

$conn=new sql_connect();

$date = $_POST['date'];
$orderNo=$_POST['orderNo'];
$orderName=$_POST['orderName'];
$itemName=$_POST['itemName'];
$invoiceNo=$_POST['invoiceNo'];
$quantity=$_POST['quantity'];
$deliveryTime=$_POST['deliveryTime'];
$paymentMethod=$_POST['paymentMethod'];
$deliveryCost=$_POST['deliveryCost'];
$deliveryMethod=$_POST['deliveryMethod'];
$itemNumber =$_POST['itemNumber'];
$quality=$_POST['quality'];
$costPerUnit=$_POST['costPerUnit'];

$totalCost=45;
$Status='pending';

try{
    $result1 = mysqli_query($conn::$con,"INSERT INTO `purchaseorders`(`porder_no`, `order_name`, `date`, `invoice_no`, `delivery_cost`, `delivery_time`, `delivery_method`,`total_cost`,`Status`) VALUES ('$orderNo','$orderName','$date','$invoiceNo','$deliveryCost','$deliveryTime','$deliveryMethod','$totalCost','$Status')");
    $result2 = mysqli_query($conn::$con,"INSERT INTO `purchaseorderlines`(`porder_no`, `item_no`, `payment_method`,`quantity`,`quality`,`cost_per_unit`) VALUES ('$orderNo','$itemNumber','$paymentMethod','$quantity','$quality','$costPerUnit')");
    print_r($result1);
}catch (Exception $exception){
    print_r($exception);
}

//header("Location: http://localhost/dm-cashew-corner/suppliers6placeorders.php"); /* Redirect browser */
//exit();


