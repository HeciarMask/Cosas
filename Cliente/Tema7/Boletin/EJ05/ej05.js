document.getElementById("addJSON").addEventListener("click", proceso);

function proceso(){
    fetch("https://picsum.photos/list")
        .then((response) => response.json())
        .then(añadeLista);
}

function añadeLista(result){
    
}