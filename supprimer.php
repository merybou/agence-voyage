<?php
include 'connection.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];
   
$supp = "DELETE FROM reservations WHERE ID=?";
$result = mysqli_prepare($base,$supp);
$ok= mysqli_stmt_bind_param($result,'i',$id);
$ok= mysqli_stmt_execute ($result);

    if ($result == FALSE) {
        echo "Echec de l'exécution de la requête.<br />";
        }else
        {
            $error = 4;
         }  
         mysqli_stmt_close($result);
         mysqli_close($base);
         header('Location: mes-reservations.php?error='.$error);
         
}
?>

