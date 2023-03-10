MaDiv = document.getElementById("button");

MaDiv.addEventListener("click", CalculAirePeriCercle);

function CalculAirePeriCercle(evenement){
    var rayon = window.prompt("Saisir un rayon : ");
    var aire = (rayon*rayon) * Math.PI;
    var perimetre = (rayon*2) * Math.PI;
    alert("aire : " + aire + "  perimètre : " + perimetre);
}
