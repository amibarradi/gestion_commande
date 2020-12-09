<?php

include 'connexion.php'
if (isset ($_POST["connexion"])) {
	
	$sql="SELECT * FROM users";
	$resultat=$connexion->query($sql);
	while ($l=$resultat->fetch_assoc()){

	if($_POST['login']==$l['Ndc'] && md5($_POST['mdp'])==$l['Mdp']){

		header('location: home.php');
        session_start();
        $_SESSION['login']==$l['Ndc'];
	}
	}
      
    
	
}

?>

