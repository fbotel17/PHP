var a = 3;
var b = 2;

MaDiv = document.getElementById("button");

MaDiv.addEventListener("click", affiche);

function multiplie(x=8){
    return x*3;
}

function affiche(evenement){
    alert("calcul avec a en paramètre : " + multiplie(a)); 
    alert("calcul avec b en paramètre : " + multiplie(b)); 
    alert("calcul avec rien en paramètre : " + multiplie()); 

}