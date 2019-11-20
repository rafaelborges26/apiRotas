<?php


    if(isset($_GET['A']) || isset($_GET['B']) || isset($_GET['C']) || isset($_GET['D']))
    {
        require_once("getrotas.php");   
    }
    else
    {
        echo "Erro: sem parâmetro";
    }
        
    
?>