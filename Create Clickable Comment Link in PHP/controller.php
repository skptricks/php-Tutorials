<?php
include("DisplayLink.php");

if(isSet($_POST["link"])){
$DisplayLink = new DisplayLink();	
echo $DisplayLink->Convert_link_to_urls($_POST["link"]) ;
}
?>