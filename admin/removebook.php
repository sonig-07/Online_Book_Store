<?php 
require_once"dbconfig.php";

extract($_REQUEST);
$n=iud("delete from products where id='$id'");
if($n==1)
{
	echo"<script>window.location='viewbooks.php';</script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
	window.location='viewbooks.php';</script>";
}

?>