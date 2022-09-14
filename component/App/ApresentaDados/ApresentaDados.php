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
    </link>
    <title>Document</title>
</head>

<body>
    <div class="borda">
        <?php
        echo 'endereco =>' . $endereco;
        echo '<br>';
        echo 'cep =>' . $cep1;
        echo '<br>';
        echo 'contaMes =>' . $contaMes1;
        echo '<br>';
        echo 'redeEletrica =>' . $redeEletrica1;
        echo '<br>';
        echo 'indIrrad =>' . $indIrrad;
        echo '<br>';
        echo 'cm =>' . $cm;
        echo '<br>';
        echo 'potenciaPico =>' . $potenciaPico;
        echo '<br>';
        echo 'areaSistema =>' . $areaSistema;
        echo '<br>';
        echo 'geracaoAno =>' . $geracaoAno;
        echo '<br>';
        echo 'geracaoMes =>' . $geracaoMes;
        echo '<br>';
        echo 'nomeCompleto1 =>' . $nomeCompleto1;
        echo '<br>';
        echo 'telefoneContato1 =>' . $telefoneContato1;
        echo '<br>';
        echo 'email1 =>' . $email1;
        echo '<br>';
        echo 'tarifa1 =>' . $tarifa1;

        ?>
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
    $tarifa1,
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

$conexao = mysqli_connect('localhost', 'root', '', 'calc');

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
    <p class=" text-success">
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
    </p>

<?php
} else {
?>
    <p class="text-danger">
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
        </p>
        <?php
    }
        ?>\