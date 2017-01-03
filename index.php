<?php
include("login.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PtitWiki</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="Style/style.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>


<body data-spy="scroll" data-target=".navbar-collapse">

  <div class="navbar navbar-default navbar-fixed-top">
  
    <div class="container ">
    
        <div class="navbar-header">
        
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            
                <span class="icon-bar"></span>
                
                <span class="icon-bar"></span>
                
                <span class="icon-bar"></span>
                    
            </button>
            
            <a class="navbar-brand">Petit Wiki</a>
            
        </div>
        
        <div class="collapse navbar-collapse">
        
            <form class="navbar-form navbar-right" method="POST"> 
            
                <div class="form-group">
                
                    <input type="text" name="nickname" placeholder="Nickname" class="form-control" />
                                                                                                   
                </div>
                
                <div class="form-group">
                
                    <input type="password" name="password" placeholder="Password" class="form-control" />
                                                                                                            
                </div>
                
                <input type="submit" name= "submit" class="btn btn-success" value="Log In">
                 <input  id="signupbtn" class="btn btn-success" value="Not a member?">
                
            </form>
            
        </div>
        
    </div>  
    
  </div>
  
 <div class="container  contentContainer" id="topContainer">
        <div class="row">
        
            <div class="col-md-6 col-md-offset-3" id="topRow">

                 <div id="signupform">
             
              <form class="marginTop" method="post"> 
                <div class="form-group " >
        
           
            <p class='lead'> Sign up now !</p>
          <input type="text" name="Nickname" class="form-control" placeholder="Your Nickname" />
                                                   
        </div>
        
        <div class="form-group">
        
            
            
          <input type="password" name="Password" class="form-control" placeholder="Password"/>
                                                    
        </div>

        <input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop"/> 
        
       </form>

             </div>
             <div id="errors">
              <?php
             	
                if ($error) {
                
                    echo '</br><div class="alert alert-danger">'.addslashes($error).'</div>';
                
                }
                
                if ($message) {
                
                    echo '</br><div class="alert alert-success">'.addslashes($message).'</div>';
                
                }
             
             ?>
             </div>
             <h1 class="marginTop">Petit Wiki </h1>
             
             <p class="lead">IFT3225 TP3 </p>
              <p class="lead">Un petit wiki pour tout le monde. Vous pouvez regarder les articles dans le wiki. Si vous souhaitez modifier,détruire ou bien créer votre propre article, vous devez vous inscrire.</p>
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
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="Script/scripts.js"></script>
    
  </body>
</html>