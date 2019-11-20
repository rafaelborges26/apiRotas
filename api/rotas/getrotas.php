<?php

Rotas::atribuir();

Class Rotas
{
    
    function atribuir()
    {
        $url = $_GET;
        $cont = 0;
            foreach ($url as $url => $value)
            {
                //dar um replace para se for digitado com . e virar isso "2_5" replace em __ para ponto
                //ajustar para se o valor tiver , colocar . ou seja outro replace
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
            
            $litro = str_replace("_",".",$litro);
            $litro = str_replace(",",".",$litro);
            
            Rotas::getRotas($ori,$dest,$autonomia,$litro);

            
      
    }




            function getRotas(string $origem, string $destino, string $autonomia, float $valorLitro)
            {

                $aOrigem = array("A","B","A","C","B","D");
                $aDestino = array("B","D","C","D","E","E");
                $aKm = array(10,15,20,30,50,30);

                $qtdrotas = count($aOrigem);

                //proprietes
                $valorcusto = 0;
                $valorkm = 0;
                $valorKm2 = 0;
                $rotas = "";

                    //2 parte
                    for($i=0;$i<$qtdrotas;$i++)
                    {
    
                        if($origem == $aOrigem[$i])
                        {
                            $rotas = $aOrigem[$i]." ";
                            $valorkm = $aKm[$i];              
                            if($destino == $aDestino[$i])
                            { 
                                $rotas = $rotas.$aDestino[$i]." ";                             
                                $valorLitro = round($valorLitro,2);
                                $valorcusto = $valorLitro / $autonomia * $valorkm;
                                $i = $qtdrotas;
                                    
                            }else
                            {

                                //Destino mais complexo
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
                                                                
                                $valorkm = $valorkm + $valorKm2;
                                $valorLitro = round($valorLitro,2);
                                $valorcusto = $valorLitro / $autonomia * $valorkm;
                                $rotas = $rotas.$destino." ";
                                $i = $qtdrotas;
                                
                            }
    
                    } 
                    
            }
    
                    $json = array('rotas' => $rotas, 'custo' => $valorcusto);

                    echo json_encode($json);
                  }

                       

        //jasonencode

     
    }
        



        ?>        