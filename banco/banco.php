<?php

function totalCAIXA($conexao){
    
    $produtos = array();
    
    $resultado = mysqli_query($conexao, "SELECT SUM(`vl_bruto`) as totalCaixa FROM base_lci;" );
    
    while($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos, $produto);
}

    return $produtos;
    
    
}

function totalDIRETORIA($conexao){
    
    $totalDIRETORIA = array();
    
    $resultado = mysqli_query($conexao, "SELECT `co_dire` as diretoria FROM base_lci GROUP BY co_dire;" );
    
    while($produto = mysqli_fetch_assoc($resultado)){
    array_push($totalDIRETORIA, $produto);
}

    return $totalDIRETORIA;
    
    
}

function somatotalDIRETORIA($conexao){
    
    $somatotalDIRETORIA = array();
    
    $resultado = mysqli_query($conexao, "SELECT `co_dire`, SUM(`vl_bruto`) as vl_bruto, SUM(`vl_liquido`) as vl_liquido FROM base_lci GROUP BY co_dire;" );
    
    while($produto = mysqli_fetch_assoc($resultado)){
    array_push($somatotalDIRETORIA, $produto);
}

    return $somatotalDIRETORIA;
    
    
}

function listarTodas($conexao){
    
    $totalTodas = array();
    
    $resultado = mysqli_query($conexao, "SELECT * FROM base_lci limit 200;" );
    
    while($produto = mysqli_fetch_assoc($resultado)){
    array_push($totalTodas, $produto);
}

    return $totalTodas;
    
    
}



?>