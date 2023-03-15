var titre = document.getElementById("titre");
titre.addEventListener("click", modif_paragraphe);

var paragraphe = document.getElementById("paragraphe");
paragraphe.addEventListener("click", centrage_h1);


function modif_paragraphe() {
    var paragraphe = document.getElementById("paragraphe");
    
    paragraphe.innerHTML = paragraphe.innerHTML.replace(original, corrigé);
}

function centrage_h1() {
    var h1s = document.getElementsByTagName("h1");
    var h1 = h1s[0];
    h1.setAttribute("align", "center");
}

