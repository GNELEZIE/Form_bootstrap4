<?php
include'database.php';
 $db = Database::connect();

?>
<!DOCTYPE html>

<html>
<head>
<title>Inscrition</title>    
       <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
           
    
</head>
    <body>
       <div class="container">
           
           <div class="card m-5">
  <div class="card-header"  style="background:blue; color:#fff; font-size:32px;">
    La liste des inscrits sur notre site
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">№ </th>
      <th scope="col">Nom</th> 
      <th scope="col">prenom</th>
      <th scope="col">date de naissance</th>
      <th scope="col">commune</th>
      <th scope="col">Sexe</th>
      <th scope="col">Voir profil</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $membre=$db->query('SELECT * FROM users');
      
      foreach($membre as $membre):
      
      ?>
      
      
    <tr>
      <th scope="row"><?php echo $membre['id'];?></th>
      <td><?php echo $membre['nom'];?></td>
      <td><?php echo $membre['prenom'];?></td>
      <td><?php echo $membre['date'];?></td>
      <td><?php echo $membre['com'];?></td>
      <td><?php echo $membre['sexe'];?></td>
<td><a href="profil.php?id=<?php echo $membre['id'];?>"><span><i class="far fa-eye"></i>VOIR</span></a></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>  
           <footer class="blockquote-footer"><a href="index.php">Retour</a> <cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
        
        
   </div>      
        
    </body>
</html>