<?php
session_start();
include 'connection.php';

if(isset($_SESSION['ID']))
{
    $ID = $_SESSION['ID'];
    if(isset($_POST['reserver']))
    {
    
    $destination = $_POST['liste'];
        if($destination=='Tozeur')
        {
            
            $sql = "INSERT INTO `reservations` (`id_client`, `description`, `periode`, `prix`) VALUES ($ID,'Tozeur','15/11 a 22/11','1200 Euro')";
            $ok = mysqli_query($base,$sql);
            echo'<h3><font color=#D5B532>réservation confirmée ! </font></h3>';

        }

        if($destination=='Djerba')
        {
            
            $sql = "INSERT INTO `reservations` (`id_client`, `description`, `periode`, `prix`) VALUES ($ID,'Djerba','02/08 a 10/08','999 Euro')";
            $ok = mysqli_query($base,$sql);
            echo'<h3><font color=#D5B532>réservation confirmée ! </font></h3>';

        }

        if($destination=='Tabarka')
        {
            
            $sql = "INSERT INTO `reservations` (`id_client`, `description`, `periode`, `prix`) VALUES ($ID,'Tabarka','10/04 a 20/04 ','1099 Euro')";
            $ok = mysqli_query($base,$sql);
            echo'<h3><font color=#D5B532>réservation confirmée ! </font></h3>';

        }
    }

}else{
    header('Location: index.php?error=5');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>sejours</title>
    <style>
    p{
        color : #B6BD37;
        font-weight: bold;

    }
    h2{
        color : #E75E36;
        font-family: Comic Sans, Comic Sans MS, cursive;
    }
    img {
        width : 400px;
        height : 350px;
    }
    body {
        text-align : center;
    }
    </style>
    <script>
        function aff() {
            let liste =  document.getElementById('liste');
            let resultat = document.getElementById('affichage');
           
            if(liste.value=="Tozeur")
            {
                resultat.innerHTML='<h2>Tozeur</h2><br><img src="images/sahara.jpg" alt=""> <br><p>Description :</p> Découvrez les plaisirs de voyager dans le désert tunisien : En 4X4, à dos de dromadaire à Ksar ghilane ou à Douz, au guidon d un quad à Ksar Ghilane ou à Douz,ou simplement d admirer les paysages sur vos deux pieds, lors d un trek.<p>Période :</p> 15/11 à 22/11 <br><p>Prix :</p> 1200€ <br>';
            }
            if(liste.value=="Djerba")
            {
                resultat.innerHTML='<h2>Djerba</h2><br><img src="images/djerba.jpg" alt=""><br><p>Description :</p>A Djerba, vous ne risquez pas de vous ennuyer.Pensez sur tout à sortir de l hôtel,profitez du beau temps pour admirer tous les cotés de Djerba. Les plages sont magnifiques mais il n y a pas que ça...Si vous sortez pendant la journée, n oubliez pas vos chapeaux et vos crèmes solaires,il fait vraiment chaud ! <br><p>Période :</p> 02/08 à 10/08 <br><p>Prix :</p> 999€<br>'
            }
            if(liste.value=="Tabarka")
            {
                resultat.innerHTML='<h2>Tabarka</h2><br><img src="images/ain draham.jpg" alt=""><br><p>Description :</p> Tabarka est une ville touristique connue pour les activités de plongée (fonds marins poissonneux où la pêche au mérou et à la langouste est pratiquée) et le corail utilisé dans la bijouterie. On y vient aussi pour ses festivals dont le célèbre Tabarka Jazz Festival. La ville est surplombée d un rocher sur lequel est construit un fort génois.  <br><p>Période : </p>10/04 à 20/04 <br><p>Prix :</p> 1099€ <br><br>'
            }
        }
        
    </script>
</head>
<body onload='aff()'>
<form action="sejour.php" method="POST">
   <h2 style = "color : #6C943B"; > Veuillez choisir votre destination : </h2>
    <select name="liste" id="liste" onchange='aff()'>
      <option value="Tozeur">Tozeur</option>
        <option value="Djerba">Djerba</option>
        <option value="Tabarka">Tabarka</option>
    </select>
 
    <div id="affichage"> </div>
    <input type="submit" value="reserver" name="reserver"><br>
 </form>
    <br><a href="mes-reservations.php">Mes réservations</a>
     <br><a href='index.php'>Retour à l'accueil</a>
    
</body>
</html>