  MaDiv = document.getElementById("button1");
  MaDiv.addEventListener("click", jourDeLaSemaine);

function jourDeLaSemaine() {
    const date = new Date();
    const jour = date.getDay();
  
    switch (jour) {
      case 0:
        alert("Aujourd'hui, nous sommes dimanche");
        break;
      case 1:
        alert("Aujourd'hui, nous sommes lundi");
        break;
      case 2:
        alert("Aujourd'hui, nous sommes mardi");
        break;
      case 3:
        alert("Aujourd'hui, nous sommes mercredi");
        break;
      case 4:
        alert("Aujourd'hui, nous sommes jeudi");
        break;
      case 5:
        alert("Aujourd'hui, nous sommes vendredi");
        break;
      case 6:
        alert("Aujourd'hui, nous sommes samedi");
        break;
      default:
        alert("Erreur : jour non valide !");
        break;
    }
  }
  