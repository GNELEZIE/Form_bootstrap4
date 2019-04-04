<?php 

 require 'database.php';
 $db = Database::connect();
if(isset($_GET['id']) and $_GET['id']>0){
    
    $getid = intval($_GET['id']);
    $req = $db->prepare('SELECT * FROM users WHERE id= ?');
    $req->execute(array($getid));
    $userinfo = $req->fetch();
   
}





?>


<!DOCTYPE html>

<html>
<head>
<title>Profil</title>    
       <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
           
    
</head>
   <body>
       <div class="container p-80">
       <h1>Mon profil</h1>
     <div class="card" style="width: 30em;">
  <div class="card-header">
  Mon profil
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php  echo $userinfo['nom'] ;?></li>
    <li class="list-group-item"><?php echo $userinfo['prenom'] ;?></li>
    <li class="list-group-item"><?php echo $userinfo['date'] ;?></li>
    <li class="list-group-item"><?php echo $userinfo['com'] ;?></li>
  </ul>
         <button type="button" class="btn btn-primary"><a href="membre_inscrits.php">Retour</a></button>
</div>
       <h1></h1>
       
       </div>
    </body>
</html>
