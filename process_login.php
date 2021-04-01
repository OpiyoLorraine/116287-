<?php 

require_once("db_connect.php");
session_start();
if (isset($_POST["client"]))
{
if(count($_POST)>0)
{
	$result=mysqli_query($link,"SELECT * FROM client WHERE email='".$_POST["email"]."'and password='".$_POST["password"]."'");
		$row=mysqli_fetch_array($result);
		if(is_array($row)){
$_SESSION["id"]=$row["id"];
$_SESSION["name"]=$row["name"];
}
}
if(isset($_SESSION["id"])){
	header("Location:details.php");
}
}


 

?>