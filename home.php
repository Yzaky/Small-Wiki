  <?php
  session_start();

include_once 'dbconnect.php';

if(!isset($_SESSION['id']))
{
  header("Location: index.php");
  exit();
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="Style/style.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

   <body data-spy="scroll" data-target=".navbar-collapse">
    <div class="navbar navbar-default navbar-fixed-top">
  
    <div class="container">
    
        <div class="navbar-header pull-left">
            
            <a class="navbar-brand"> Welcome  </a>
            <?php 
            $query="SELECT `rang` from users where id=".$_SESSION['id'];
            $resultat=mysqli_query($link,$query);
            $true=mysqli_fetch_array($resultat);
            if($true['rang']==1)
            {
              echo "<a class='navbar-brand' href='dashboard.php'>Dashboard</a>";
            }
            ?>
        </div>
        
        <div class="pull-right">
            <ul class= "navbar-nav nav">
             <li><a href="creerarticle.php">Create Article</a></li>
                <li><a href="index.php?logout=1">Log Out</a></li>
            </ul>
        </div>
        
    </div>  
    
  </div> 


 <div class="container contentContainer" id="topContainer">
        <div class="row">
        
            <div class="col-md-6 col-md-offset-3" id="topRow">
                   

             <h1 class="marginTop">Petit Wiki </h1>
             
             <p class="lead">Voici une liste de tous les articles ecits, vous pouvez editer les articles ou creer le votre </p>
             
             
             
            <?php
                $sql = "SELECT * FROM articles ORDER BY dateheure DESC";
                $result = $link->query($sql);

                    if ($result->num_rows > 0) {

                         while($row = $result->fetch_assoc()) {
                             echo "Article";?><a href="article.php?id=<?php echo $row['ID']; ?> ">  <?php echo $row['titre'] ; ?> </a> <?php echo "</br></br>";
                                                              }
                                    } else {
                                          echo "Il n'y a pas encore d'article.";
                                                                }
                ?>  
         
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