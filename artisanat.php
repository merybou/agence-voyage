<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artisanat</title>
	<style type="text/css">




  nav {
 
  padding: 45px 0px 45px 0px;
}

nav a {
  margin-left: 150px;
  padding: 0px 20px 0px 20px;
  color: #D8673F;
  font-size: 20px;
  font-weight: bold;
  white-space: nowrap; /*pour ne pas revenir en ligne*/
}

   a{
    text-decoration: none;
    color: #D8673F;
  }

   a:hover {color: #5EA151;
  }

  .active {
   color: #5EA151;
 }

 header h1 {margin-left: 20px;
  color: #38A698;
  padding: 20px;
  font-family: "Comic Sans MS", cursive, sans-serif;
}

article img {
 width: 300px;}

 .btn{
  float:right;

}
.btnControl,.plus {
  display: none;
}

.btnControl:checked + label + .plus {
  display: block;
}

.btn { 

  cursor: pointer;
}

section article {display: inline-block;
  width: 20%;
  vertical-align: top;
  margin-right: 20px;
  padding: 10px;}

  section {
    text-align: center;
  }

  section article h4 { color: #6EC047;
   font-family: Candara;
   font-size: 20px; }

   section article p{
    text-align: left;
  }

  footer div {
    text-align: center;
    margin-right: 100px;
  }

  p a {
   color: #D222BF;
 }

 p a:hover{
   color: #D22255;
 }

 footer { 
  display: flex;
  align-items: center; 
  justify-content:space-around;
  padding: 5px; 
  margin-top: 70px;
  background-position: top;
  background-image: url(images/jemm.png);
  background-repeat: no-repeat; 
  background-size: 100%;
}

#table {
  height: 30px;
  width: 230px;
}


@media only screen and (max-width: 600px) {
  nav {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  nav a {
    padding: 7px;
  }

  section  {
    display: flex;
    flex-direction: column;
  } 

  section article {
   width: 100%;
 }

 .btn{
   float:none;
 }

 footer {
  flex-direction: column;
  background-image: none;
  background-color: lightgrey;
}

footer div {
  margin: 10px 25px 0px 25px;
}

}

@media only screen and (min-width: 600px) and (max-width: 992px) {

nav {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

 nav a {
  padding: 7px;
}

header h1 {
  text-align: center;
}

section  {
  display: flex;
  flex-direction: column;
} 

section article {
 width: 100%;
}

.btn{
 float:none;  
}

footer {
  flex-direction: column;
  background-image: none;
  background-color: lightgrey;
}

footer div {
  margin: 10px 25px 0px 25px;
}

}

</style>
</head>
<body>

	<div class="container">
   <header>
     <h1>Bienvenue En Tunisie</h1>
     <nav>
      <a href="index.php">Accueil</a>
      <a href="sitearcheo.php">Sites archéologique</a>
      <a href="villes.php">Villes touristiques</a>
      <a class="active" href="artisanat.php">Artisanat</a>
    </nav>

  </header>

  <section>
    <article>
      <img src="images/kilim.jpg" alt="img"/>
      <h4>Kilim</h4>
      <p>Les kilims (ou klims) proviennent généralement du sud de la Tunisie. Ce sont des tapis tissés, en laine de mouton.</p>

      <input type="checkbox" class="btnControl" id="btnControl1"/>
      <label class="btn" for="btnControl1">...</label>
      <p class="plus">Ils rappellent l'histoire berbère de la Tunisie et ils diffèrent du kilim turc ou perse par leurs motifs, leur épaisseur et leur technique de fabrication. Si vous souhaitez un tapis très coloré, léger et facile à entretenir, le kilim est le tapis qui pourrait vous convenir.</p>

    </article>
    <article>
      <img src="images/chachia.jpg" alt="img"/>
      <h4>Chechia</h4>
      <p>La chéchia est un couvre-chef masculin porté par de nombreux peuples musulmans. Elle est le couvre-chef national de la Tunisie.</p>
      <input type="checkbox" class="btnControl" id="btnControl2"/>
      <label class="btn" for="btnControl2">...</label>
      <p class="plus">Cousine du béret européen, la chéchia est à l'origine un bonnet en forme de calotte de couleur rouge vermillon.
       La confection traditionnelle de la chéchia passe par six étapes : <br>
       Le tricotage qui permet d'obtenir le kabous, le foulage destiné au durcissement du Kabous, le cardage au moyen du chardon initialement, 
     la teinture rouge vermillon à base de cochenille, le moulage et la finition</p>

   </article>
   <article>
    <img src="images/jebba.jpg" alt="img" />
    <h4>jebba</h4>
    <p>La jebba est un costume traditionnel masculin qui consiste en un vêtement ample qui tombe jusqu’en dessous du genou.</p>
    <input type="checkbox" class="btnControl" id="btnControl3"/>
    <label class="btn" for="btnControl3">...</label>
    <p class="plus">Elle constitue la pièce principale du costume traditionnel masculin en Tunisie.Généralement, la jebba peut se porter avec un gilet (farmla, badia ou sadria), une veste (mentan), une culotte bouffante (sarouel) serrée à la taille par une ceinture de soie et une paire de balghas. Elle peut être recouverte d'un burnous en extérieur. Il faut savoir aussi que la Jebba tunisienne a bénéficié des influences andalouses et turques pour se présenter telle qu'elle est aujourd'hui. 

    Les prix fluctuent en fonction de la matière et de la broderie. Même les femmes et les petites filles peuvent en avoir une. Celle-ci est différente de la première. Elle est plus décontractée et tombe jusqu’à la cheville. Elle existe en plusieurs coloris.</p>

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

</body>
</html>