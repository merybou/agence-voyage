<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<script>
		function afficherHorloge(){

			var horloge = document.createElement('div');
		
			horloge.id="horloge";
			horloge.style.width = "100px";
			horloge.style.height="25px";
			horloge.style.borderRadius="100%";
			horloge.style.backgroundColor = "#BAEAE1";
			horloge.style.position = "relative";
			horloge.style.left = "25px";
			horloge.style.top = "30px";
			horloge.style.padding = "10px";
			horloge.style.fontFamily = "Comic Sans, Comic Sans MS, cursive";
			horloge.style.textAlign = "center";
			horloge.innerHTML = new Date().toLocaleTimeString();
			document.body.insertBefore(horloge,document.body.firstChild);
			
			setInterval(function(){
				horloge.innerHTML= new Date().toLocaleTimeString();

			},1000);
			
		}
			window.onload = afficherHorloge;
	
	
	</script>
    <link rel="stylesheet" type="text/css" href="index.css">
    
   <style>
   p {
	color : #E75E36;
        font-family: Comic Sans, Comic Sans MS, cursive;
   }
    </style>
	
</head>
<body>
    <center>
	<?php 
		if(!isset($_SESSION['email']) && !isset($_SESSION['password']))//si client pas connecté -> afficher formulaire de conx
		{
			?>
			
        <form action="login.php" method="post">
        <div >
            <?php
            if(isset($_GET['error'])){
                switch ($_GET['error']) {
                case 1:
                    echo '<font color=#58C3A>Un ou plusieurs champs non renseignés!</font> ';
                    break;
                case 2:
                    echo '<font color=#58C3A>Erreur execution requête !</font> ';
                    break;
                case 0:
                    echo '<font color=#58C3A>Vous êtes connectés !</font> ';
                    break;
                    case 3 :
                        echo "<font color=#58C3A>utilisateur inexistant veuillez s'enregistrer</font> ";
					break;
					case 5 :
                        echo "<font color=#58C3A>Veuillez vous connectez !</font> ";
                    break;
                default:
                    break;
                }
            }
            ?>
        </div>
		<?php // le formulaire s'affiche?>
		
    <div class=""> 
    <p>se connecter</p>
    <div class="">
        <input type="text" class="" placeholder="E-mail" name="email" />
      </div>

      <div class="">
        <input type="password" class="" placeholder="password" name="password" />
      </div>

      <div class="">
        <input type="submit" value="valider" name="valider" class="bouton">
      </div>
    </form>
	<a href="inscription.php">s'inscrire</a>
	<?php
		}else{//sinon le user connecté
			if(isset($_GET['error'])){
                switch ($_GET['error']) {
                case 1:
                    echo 'Un ou plusieurs champs non renseignés!';
                    break;
                case 2:
                    echo 'Erreur execution requête!';
                    break;
                case 0:
                    echo '<font color=#58C3A>Vous etes connectés !</font>';
                    break;
                    case 3 :
                        echo "utilisateur inexistant veuillez s'enregistrer";
					break;
					case 5 :
                        echo "Veuillez vous connectez !";
                    break;
                default:
                    break;
                }
            }
			echo '<br>Bienvenue : '.$_SESSION['email'];
			echo '<br><a href="deconnecter.php">Deconnexion</a>';
		}
	?>
        
        
       
    </div>
    </center>

	<div class="container">
		<header>
			<h1>Bienvenue En Tunisie</h1>

			<nav>
				<a class="active" href="index.php">Accueil</a>
				<a href="sitearcheo.php">Sites archéologique</a>
				<a href="villes.php">Villes touristiques</a>
                <a href="artisanat.php">Artisanat</a>
                <a href="sejour.php">Séjours</a>
			</nav>

		</header>
		<div class="slider">
			<div class="slides">

				<div class="slide"> <img src="images/sidibou1.png" alt=""></div>
				<div class="slide"><img src="images/oasis2.png" alt=""></div>
				<div class="slide"><img src="images/dogga2.png" alt=""></div>
			</div>
		</div>

		<section class="articles">
			<article>
				<a href="sitearcheo.php">
					<h2>Sites archéologiques</h2>
					<figure>
						<img src="images/eljem.jpg">
					</figure></a>
				</article>


				<article>
					<a href="villes.php">
						<h2>villes touristiques</h2>
						<figure>
							<img src="images/sahara.jpg">
						</figure></a>
					</article>


					<article>
						<a href="artisanat.php">
							<h2>Artisanat</h2>
							<figure>
								<img src="images/artisanat.jpg">
							</figure></a>
						</article>

					</section>

					<footer>

						<div>
							<h4>NEWSLETTER</h4>
							<hr/>
							<p>Inscrivez-vous à notre newsletter</p>
							<input type="text" name="table" value=" Votre E-mail ici..." id="table">
							<button type="submit" name="bouton" id="button">s'inscrire</button>
						</div>

						<div>
							<h4>SOURCE</h4>
							<hr/>
							<p><a href="https://parmemin.fr/fr/" target="_blank">Parmémin</a> &nbsp;
								<a href="https://www.discovertunisia.com/" target="_blank">Discover Tunisia</a></p>
								<p><a href="https://lepetitjournal.com/" target="_blank">le petit journal</a>&nbsp;
									<a href="https://fr.wikipedia.org/" target="_blank">Wikipedia</a></p> 
								</div>

								<div>
									<h4>SUIVEZ-NOUS</h4>
									<hr/>
									<p>Facebook</p>
									<p> Instagram </p>
								</div>

							</footer>
						</div>
					</body>
					</html>