let bobo = false;
let tamanho = "0" ;
function abrir(box){
    
    if (bobo == false){
        tamanho = "1000px";
        box.style.height = tamanho
        bobo = true;
        
        
    }else{
        tamanho = "50px";
        box.style.height = tamanho
        bobo = false;
        
    }
   
}
