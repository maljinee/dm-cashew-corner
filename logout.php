<?php
session_start();
session_destroy();
header('location: theme2.php');
?>