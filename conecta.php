<?php
    $server   = "localhost";
    $user     = "root";
    $database = "northwind";
    $senha    = "";

    $conecta = mysqli_connect($server,$user,$senha,$database);

    if(!$conecta){
        echo"Erro de Conecção";
    }