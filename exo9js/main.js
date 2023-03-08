function changeDivName(){
    alert("je change les noms des divs par name");
    var nexDiv = document.getElementsByName("desdivs");
    nexDiv.forEach(function(div) {
        div.innerHTML = "Hello";
    });
}

function changeDivTag(){
    alert("je change les noms des divs par tag");
    var nexDiv2 = document.getElementsByTagName("div");
    for(var i = 0;i< nexDiv2.length; i++){
        nexDiv2[i].innerHTML = "Hello";
    };
}

function changeDivClassName(){
    alert("je change les noms des divs par class");
    var nexDiv3 = document.getElementsByClassName("desdivs2");
    for(var i = 0;i< nexDiv3.length; i++){
        nexDiv3[i].innerHTML = "Hello";
    };
}