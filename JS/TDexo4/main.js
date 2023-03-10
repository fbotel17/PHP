let tab=[-2, 1, 4];

MaDiv = document.getElementById("button");

MaDiv.addEventListener("click", affiche);

function additionne(x){
    return x*2;
}

function affiche(evenement){
    alert("Multiplication du premier élément : " + additionne(tab[0]));
    alert("Multiplication du dernier élément : " + additionne(tab[tab.length-1]));
}