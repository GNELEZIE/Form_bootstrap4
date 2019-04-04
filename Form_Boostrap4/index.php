<?php 
session_start();

 require 'database.php';
 include'php/function.php';
 $db = Database::connect();
//Nos







if(isset($_POST['forminscription'])){
    
   if(!empty($_POST['nom']) and !empty($_POST['date']) and !empty($_POST['com'])){
       
      $nom = checkInput($_POST['nom']);
      $prenom = checkInput($_POST['prenom']);
      $date = checkInput($_POST['date']);
      $com = checkInput($_POST['com']);
     $sexe = checkInput($_POST['radio']);
        $reqnom= $db->prepare('SELECT *FROM users WHERE nom=?');
           $reqnom->execute(array($nom));
           $pseudexist = $reqnom->rowCount();
           if($pseudexist ==0){
               
      
$db_table="users";
$db_value="nom,prenom,date,com,sexe";
$db_inconnu='?,?,?,?,?';
$data_value= array($nom,$prenom,$date,$com,$sexe);

  $res= insertData($db_table,$db_value,$data_value,$db_inconnu,$db);
                
                   $Error = '<div class="alert alert-success">Votre compte a été crée avec success veillez vous voir la liste des inscrit  ici <a href="membre_inscrits.php">mon profil !!!!</div>';
                   
                   
               
                   
               
               
          
           }else{
                $Error = '<div class="alert alert-danger">Ce nom est déja inscrit!!!!!<a href="connexion.php">mon profil</div>';
           }
          
         
               
      
           
       
   } 
    
    else{ 
        
        $Error =  '<div class="alert alert-danger" style="color:red">Tous les champs doivent être obligatoirement remplir!!!!</div>';
        }
    
    
    
    
}


 function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

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
        
    <script>
        
//    
//	  $('#dynamic_container').append(html);
//	  $('#remove_more').fadeIn(function(){
//	  	 $(this).show();
//	  });
//     });
//
//     $('#remove_more').on('click', function(){
//         
//         $('#append_no_'+i).removeClass('bounceInLeft').addClass('bounceOutRight')
//            .fadeOut(function(){
//            	$(this).remove();
//            });
//            i--;
//            if(i==0){
//            	$('#remove_more').fadeOut(function(){
//            		$(this).hide()
//            	});;
//            }
//   
//     });
//	});
        
        
        
        </script>
        
        
        
        
        
        
    <div align="center">
        
        
        	<dvi class="container h-100">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-4 animated bounceInDown myForm">
			<div class="card-header">
				<h4>FORMULAIRE INSCRIPTION</h4>
			</div>
			<div class="card-body">
				<form method="POST">
                            
        <?php
        
       if(isset($Error)){
            echo '<font color="red">'.$Error.'</font>';
        }
        
        ?>
					<div id="dynamic_container">
						<div class="input-group">
                            
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
							</div>
							<input type="text"  name="nom" id="nom" placeholder="nom" class="form-control"  value="<?php if(isset($nom)){echo $nom;} ?>"/>
						</div>
                        
                        
                         <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
							</div>
							<input type="text" name="prenom" id="prenom" placeholder=" prenom" class="form-control"/>
						</div>
                        
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-calendar-alt"></i></span>
							</div>
							<input type="date" name="date" id="date" placeholder=" date de naissance" class="form-control"/>
						</div>
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15">HOMME</span>
							</div>
							<input type="radio" value="HOMME" name="radio" id="radio" class="form-control"/>
						</div>
                        <div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15">FEMME</span>
							</div>
							<input type="radio" value="FEMME" name="radio" id="radio" class="form-control"/>
						</div><br>
                        
                        
                        
                       <select  class="form-control"   id="com" name="com">
                        
                         <option>choisir une commune</option>
                         <option>Adjame</option>
                         <option>Abobo</option>
                         <option>cocody</option>
                         <option>plateua</option>
                         <option></option>
                        
                        
                        </select>
                        
                        
                    
                         
                       
                        
					 
                        
						
					</div>
                    
                    
                    <div class="card-footer">
                            
					 
				 
				<input  type="submit" style="font-size: 20px;"  value="S'insrire"  name="forminscription" class="btn btn-success btn-sm float-right submit_btn"/>
                   
			</div>
                    
                    
                    
				</form>
			</div>
			
		</div>
	</div>
	</dvi>
        

        
    
    </div>
    
