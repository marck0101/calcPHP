<?php
//recebemos nosso parâmetro vindo do form
$endereco = isset($_GET['endereco']) ? $_GET['endereco'] : null;
$cep1 = isset($_GET['cep1']) ? $_GET['cep1'] : null;
$contaMes1 = isset($_GET['contaMes1']) ? $_GET['contaMes1'] : null;
$redeEletrica1 = isset($_GET['redeEletrica1']) ? $_GET['redeEletrica1'] : 0;
$indIrrad = isset($_GET['indIrrad']) ? $_GET['indIrrad'] : null;
$cm = isset($_GET['cm']) ? $_GET['cm'] : null;
$potenciaPico = isset($_GET['potenciaPico']) ? $_GET['potenciaPico'] : null;
$areaSistema = isset($_GET['areaSistema']) ? $_GET['areaSistema'] : null;
$geracaoAno = isset($_GET['geracaoAno']) ? $_GET['geracaoAno'] : null;
$geracaoMes = isset($_GET['geracaoMes']) ? $_GET['geracaoMes'] : null;
$nomeCompleto1 = isset($_GET['nomeCompleto1']) ? $_GET['nomeCompleto1'] : null;
$telefoneContato1 = isset($_GET['telefoneContato1']) ? $_GET['telefoneContato1'] : null;
$email1 = isset($_GET['email1']) ? $_GET['email1'] : null;
$tarifa1 = isset($_GET['tarifa1']) ? $_GET['tarifa1'] : null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../css/meuCss.css">
    <link rel="stylesheet" type="text/css" href="../../css/testeFlex.css" />
    </link>
    <link rel="icon" type="imagem/png" href="img/icon.svg" />

    <title>Fockink | Simulador de geração fotovoltaica</title>
</head>

<body>
    <div class="borda">
        <h3>Resultado da simulação:</h3>
    </div>
    <div class="borda">
        <div class="container-teste">

            <div class="teste-item1">
                <div class=".col-xs-4" style="display:flex; flex-direction: row; align-items: left;">
                    <div style="margin-right: 2%;">
                        <img src="../../icons/placa1.png" style="width: 50px " />
                    </div>
                    <div style="margin-left: 2%;">
                        <?php
                        echo '<br>';
                        echo "Consumo mensal médio considerado: " . $cm . 'kWh'
                        ?>
                    </div>

                </div>
            </div>

            <div class="teste-item1">
                <!-- <div class=".col-xs-4" style="display:flex; flex-direction: column; align-items: left;"> -->
                <div class=".col-xs-4" style="display:flex; flex-direction: row; align-items: left;">
                    <div style="margin-right: 2%;">
                        <img src="../../icons/potency2.png" style="width: 50px " />
                    </div>
                    <div style="margin-left: 2%;">
                        <?php
                        echo '<br>';
                        echo "Potencia Pico: " . $potenciaPico . "kWp";
                        ?>
                    </div>
                </div>
            </div>

            <div class="teste-item1">
                <!-- <div class=".col-xs-4" style="display:flex; flex-direction: column; align-items: left;"> -->
                <div class=".col-xs-4" style="display:flex; flex-direction: row; align-items: left;">
                    <div style="margin-right: 2%;">
                        <img src="../../icons/area2.png" style="width: 50px " />
                    </div>
                    <div style="margin-left: 2%;">
                        <?php
                        echo '<br>';
                        echo "Área estimada: "  . $areaSistema . "m²";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-teste">

            <div class="teste-item1">
                <div class=".col-xs-4" style="display:flex; flex-direction: row; align-items: left;">
                    <div style="margin-right: 2%;">
                        <img src="../../icons/time5.png" style="width: 50px " />
                    </div>
                    <div style="margin-left: 2%;">
                        <?php
                        echo '<br>';
                        echo "Geração total ano: " . $geracaoAno . "kWp";
                        ?>
                    </div>
                </div>
            </div>

            <div class="teste-item1">
                <!-- <div class=".col-xs-4" style="display:flex; flex-direction: column; align-items: left;"> -->
                <div class=".col-xs-4" style="display:flex; flex-direction: row; align-items: left;">
                    <div style="margin-right: 2%;">
                        <img src="../../icons/time2.png" style="width: 50px " />
                    </div>
                    <div style="margin-left: 2%;">
                        <?php
                        echo '<br>';
                        echo "Geração mensal média: " . $geracaoMes . "kWp";
                        ?>
                    </div>
                </div>

            </div>
        </div>


    </div>
    </div>

</body>

</html>

<?php
function insereCliente(
    $conexao,
    $endereco,
    $cep1,
    $contaMes1,
    $redeEletrica1,
    $indIrrad,
    $cm,
    $potenciaPico,
    $areaSistema,
    $geracaoAno,
    $geracaoMes,
    $nomeCompleto1,
    $telefoneContato1,
    $email1,
    $tarifa1
) {
    $query = "INSERT INTO formulario (
    endereco, 
    cep,
    gasto_mensal,
    tipo_instalacao,
    indIrrad,
    cm,
    potencia_pico,
    area_estimada,
    geracaoAno,
    geracaoMes,
    nome,
    telefone,
    email,
    tarifa) 
    values 
    ('{$endereco}', 
    '{$cep1}',
    '{$contaMes1}',
    '{$redeEletrica1}',
    '{$indIrrad}',
    '{$cm}',
    '{$potenciaPico}',
    '{$areaSistema}',
    '{$geracaoAno}',
    '{$geracaoMes}',
    '{$nomeCompleto1}',
    '{$telefoneContato1}',
    '{$email1}',
    '{$tarifa1}'
    )";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

// $conexao = mysqli_connect('localhost', 'root', '', 'calculo');
// passa o local onde está o banco, passa o 
// '127.0.0.1', passa o local onde está o banco, passa o 
// 'fockink', 
// 'w_BJODXqWOOnXI2=?1', 
// 'fockink'

//                           link       user        senha                   bd
$conexao = mysqli_connect('127.0.0.1', 'fockink', 'w_BJODXqWOOnXI2=?1', 'fockink');
// $conexao = mysqli_connect('127.0.0.1', '', '', 'calculo2');

if (insereCliente(
    $conexao,
    $endereco,
    $cep1,
    $contaMes1,
    $redeEletrica1,
    $indIrrad,
    $cm,
    $potenciaPico,
    $areaSistema,
    $geracaoAno,
    $geracaoMes,
    $nomeCompleto1,
    $telefoneContato1,
    $email1,
    $tarifa1
)) {
?>
    <!-- <p class=" text-success">
        O <?= $endereco ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $cep1 ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $contaMes1 ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $redeEletrica1 ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $indIrrad ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $cm ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $potenciaPico ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $areaSistema ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $geracaoAno ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $geracaoMes ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $nomeCompleto1 ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $telefoneContato1 ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $email1 ?> - adicionado com sucesso!
    </p>
    <p class=" text-success">
        O <?= $tarifa1 ?> - adicionado com sucesso!
    </p> -->

<?php
} else {
?>
    <!-- <p class="text-danger">
        O <?= $endereco; ?> não foi adicionado: <?= $msg ?>
    <p class="text-danger">
        O: <?= $cep1 ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $contaMes1 ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $cm ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $potenciaPico ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $areaSistema ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $geracaoAno ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $geracaoMes ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $nomeCompleto1 ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $telefoneContato1 ?> - não foi adicionado: <?= $msg ?>
    </p>
    <p class="text-danger">
        O: <?= $email1 ?> - não foi adicionado: <?= $msg ?>
    </p>
    <class="text-danger">
        O: <?= $tarifa1 ?> - não foi adicionado: <?= $msg ?>
        </p> -->
<?php
}
?>