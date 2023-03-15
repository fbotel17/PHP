var contenuAPI = document.getElementById("contenuAPI");

//Exo3
/*function mafunction() {

    fetch('donneMoiLaTailleDeTibo.php').then((resp) => resp.json()).then(function (data) {
        console.log(data);
        alert(data);
        contenuAPI.innerHTML = data;
        
    }
    ).catch(function (error) {
        console.log(error);
    });
}*/

//Exo4

/*setInterval(function () {
    fetch('donneMoiLaTailleDeTibo.php').then((resp) => resp.json()).then(function (data) {
        console.log(data);
        contenuAPI.innerHTML = data;
    }
    ).catch(function (error) {
        console.log(error);
    })
}, 2000)
*/


//Exo5

//method GET

/*
function mafunction() {
    fetch('donneMoiLaTailleDeTibo.php?key1="Taille : "&key2="30"', {
        method: 'GET'
    }).then((resp) => resp.json()).then(function (data) {
        console.log(data);
        contenuAPI.innerHTML = data;
        alert(data);
    }
    ).catch(function (error) {
        console.log(error);
    })
}
*/

//method POST

function mafunction() {
    fetch('donneMoiLaTailleDeTibo.php',{
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          key1: 'Taille :',
          key2: '80 cm'
        })
      }).then((resp) => resp.json()).then(function (data) {
        console.log(data);
        contenuAPI.innerHTML = data;
        alert(data);
    }
    ).catch(function (error) {
        console.log(error);
    })
}
