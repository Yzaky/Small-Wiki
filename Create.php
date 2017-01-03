<?php

if(!isset($_SESSION['id']))
{
  header("Location: index.php");
  exit();
  }
	if ($_POST['submit']=="Create")
	{		$idauteur = $_SESSION['id'];
			$utitre = $_POST['titre'];
			$ucontenu = addslashes($_POST['contenu']);
		$query="INSERT INTO articles (idauteur,titre,contenu,dateheure) VALUES('$idauteur','$utitre','$ucontenu',NOW())";
	
	$resultat=mysqli_query($link,$query);
if ($resultat)

{

    header ("location: home.php");
    exit();
}

else {
	
			header("Location: home.php");
			exit();
	}
	
		
	}	
	?>