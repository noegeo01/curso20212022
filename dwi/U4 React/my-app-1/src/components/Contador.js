import React,{useState} from 'react'

const Contador=()=>{
    const[numero,setNumero]=useState(0) 
    const aumentar=()=>{
        setNumero(numero+1)
    } 
    return(
        <div>
            <h3>Mi componente contador:{numero}</h3>
            <button onClick={aumentar}>Click</button>
        </div>
        
    );
}
export default Contador;