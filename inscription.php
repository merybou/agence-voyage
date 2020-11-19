<?php

include 'connection.php';



if (!$base) {
    printf('Erreur %d : %s.<br/>', mysqli_connect_errno(), mysqli_connect_error());
    die();
  }

 

  if(isset($_POST['valider'])){
    if(empty($_POST['sexe']) || empty($_POST['nom']) || empty($_POST['prenom'])|| empty($_POST['adresse'])|| empty($_POST['email'])|| empty($_POST['password'])){
   
        header('Location: inscription.php?error=1');
        exit();
    }

  $sql = "INSERT INTO utilisateur(sexe,nom,prenom,adresse,email,password) VALUES (?,?,?,?,?,?)";
  $resultat = mysqli_prepare($base, $sql);
  $ok = mysqli_stmt_bind_param($resultat,'ssssss',$sexe,$nom,$prenom,$adresse,$email,$password);
  $sexe = htmlentities($_POST['sexe']);
  $nom = htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $adresse = htmlentities($_POST['adresse']);
  $email = htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  $ok = mysqli_stmt_execute($resultat);

  if ($ok == FALSE) {
    
    $error = 2;
  }
  else {
    $error = 0;
   
  }

  mysqli_stmt_close($resultat);
  mysqli_close($base);
  header('Location: inscription.php?error='.$error);

}
 
  
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
p{
  color : #E75E36;
  font-family: Comic Sans, Comic Sans MS, cursive;
}

h3{
  color :#B6BD37;
  font-family: Comic Sans, Comic Sans MS, cursive;
  font-weight: bold;
}
a{
      color : #B6BD37;
    }
    body{
      text-align : center;
    }
</style>

</head>

    <body>
     <center> <h3>Devenez membre</h3> </center>
    <p>Vous êtes ?</p>
    <form action="inscription.php" method="post">
    <div>
        <?php
          if(isset($_GET['error'])){
             switch ($_GET['error']) {
               case 1:
                 echo 'Un ou plusieurs champs non renseignés!';
                 break;
                case 2:
                    echo "erreur d'execution";
                    break;
                case 0:
                    echo "inscription réussie";
                    
                    break;
               default:
                 break;
             }
          }
        ?>
      </div>

    
  <input type="radio" value="monsieur" name="sexe"/>Monsieur
  <input type="radio" value="madame" name="sexe"/>Madame 
  <input type="radio" value="mademoiselle" name="sexe"/>Mademoiselle <br><br>
  Nom : <input type="text" name="nom"/><br><br>
  Prénom : <input type="text" name="prenom"/><br><br>
  Adresse : <input type="text"name="adresse"/><br><br>
  E-mail : <input type="text"name="email"/><br><br>
  Mot de passe : <input type="text"name="password"/><br><br>
 
  <input type="submit"  name="valider">
 
  </form>
 <br>
  <a href="index.php">Retour à l'accueil</a> 
</body>
</html>
