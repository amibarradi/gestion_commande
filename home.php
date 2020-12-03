<?php

session_start();

if(isset($_SESSION['login'])){
	echo"conn etablie";
}

?>