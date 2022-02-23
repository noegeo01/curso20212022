function entre(x,y){
    return Math.round(Math.random()*(y-x-1)+x)
}
 function parEntre(x,y){
    let par=1;
    while(par%2!==0){
        par=entre(x,y)
    }
    return par;
}
 function imparEntre(x,y){
    let impar=2;
    while(par%2==0){
        par=entre(x,y)
    }
    return impar;
}
const cero =0;
export {
    parEntre,
    imparEntre,
    cero
}