$(document).ready(function(){
    let cartas = new Array(54).fill(false);
    $("#dar_carta").click(function(){
        var n = true;
        var cont = 0;
        var num = Math.floor(Math.random()*54) +1;
        while(n){
            if(cartas[n-1] == true){
                continue;
            }else{
                $("#carta_activa").html("<img src='Img/"+num+".jpg'>")
                cartas[n-1] = true;
                n=false;
                cont++;
            }
            if(cont == 54){
                console.log("Ya se dieron todas las cartas");
                n=false;
            }
        }
    })
})