<?php


$url = $_REQUEST;

    if(isset($_REQUEST))
    {
        
        $cont = 0;
            foreach ($url as $url => $value)
            {
                
                if($cont == 0)
                    $ori = $url;
                else if($cont == 1)
                    $dest = $url;
                else if($cont == 2)
                    $autonomia = $url; 
                else if($cont == 3)
                    $litro = $url;
                
              $cont++;
            }

            $autonomiaint = settype($autonomia, "float");
            $litroint = settype($litro, "float");

            setRotas($ori,$dest,$autonomia,$litro);

            

            //echo "Origem: ".$ori. "Destino: ".$dest. "Autonomia: ".$autonomia. "ValorLitro : " .$litro;
            
//            return json_encode()
            //criar classe em outro arq e chamar aq para tratar os valores digitados

            
    }
    else
    {
            echo "Erro";
    }

            function setRotas(string $origem, string $destino, string $autonomia, string $valorLitro)
            {

                $aOrigem = array("A","B","A","C","B","D");
                $aDestino = array("B","D","C","D","E","E");
                $aKm = array(10,15,20,30,50,30);

                $qtdrotas = count($aOrigem);
                $valorcusto = 0;
                $valorkm = 0;
                $valorKm2 = 0;
                $rotas = "";
                /*
                //1 fase - de primeira
                for($i=0;$i<$qtdrotas;$i++)
                {

                    if($origem == $aOrigem[$i])
                    {
                        if($destino == $aDestino[$i])
                        { //VER CALCULO
                            $valorkm = $aKm[$i];
                                $valorLitro = round($valorLitro,2);
                                $valorcusto = $valorLitro / $autonomia * $valorkm;
                                
                        }
                              
                    }

                }*/
                    
//                    echo "Valor litro ".$valorLitro. " Autonomia: ". $autonomia. " Valor km: ". $valorkm;
                    
                    //echo "Valor custo ".$valorcusto." = ".$valorLitro. " / ". $autonomia. " * ".$valorkm;
                    //echo "Valor custo: ".$valorcusto." Origem: ".$origem. "Destino: ". $destino;

                    //2 parte
                    for($i=0;$i<$qtdrotas;$i++)
                    {
    
                        if($origem == $aOrigem[$i])
                        {
                            $rotas = $aOrigem[$i]." ";
                            if($destino == $aDestino[$i])
                            { //VER CALCULO
                                    $rotas = $rotas.$aDestino[$i]." ";
                                    var_dump($valorkm);
                                    $valorkm = $aKm[$i];                                    
                                    $valorLitro = round($valorLitro,2);
                                    $valorcusto = $valorLitro / $autonomia * $valorkm;
                                    $i = $qtdrotas;
                                    
                            }else
                            {
                                //2 parte 
                                
                                //setar o destino na origem junto com o numero do indice
                                $rotas = $rotas.$aDestino[$i]." ";
                                
                                for($j = 0; $j < $qtdrotas; $j++)
                                {
                                    if($destino == $aDestino[$j])
                                    { 

                                        if($valorKm2 > $aKm[$j] || $valorKm2 == 0)
                                        {                                            
                                            $valorKm2 = $aKm[$j];   
                                        }
                                    }

                                }


                                var_dump($valorkm);
                                $valorkm = $valorkm + $valorKm2;
                                $valorLitro = round($valorLitro,2);
                                $valorcusto = $valorLitro / $autonomia * $valorkm;
                                $rotas = $rotas.$destino." ";
                                $i = $qtdrotas;
                            }
    
                    } 
                    
            }
                echo "Valor litro: ".$valorLitro. " Autonomia: ". $autonomia. " Valor km: ". $valorkm. " valor custo: ".$valorcusto ;
                echo " Rotas: ". $rotas;
                echo "teste";
            
        }
    
?>