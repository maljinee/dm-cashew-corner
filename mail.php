<?php
session_start();

?>


<?php
/*$connection=mysqli_connect('localhost','root','');
if (!connection){
	die("Database Connection Failed".mysqli_error($connection));

}*/

/*$select_db=mysqli_select_db($connection,'dmcashewcorner');
if(!$select_db){
	die("Database selection Failed".mysqli_error($connection))
} */
/*$connection = mysqli_connect('localhost','root','') or die("cannot connect"); 
mysqli_select_db($connection,'dmcashewcorner') or die("cannot select DB");

$email=$_REQUEST["email"];
$sql="select * from signup where email=$email";
$result=mysqli_query($connection,"select * from signup where email=$email");
//$query=mysqli_query();
$row=mysqli_fetch_array($result);
print_r($row);die();  */

?>


<?php
//$conn = mysqli_connect($localhost, $username, $password) or die("cannot connect"); 
//mysqli_select_db($conn, $db_name) or die("cannot select DB");mysql_connect("localhost","root","");
/*mysql_select_db($con,"dmcashewcorner");
$email=$_REQUEST["email"];
$query=mysql_query("select * from signup where email=$email");
$row=mysql_fetch_array($query);
print_r($row);die();
echo $email;die();  */
?>

<?php
/*mysqli_connect("localhost","root","");
mysqli_select_db("dmcashewcorner");
$email=$_REQUEST["email"];
$userName=$_REQUEST["username"];
echo $email;die();
echo $userName;die();*/
?>


<?php

        $email=$_SESSION["email"];
        $mysqli=new mysqli("localhost","root","","dmcashewcorner");
        $result=$mysqli->query("select * from users where email='$email'");
        //$query=mysqli_query("select * from signup where email='$email'");
      /*  $email=$_REQUEST["email"];*/
        $row=$result->fetch_assoc();

        $email=$row['email'];

        echo "$email";
      /*  json_encode($_SESSION);
*/
        $_SESSION['email']=$email;
        ?>

<?php
        /*   $name=$_SESSION["userName1"];
        //echo $name;

        $mysqli=new mysqli("localhost","root","","dmcashewcorner");
        $result=$mysqli->query("select * from users where user_name='$name'");
        //$query=mysqli_query("select * from signup where email='$email'");
        $row=$result->fetch_assoc();

        $user=$row['full_name'];

        echo "$user";

        $_SESSION['full_name']=$user;
*/
        ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>

<!--<?php
/* $connection=mysqli_connect('localhost','root','');
if (!connection){
	die("Database Connection Failed".mysqli_error($connection));

}

$select_db=mysqli_select_db($connection,'dmcashewcorner');
if(!$select_db){
	die("Database selection Failed".mysqli_error($connection))
}

*/