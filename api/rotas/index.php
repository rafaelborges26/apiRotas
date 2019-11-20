<?php


$url = $_REQUEST;


    if(isset($_GET))
    {
        require_once("getrotas.php");   
    }
    else
    {
        echo "Erro";
    }
        
    
?>