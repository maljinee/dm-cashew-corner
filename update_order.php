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

$orderNo=$_GET['orderNo'];
$status=$_GET['status'];

try{
 $result1 = mysqli_query($conn::$con,"UPDATE `purchaseorders` SET Status='$status' WHERE porder_no='$orderNo'");
    var_dump($result1);
}catch (Exception $exception){
    var_dump($exception);
}