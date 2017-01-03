<?php
session_start();

include_once 'dbconnect.php';

if(!isset($_SESSION['id']))
{
  header("Location: index.php");
  exit();
}else {
  $res=mysqli_query($link,"SELECT * FROM users WHERE id=".$_SESSION['id']);
  $userRow=mysqli_fetch_array($res);
  if ($userRow['rang']!=1){
    header("Location: index.php");
    exit();
  }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Dashboard</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="Style/style.css" >
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
            
            <a class="navbar-brand"> Dashboard  </a>
            
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

<div class="form-group">

<h1 class="marginTop">Articles</h1>

<?php

$query = "SELECT * FROM articles";
$result =mysqli_query($link,$query);
$nRows=mysqli_num_rows($result);

if ($nRows) {

echo "<table class='table-striped'> 
  <tr>
    <td>Article ID</td>
    <td>Auteur ID</td>    
    <td>Titre</td>
  <td>Taille contenu</td>
  <td>Dernier modificateur</td>
  <td>Date de cr&eacute;ation</td>
  </tr>
  ";
     while($row = mysqli_fetch_array($result))

      {
    echo "<tr><td> ".$row['ID']."</td> <td>".$row['idauteur']."</td><td>". $row['titre']."</td> <td>".strlen($row['contenu'])."</td><td>".$row['idmodificateur']."</td><td>".$row['dateheure']."</td></tr>";
  }
echo "</table>";

} else {
     echo "Pas d'articles";
}


?>
</div>

<div class="form-group">

<h1 class="marginTop">USERS</h1>

<?php
$sql = "SELECT * FROM users";
$result =mysqli_query($link,$sql);
$nRows=mysqli_num_rows($result);

if ($nRows) {
  echo "<table class='table-striped'> 
  <tr>
    <td>Les identifications des utilisateurs</td>
    <td>Les noms des utilisateurs</td>    
  </tr>
  ";
  
     while($row = mysqli_fetch_array($result)) 
     {
  
    echo "<tr ><td width='30%'> ".$row['id']."</td> <td width='70%'>".$row['nom']."</td></tr>";
  }
echo "</table>";

 }

 else {
     echo "Pas de users";
}
?>  
 </div>

   </div>

   </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
    
  </body>
</html>