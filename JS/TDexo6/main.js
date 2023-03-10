MaDiv = document.getElementById("button1");

MaDiv.addEventListener("click", affiche);

let tab= [-2, 1, 4];

function soustrait(x){
    x=x-2;
    if(x>=0){
        return x;
    }
    else{
        return "Nombre négatif !";
    }
}

function affiche(evenement){
    alert("Premier élément du tableau : " + soustrait(tab[0]) );
    alert("Dernier élément du tableau : " + soustrait(tab[tab.length-1]));

}
