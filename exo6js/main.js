/*var text = "titi";
var num = 100;
var tab = ['Apples', 'Banana'];
var object = window;

alert(text+num+tab[0]+objet.location.pathname);*/

/*var MavariableString = "toto";

var MavariableNumerique = prompt("entrez un nombre", 100);

if(MavariableString == "toto" && MavariableNumerique != 200 || MavariableNumerique <= 100)
{
    alert("je suis le cas 1");
}
else
{
    alert("je suis le cas 2");
}*/

/*
var object = window;
if(object.outerWidth <= 800 && object.outerHeight<=800)
{
    alert("Page trop petite !!!");
}*/


var nombre = prompt("entrez un nombre et je vais calculer sa factoriel");
var somme = 1;

for(var i=1; i <= nombre; i++)
{
    somme = somme * i;
}
alert("la factoriel de votre nombre est : "+ somme);