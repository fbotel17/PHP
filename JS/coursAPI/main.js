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

fetch('donneMoiLaTailleDeTibo.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    key1: 'value1',
    key2: 'value2'
  })
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error(error))
