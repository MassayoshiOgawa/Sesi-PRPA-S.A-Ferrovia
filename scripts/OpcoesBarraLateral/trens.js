function print(msg) {
    console.log(msg)
}

let bobo = false;
let tamanho = "0" ;
let currBox = null;

function abrir(box){
    if (tamanho !== "0" || currBox !== null){
        if (currBox !== null && currBox !== box) { 
            tamanho = "50px";
            currBox.style.height = tamanho;
            print("A")
            tamanho = "1000px";
            box.style.height = tamanho;
            bobo = false;
            currBox = box;
        }
    }

    if (bobo == false){
        tamanho = "1000px";
        box.style.height = tamanho;
        bobo = true;
        currBox = box;
        print("B")
    }else{
        tamanho = "50px";
        box.style.height = tamanho;
        bobo = false;
        currBox = null;
        print("C")
    }
}
