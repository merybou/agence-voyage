<?php
include 'connection.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $resultat = mysqli_query($base, 'SELECT ID,id_client,description,periode,prix FROM reservations where ID='.$id.'');
    if ($resultat == FALSE) {
        echo "Echec de l'exécution de la requête.<br />";
        }else
        {
            while ($ligne = mysqli_fetch_assoc($resultat));
?>


<form action="" method="post">
<input type="hidden" name="ID"  value="<?php echo $_GET['id']?>" >
<p>Veuillez choisir la période :</p>
periode : <select name="periode" id="">
<option value="15/11-22/11">15/11-22/11</option>
<option value="25/01-01/02">25/01-01/02</option>
<option value="03/04-10/04">03/04-10/04</option>
</select>

<input type="submit"  name="modifier">
</form>


<?php 
echo "<a href='index.php'>Retour à l'accueil</a> ";
echo "<a href='mes-reservations.php'>mes reservations</a><br />";
 }}
 ?>

<?php
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



}

?>



