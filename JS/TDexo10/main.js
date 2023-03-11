MaDiv = document.getElementById("text");
MaDiv.addEventListener("mouseover", changeText);
MaDiv.addEventListener("mouseout", iniText);

MaDiv2 = document.getElementById("image");
MaDiv2.addEventListener("mouseover", changeImage);
MaDiv2.addEventListener("mouseout", initImage);

function changeText(evenement) {
    this.innerHTML="Aie !!!";
}

function iniText(evenement) {
    this.innerHTML="Passe sur moi";
}

function changeImage(evenement) {
    this.src="https://images.hdqwalls.com/download/retro-big-sunset-5k-9t-960x540.jpg";
}

function initImage(evenement) {
    this.src="https://www.referenseo.com/wp-content/uploads/2019/03/image-attractive-960x540.jpg";
}