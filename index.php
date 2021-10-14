<?php
	if( ! isset($_GET["page"])){
		$page = "accueil";
	}
	else{
		$page = $_GET["page"];
	}
	require "include/header.php";
	include("$page.php");
	require "include/footer.php"; 
?>