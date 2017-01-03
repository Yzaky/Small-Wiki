<?php
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: index.php");
  exit();
  }
include_once 'dbconnect.php';

$resR=mysqli_query($link,"SELECT * FROM articles WHERE ID=".$_GET['id']);

$articleRow=mysqli_fetch_array($resR);
$modificateur= $_SESSION['id'];
if ($_POST['submit']=="Edit")
{
	
	$ucontenu = addslashes($_POST['contenu']);
	$utitre = $_POST['titre'];
	$resultat=mysqli_query($link,"UPDATE articles SET titre='$utitre' ,contenu='$ucontenu', idmodificateur='$modificateur' WHERE ID=".$_GET['id']);
	
	if ($resultat) 

	{
  	
    header("location:  article.php?id=".$articleRow['ID']);
     exit();
	}

	else {
    ?> <script> 

 
    alert ("fail");
	 window.location.href = "./home.php";

    </script> <?php

			
	}
			
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Edit article</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="Style/style.css" type="text/css" />
</head>


<body data-spy="scroll" data-target=".navbar-collapse">

  <div class="navbar navbar-default navbar-fixed-top">
  
  	<div class="container">
  	
  		<div class="navbar-header">
  		
  			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  			
  				<span class="icon-bar"></span>
  				
  				<span class="icon-bar"></span>
  				
  				<span class="icon-bar"></span>
  					
  			</button>
            
            <a class="navbar-brand"> Editor  </a>
            
        </div>
        
        <div class="pull-right">
            <ul class= "navbar-nav nav">
                <li><a href="home.php?">Retour</a></li>
            </ul>
        </div>
   </div>     
   </div>


<div class="container contentContainer" id="topContainer">
        <div class="row">
        
 <div class="col-md-6 col-md-offset-3" id="topRow">
<h1 class="marginTop">Edit Article</h1>


<form class="marginTop" method="post">

   <div class="form-group">

<input type="text" class="form-control" name="titre" value="<?php echo $articleRow['titre']; ?>" required  size="50" maxlength="50"/>

<textarea class="form-control" rows="6" name="contenu"><?php echo $articleRow['contenu'] ;?></textarea>

</div>

	<input type="submit" name="submit" value="Edit" class="btn btn-success btn-lg marginTop"/> 
</form>



   </div>  
    
  </div> 	
 </div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    
    <script src="Script/scripts.js"></script>
  
    
  </body>
</html>