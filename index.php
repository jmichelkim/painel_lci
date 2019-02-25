<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/principal.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<?php
    require_once 'banco/conecta.php';
    require_once 'banco/banco.php';
    $produtos = totalCAIXA($conexao);
    $totalDIRETORIA = totalDIRETORIA($conexao);
    $totalDIRETORIA = totalDIRETORIA($conexao);
    $totalTodas = listarTodas($conexao);
    $somaTotalDDIRETORIA = somaTotalDiretoria($conexao);
?>

    <body>
        <h5 class="center" >Painel Gecav - LCI</h5>

        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s1">
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
            
            <div id="test1" class="col s12">
                <hr>
                <br>
                <br>
                <?foreach($produtos as $produto){?>
                    <h5 class="center" >Total da Carteira - R$ &nbsp; <?= number_format($produto['totalCaixa'],2,",",".")?></h5>
                <?}?>
            </div>


            <div id="test2" class="col s12">
                <div class="input-field col s5"></div>
                <div class="input-field col s2">
                    <select>
                        <option value="">Selecione a Diretoria</option>
                            <?foreach($totalDIRETORIA as $diretoria){?>
                        <option value="<?$diretoria['diretoria']?>"><? echo $diretoria['diretoria']?></option>
                        <?}?>
                    </select>
                </div>
                <div class="input-field col s5"></div>
                <hr>

                                    <table class="table table-condensed">
        <thead>
          <tr>
              <th>DiretoriaR</th>
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
                <hr> <h5>SR</h5>
            </div>
            <div id="test4" class="col s12">
                <hr>
            </div>
            <div id="test5" class="col s12">
            <hr>

                <table class="table table-condensed">
        <thead>
          <tr>
              <th>DiretoriaR</th>
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


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/principal.js"></script>
        <script>
            M.AutoInit();
        </script>
    </body>

</html>