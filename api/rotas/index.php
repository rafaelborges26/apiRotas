<?php


$url = $_REQUEST;
    if(isset($_REQUEST))
    {
        
        $cont = 0;
            foreach ($url as $url => $value)
            {
                
                if($cont == 0)
                    $origem = $url;
                else if($cont == 1)
                    $destino = $url;
                else if($cont == 2)
                    $autonomia = $url;
                else if($cont == 3)
                    $valorlitro = $url;
                
              $cont++;
            }
            echo "Origem: ".$origem. "Destino: ".$destino. "Autonomia: ".$autonomia. "ValorLitro : " .$valorlitro;
        
            
        
    }
    else
            echo "Erro";

    
?>