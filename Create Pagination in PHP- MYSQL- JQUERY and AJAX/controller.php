<?php
include("paginationDAOClass.php");

if(isset($_POST["pageNo"])){
	
	$group_number = filter_var($_POST["pageNo"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	$paginationClass = new paginationClass();
	echo $paginationClass->displayData($group_number);
}

?>