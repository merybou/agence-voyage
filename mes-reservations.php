<?php
include 'connection.php';

if (!$base) {
  printf('Erreur %d : %s.<br/>', mysqli_connect_errno(), mysqli_connect_error());
  die();
}
$liste_id = mysqli_query($base, 'SELECT ID FROM reservations');
$resultat = mysqli_query($base, 'SELECT ID,id_client,description,periode,prix FROM reservations'); 
if ($resultat == FALSE) {
     echo "Echec de l'exécution de la requête.<br />"   ;
     } 
     else {  
       echo '<table class="table table-striped table-sm " border=>';
       echo '<tr class="table-warning">';
       echo '<td>ID</td>';
       echo '<td>id client</td>';
       echo '<td>Description</td>';
       echo '<td>periode</td>';
       echo '<td>prix</td>';
       echo '<td>Action</td>';
       echo '</tr>';
        while ($ligne = mysqli_fetch_assoc($resultat)) { 
            echo '<tr>';
        echo '<td>'.$ligne['ID'].'</td>';
        echo '<td>'.$ligne['id_client'].'</td>';
        echo '<td>'.$ligne['description'].'</td>';
        echo '<td>'.$ligne['periode'].'</td>';
        echo '<td>'.$ligne['prix'].'</td>';
        echo "<td>";
       //bgcolor = "red"
          
          echo '<a href=supprimer.php?id='.$ligne['ID'].'>Supprimer</a>';

      
        echo "</td>";
          echo '</tr>';
      }
    echo '</table>'; 

    if(isset($_GET['error'])){
       
        echo '<font color=red> Réservation supprimée ! </font><br>';
  }  

  
  } 

  if(isset($_POST['modifier']))
  {
  
  $modif = "UPDATE reservations SET periode=? where ID=?";
  $result = mysqli_prepare($base,$modif);
  $ok= mysqli_stmt_bind_param($result,'si',$periode,$id);
  $periode=$_POST['periode'];
  $id=$_POST['ID'];
  $ok= mysqli_stmt_execute ($result);
  
  if ($ok == FALSE) { 
      echo "Echec de l'exécution de la requête.<br />";
   } 
  else 
  { echo " <font color=red>Modification réussie !</font> <br />"; }
  
  mysqli_stmt_close($result);
  mysqli_close($base);
  header( "refresh:3;url=mes-reservations.php" );
  
  
  
  }
       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
    a{
      color : #B6BD37;
    }

    h3{
      color : #E75E36;
      font-family: Comic Sans, Comic Sans MS, cursive;
    }
    p{
      color : #6C943B;
      font-weight: bold;
      font-family: Comic Sans, Comic Sans MS, cursive;
    }
    table {
        text-align : center;
    }
    body{
      text-align : center;
    }
   
    </style>
</head>
<body>
    <br> 
    <h3>Modifier les réservations : </h3><br>
    <form action ="" method="post">

     <label>ID de la reservation :</label>
      <select name="ID" id="">
      <?php 
      while ($ligne1 = mysqli_fetch_assoc($liste_id)){

        echo '<option value='.$ligne1['ID'].'>'.$ligne1['ID'].'</option>';
      }
      
      ?>
      </select>

      <p>Veuillez choisir la période :</p>
     <label for="">Periode : </label>
      <select name="periode" id="">
      <option value="15/11-22/11">15/11-22/11</option>
      <option value="25/01-01/02">25/01-01/02</option>
      <option value="03/04-10/04">03/04-10/04</option>
      </select><br><br>
      <input type="submit" name ="modifier" value="Modifier">



    </form>
   <a href="index.php">Retour à l'accueil</a> <br>
   <a href="sejour.php">Séjours</a>

   
</body>
</html>