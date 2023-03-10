MaDiv = document.getElementById("button1");

MaDiv.addEventListener("click", boucle);

MaDiv2 = document.getElementById("button2");

MaDiv2.addEventListener("click", boucle2);

function boucle(evenement){
    let tab=new Array(3);
    for(var i = 0; i < 3; i++){
        tab[i]=i*i;
    }
    alert("Eléments du tableau :" + tab[0] + ", " + tab[1] + ", " + tab[2]);
}

function boucle2(evenement){
    var nb = window.prompt("Combien d'éléments dans le tableau : ");
    let tab=new Array(nb);
    for(var i = 0; i < nb; i++){
        tab[i]=i*i;
    }
    alert("Eléments du tableau : " + tab);
}