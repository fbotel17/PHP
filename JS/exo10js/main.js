MaDiv = document.getElementById("Methode3");

MaDiv.addEventListener("mouseover", Survole);
MaDiv.addEventListener("mouseout", SurvolePas);
MaDiv.addEventListener("mousedown", Click);
MaDiv.addEventListener("mouseup", DontClick);


function Survole(evenement){
    evenement.target.innerHTML = "On m'a survolé";
}
function SurvolePas(evenement){
    evenement.target.innerHTML = "Coucou tout le monde";

}
function Click(evenement){
    evenement.target.className = "class2";
}
function DontClick(evenement){
    evenement.target.className = "class1";
}
