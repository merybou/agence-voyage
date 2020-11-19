<?php
session_start();
include 'connection.php';

if (!$base) {
  printf('Erreur %d : %s.<br/>', mysqli_connect_errno(), mysqli_connect_error());
  die();
}

if(empty($_POST['email']) || empty($_POST['password'])){
   
      header('Location: index.php?error=1');
      exit();
  }

if (isset($_POST['email']) AND isset($_POST['password']) AND !empty($_POST['email'])AND !empty($_POST['password']) )

{

  $sql = "SELECT ID From utilisateur where email=? and password=?";//la requete
  $resultat = mysqli_prepare($base, $sql);// preparer la requete dans ma base
  $ok = mysqli_stmt_bind_param($resultat, 'ss',$login,$password);//remplacer les parametres(les points ?) par les valeurs saisies par  l'utilisateur
  $login = $_POST['email'];
  $password =  $_POST['password'];

  $ok = mysqli_stmt_execute($resultat);
  $ok = mysqli_stmt_bind_result($resultat,$ID);
  while (mysqli_stmt_fetch($resultat)){}
 // $ok = mysqli_stmt_store_result($resultat); //stocker le resultat
  //$user = mysqli_fetch_array($ok, MYSQLI_ASSOC);//tableau assiciatif//tableau numerique : MYSQLI_NUM 


  if (mysqli_stmt_num_rows($resultat)<1)
       {
    
    $error = 3;
  }
  else {
    $_SESSION ['email'] = $_POST['email'];
    $_SESSION ['password'] = $_POST['password'];
    $_SESSION['ID']=$ID;
    $error = 0;
  }
  mysqli_stmt_close($resultat);
  mysqli_close($base);
 header('Location: index.php?error='.$error);
 
}



  
 



 