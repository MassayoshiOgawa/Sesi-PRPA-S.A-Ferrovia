function print(msg) {
    console.log(msg)
}

let estado = false;
let tamanho = "0" ;
let currBox = null;
let currTri = null

function abrir(box){
    var tri = box.querySelector("img");

    if (tamanho !== "0" || currBox !== null){
        if (currBox !== null && currBox !== box) { 
            tamanho = "50px";
            currBox.style.height = tamanho;
            currTri.style.transform = "rotate(0deg)";
            print("A")
            tamanho = "1000px";
            box.style.height = tamanho;
            tri.style.transform = "rotate(180deg)";
            estado = false;
            currBox = box;
            currTri = tri;
        }
    }
    
    if (estado == false){
        tamanho = "1000px";
        tri.style.transform = "rotate(180deg)";
        box.style.height = tamanho;
        estado = true;
        currBox = box;
        currTri = tri;
        print("B")
    }else{
        tri.style.transform = "rotate(0deg)";
        tamanho = "50px";
        box.style.height = tamanho;
        estado = false;
        currBox = null;
        currTri = null;
        print("C")
    }

    

}
