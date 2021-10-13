
    
	<?php
        /* Dado un texto separado por espacios decirme aquella palabra que es mayor 
        del texto*/
        $texto ="Hola me llamo Francisco";
        $token=" ";
        $arr=explode($texto,$token); 

       
        
        function palabra_mayor($arr){
        $mayor="a";        
        $i=0;
        $pos="";
        $tamano=count($arr)-1;
        
            while($i<=$tamano){
                if(strcmp($arr[$i],$mayor)>0){     
                    $mayor=$arr[$i];
                    $pos=$i;     
                }
                $i++;
            }
        return $pos;
        }
       
        
        function intercambio($posicion,$arr)
        {
            
            $tamano=count($arr)-1;
            $ultima_palabra=$arr[$tamano];
            $palabra_aux=$arr[$posicion];
            $arr[$tamano]=$palabra_aux;
            $arr[$posicion]=$ultima_palabra;

        }


        $posicion=palabra_mayor($arr);
            intercambio($arr,$posicion);
            foreach($arr as $pos){
            echo $pos;}











?>