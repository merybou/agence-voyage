

function afficher()
{
    let liste =  document.getElementById('liste');
    let resultat = document.getElementById('affichage');
    if(liste.value=="Tozeur")
    {
        resultat.innerHTML.append('Tozeur');
    }
}