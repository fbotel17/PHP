var monParagraphe = document.getElementById("monParagraphe");
var etatInitial = monParagraphe.style.cssText;

monParagraphe.addEventListener("click", function () {
    monParagraphe.innerHTML = monParagraphe.innerHTML.replace("grosso-modo", "");

    var mots = monParagraphe.innerText.split(" ");
    var milieu = Math.floor(mots.length / 2);
    
    mots.splice(milieu, 0, "grosso-modo");
    monParagraphe.innerText = mots.join(" ");
    monParagraphe.style.position = "absolute";
    monParagraphe.style.left = "25%";
    monParagraphe.style.textAlign = "center";
    monParagraphe.innerHTML = monParagraphe.innerHTML.split(" ").join("<br>");
});

monParagraphe.addEventListener("dblclick", function () {
    monParagraphe.innerHTML = monParagraphe.innerHTML.replace("grosso-modo", "");
    monParagraphe.style.cssText = etatInitial;
    monParagraphe.innerHTML = monParagraphe.innerHTML.split("<br>").join(" ");
});