<?php
require "database.php";
$email = "";
echo "hello";
if ($_SERVER["REQUEST_METHOD"] == "GET") 
{  if (isset($_GET['email'])){$email=$_GET['email'];}

$do_sql = new database();
	$input_sql = "INSERT INTO Medlang (Email) VALUES ('$email')";
	$input = $do_sql-> insert($input_sql);

}

?>
