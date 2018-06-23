$type = $_POST["selected"];

$query="select * from purchaseorderlines where item_no='".$type."'";