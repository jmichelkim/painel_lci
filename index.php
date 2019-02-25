<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GECAV -Painel LCI</title>
    <link rel="stylesheet" type="text/css" href="css/index-2.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link type="text/css" rel="stylesheet" href="css/principal.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/principal.css">    
</head>

<?php
    require_once 'banco/conecta.php';
    require_once 'banco/banco.php';
    $produtos = totalCAIXA($conexao);
    $totalDIRETORIA = totalDIRETORIA($conexao);
    $totalDIRETORIA = totalDIRETORIA($conexao);
    $totalTodas = listarTodas($conexao);
    $somaTotalDDIRETORIA = somaTotalDiretoria($conexao);
    $somaTotalSR = somaTotalSR($conexao);
    $somaTotalAGENCIA = somaTotalAGENCIA($conexao);
?>

<body>

    <div class="navbar">
        <div class="grid-container">
            <div class="grid-item titulo" style="width: 100%;">
                <h6 >GECAV - Painel de Gerenciamento - LCI - Versão 2.0.1</h6>
            </div>
            <div class="grid-item titulo">
            </div>
            <div class="grid-item titulo">
                <h6>Jorge Michel Kim - C126307</h6>
            </div>
        </div>
    </div>

    <div class="conteudo">

            <h5 class="centralizado azul" style="padding-bottom: 20px; padding-top: 20px;">Painel Volume de Aplicações em LCI</h5>
            
        <div id="divTabela">

            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s1 active">
                        </li>
                        <li class="tab col s2">
                            <a class="active" href="#test1">CAIXA</a>
                        </li>
                        <li class="tab col s2">
                            <a href="#test2">Diretoria</a>
                        </li>
                        <li class="tab col s2">
                            <a href="#test3">SR</a>
                        </li>
                        <li class="tab col s2">
                            <a href="#test4">Agência</a>
                        </li>
                        <li class="tab col s2">
                            <a href="#test5">Todos</a>
                        </li>
                        <li class="tab col s1">
                        </li>
                    </ul>
                </div>
            </div>

            <div id="test1" class="col s12">
                
                <hr>

                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Instituição</th>
                                <th>Valor Bruto - R$</th>
                                <th>Valor Líquido - R$</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?foreach($produtos as $totalCAIXAT):?>
                                <tr>    
                                    <td>CAIXA</td>
                                    <td><?=number_format($totalCAIXAT['totalCaixaBruto'],2,",",".")?></td>
                                    <td><?=number_format($totalCAIXAT['totalCaixaLiquido'],2,",",".")?></td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
            </div>

            <div id="test2" class="col s12">
                <hr>

                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Diretoria</th>
                            <th>Valor Bruto - R$</th>
                            <th>Valor Líquido - R$</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?foreach($somaTotalDDIRETORIA as $totaltoda):?>
                                <tr>
                                    <td><?=$totaltoda['co_dire']?></td>
                                    <td><?=number_format($totaltoda['vl_bruto'],2,",",".")?></td>
                                    <td><?=number_format($totaltoda['vl_liquido'],2,",",".")?></td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
                    
            </div>

            <div id="test3" class="col s12">
                <hr>

                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>SR</th>
                                <th>Valor Bruto - R$</th>
                                <th>Valor Líquido - R$</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?foreach($somaTotalSR as $totalSR):?>
                                <tr>    
                                    <td><?=$totalSR['co_sr']?></td>
                                    <td><?=number_format($totalSR['vl_bruto'],2,",",".")?></td>
                                    <td><?=number_format($totalSR['vl_liquido'],2,",",".")?></td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
            </div>

            <div id="test4" class="col s12">
                <hr>

                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>Agência</th>
                                <th>Valor Bruto - R$</th>
                                <th>Valor Líquido - R$</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?foreach($somaTotalAGENCIA as $totalAGENCIA):?>
                                <tr>    
                                    <td><?=$totalAGENCIA['co_unidade']?></td>
                                    <td><?=number_format($totalAGENCIA['vl_bruto'],2,",",".")?></td>
                                    <td><?=number_format($totalAGENCIA['vl_liquido'],2,",",".")?></td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
            </div>

            <div id="test5" class="col s12">
                <hr>

                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>Diretoria</th>
                            <th>SR</th>
                            <th>Unidade</th>
                            <th>CPF</th>
                            <th>Dt Aplicação</th>
                            <th>Dt Vencimento</th>
                            <th>Valor Bruto</th>
                            <th>Valor Líquido</th>
                        </tr>
                        </thead>

                        <tbody>
                            <?foreach($totalTodas as $totaltoda):?>
                                <tr>
                                    <td><?=$totaltoda['co_dire']?></td>
                                    <td><?=$totaltoda['co_sr']?></td>
                                    <td><?=$totaltoda['co_unidade']?></td>
                                    <td><?=$totaltoda['cpf_cliente']?></td>
                                    <td><?=$totaltoda['dt_inicio_aplicacao']?></td>
                                    <td><?=$totaltoda['dt_vencimento_aplicacao']?></td>
                                    <td><?=number_format($totaltoda['vl_bruto'],2,",",".")?></td>
                                    <td><?=number_format($totaltoda['vl_liquido'],2,",",".")?></td>
                                </tr>
                            <?endforeach?>
                        </tbody>
                    </table>
                            
            </div>


        </div>


        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/principal.js"></script>
        <script>
            M.AutoInit();
        </script>
</body>
</html>