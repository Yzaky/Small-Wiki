<?php
session_start();
require_once 'markdown.php';
include_once 'dbconnect.php';



$resultat=mysqli_query($link,"SELECT * FROM articles WHERE ID=".$_GET['id']);

$articleRow=mysqli_fetch_array($resultat);

if ($_POST['submit']=="Delete")
	{	
			
		$query="DELETE FROM articles WHERE ID=".$articleRow['ID'];
	
		$resultat=mysqli_query($link,$query);
if ($resultat)

{

    header ("location: home.php");
    exit();
}

else {
	
	?><script>alert ("Delete failed ");</script><?php
	}
	
		
	}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $articleRow['titre'] ?> </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="Style/style.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="Style/style.css" type="text/css" />
</head>


 <body data-spy="scroll" data-target=".navbar-collapse">
    <div class="navbar navbar-default navbar-fixed-top">
  
    <div class="container">
    
        <div class="navbar-header pull-left">
            
            <a class="navbar-brand"><?php echo $articleRow['titre'] ?> </a>


        </div>	<form method="post">
                <div class="pull-right">
            <ul class= "navbar-nav nav">

            <?php
            		if(isset($_SESSION['id'])){
					echo " <li><input type='submit' id='btndel' name='submit' class='btn btn-danger' value='Delete'</li><li><a href='edit.php?id=".$articleRow['ID']."'>Edtier cet article</a></li>";
           

}
?>
                   <li><a href="home.php?">Retour</a></li></ul>
              
        </div>
        </form>
        </div>
        </div>

 	<div class="container contentContainer" id="topContainer">
        <div class="row">
        
            <div class="col-md-6 col-md-offset-3" id="topRow">
             
             <h1 class="marginTop"><?php echo $articleRow['titre'] ?></h1>
             
             <p class="lead">

             <?php 
             $nrows=mysqli_num_rows($resultat);
          
             if($nrows==1)
             {
    echo "Ecrit par : ";
    $ress=mysqli_query($link,"SELECT `nom` FROM users WHERE id=".$articleRow['idauteur']);
    $userRoww=mysqli_fetch_array($ress);
    echo $userRoww['nom'];
    echo " le  (";
    echo $articleRow['dateheure'];
    echo ")</br>";
    echo markDown2HTML($articleRow['contenu']);

             }
             else {

                echo "Article not found";
             }
    
?>
</div>

 </div>
 </div>


</body>
</html>

