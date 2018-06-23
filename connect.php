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




?>   -->

<?php
    try{
            $database = new PDO('mysql:host=localhost;dbname=dmcashewcorner;charset=utf8mb4', 'root', '');
            
        
        } catch(PDOException $ex){
            echo "An Error occured!<br>";
            echo $ex->getMessage();
        }
?>




