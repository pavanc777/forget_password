<?php
include('app_logic.php');


if (isset($_SESSION['success']) && isset($_SESSION['username'])) {
	echo $_SESSION['username'] ."<br>". $_SESSION['success'];
	include("logout.php");
}
elseif (isset($_SESSION['success'])) {
	echo $_SESSION['success'];
	include("login.php");
}
 else
	include("login.php");
?>