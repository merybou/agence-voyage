
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>villes</title>
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

    a 
    {
      text-decoration: none;
      color: #D8673F;
    }
    
     
     a:hover {color: #5EA151;
    }

    .active
    {
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
      padding: 10px;
    }

    section article h4 { color: #6EC047;
     font-family: Candara;
     font-size: 20px; }

     section {
      text-align: center;
    }

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
      margin-top: 60px;
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
      <a class="active" href="villes.php">Villes touristiques</a>
      <a href="artisanat.php">Artisanat</a>
    </nav>

  </header>

  <section>
    <article>
      <img src="images/ksour.jpg" alt="img"/>
      <h4>Ksour et villages berbères</h4>
      <p>Au cœur d’un paysage desséché de montagnes, de plateaux et de pitons escarpés, surgissent les étonnantes architectures des Ksour.</p>

      <input type="checkbox" class="btnControl" id="btnControl1"/>
      <label class="btn" for="btnControl1">...</label>
      <p class="plus">Perdus au milieu de nulle part, semblables à de grosses ruches couleur de rocher, ces “châteaux du désert” (“ksour” est le pluriel de “ksar”) étaient autrefois des points de ralliement pour les semi-nomades de la région qui y stockaient leurs récoltes à l’abri des pillards, dans des alvéoles superposées appelées “ghorfas”. Certains Ksour, comme Chenini et Douiret, sont des villages perchés sur des sommets imprenables. Leurs “ghorfas” en ruine se confondent avec le faîte des montagnes et les habitations y sont en partie creusées dans les parois rocheuses. La langue berbère y est encore en usage de nos jours. Plus au nord, le paysage s’adoucit à mesure qu’approche Gabès, la grande oasis en bord de mer.</p>

    </article>
    <article>
      <img src="images/djerba.jpg" alt="img"/>
      <h4>Djerba</h4>
      <p>Djerba est une île de la côte tunisienne connue pour ses plages méditerranéennes et ses villes blanches du désert influencées par les cultures berbère, arabe, juive et africaine.</p>
      <input type="checkbox" class="btnControl" id="btnControl2"/>
      <label class="btn" for="btnControl2">...</label>
      <p class="plus">Sa ville principale est Houmt Souk. Elle est réputée pour ses marchés artisanaux, son port de pêche et sa forteresse du XVIe siècle, Borj el Kebir. </p>

    </article>
    <article>
      <img src="images/ain draham.jpg" alt="img" />
      <h4>Ain Draham</h4>
      <p>Sa ville principale est Houmt Souk. Elle est réputée pour ses marchés artisanaux, son port de pêche et sa forteresse du XVIe siècle, Borj el Kebir.</p>
      <input type="checkbox" class="btnControl" id="btnControl3"/>
      <label class="btn" for="btnControl3">...</label>
      <p class="plus">Ain Draham compte en effet parmi les rares villes tunisiennes où il neige en hiver, il ne neige pas en abondance, mais juste assez pour donner une touche unique à cette petite ville perchée.

        L'appellation Ain Draham signifie « source d'argent » qui fait référence à ses nombreuses sources d'eaux chaudes. Plusieurs centres de thermalisme et de cures exploitent aujourd'hui les bienfaits de ces sources.

        L'architecture des maisons aux toits en tuiles, surtout en hiver, quand la neige couvre les toits, donne à Ain Draham une allure de village alpin.

        Vous vous demandez sûrement quelles activités on peut bien pratiquer à Ain Draham. Toutes sortes d'activités de plein air sont possibles: randonnées, échappées en VTT, thermalisme, chasse (renseignez-vous sur les endroits où la chasse est autorisés), etc.

      Séjourner à Ain Draham c'est vous offrir un vrai bol d'air frais.</p>

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