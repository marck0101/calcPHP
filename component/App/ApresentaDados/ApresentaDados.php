<?php
//recebemos nosso parâmetro vindo do form
$endereco = isset($_GET['endereco']) ? $_GET['endereco'] : null;
$indIrrad = isset($_GET['indIrrad']) ? $_GET['indIrrad'] : null;
$cm = isset($_GET['cm']) ? $_GET['cm'] : null;
$potenciaPico = isset($_GET['potenciaPico']) ? $_GET['potenciaPico'] : null;
$areaSistema = isset($_GET['areaSistema']) ? $_GET['areaSistema'] : null;
$geracaoAno = isset($_GET['geracaoAno']) ? $_GET['geracaoAno'] : null;
$geracaoMes = isset($_GET['geracaoMes']) ? $_GET['geracaoMes'] : null;
$nomeCompleto1 = isset($_GET['nomeCompleto1']) ? $_GET['nomeCompleto1'] : null;
$telefoneContato1 = isset($_GET['telefoneContato1']) ? $_GET['telefoneContato1'] : null;
$email1 = isset($_GET['email1']) ? $_GET['email1'] : null;
$tarifa = isset($_GET['tarifa']) ? $_GET['tarifa'] : null;


// echo $endereco;
?>

<?php
$endereco = $_GET["endereco"];
$indIrrad = $_GET["indIrrad"];
$cm = $_GET["cm"];
$potenciaPico = $_GET["potenciaPico"];
$areaSistema = $_GET["areaSistema"];
$geracaoAno = $_GET["geracaoAno"];
$geracaoMes = $_GET["geracaoMes"];
$nomeCompleto1 = $_GET["nomeCompleto1"];
$telefoneContato1 = $_GET["telefoneContato1"];
$email1 = $_GET["email1"];
$tarifa = $_GET["tarifa"];

function insereCliente(
    $conexao,
    $endereco,
    $indIrrad,
    $cm,
    $potenciaPico,
    $areaSistema,
    $geracaoAno,
    $geracaoMes,
    $nomeCompleto1,
    $telefoneContato1,
    $email1,
    $tarifa
) {
    $query = "insert into produtos (
    endereco, 
    indIrrad, 
    cm, 
    potenciaPico, 
    areaSistema, 
    geracaoAno, 
    geracaoMes, 
    nomeCompleto1, 
    telefoneContato1, 
    email1,
    tarifa) 
    values 
    ('{$endereco}', 
    '{$indIrrad}', 
    '{$cm}', 
    '{$potenciaPico}', 
    '{$areaSistema}', 
    '{$geracaoAno}', 
    '{$geracaoMes}', 
    '{$nomeCompleto1}', 
    '{$telefoneContato1}', 
    '{$email1}',
    '{$tarifa}'
    )";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

$conexao = mysqli_connect('localhost', 'root', '', 'calc');

if (insereCliente(
    $conexao,
    $endereco,
    $indIrrad,
    $cm,
    $potenciaPico,
    $areaSistema,
    $geracaoAno,
    $geracaoMes,
    $nomeCompleto1,
    $telefoneContato1,
    $email1,
    $tarifa
)) {
?>
    <p class=" text-success">
        <!-- Produto: , preco:   -->- adicionado com sucesso!
    </p>
<?php
} else {
?>
    <p class="text-danger">
        O produto <?= $nome; ?> não foi adicionado: <?= $msg ?>
    </p>
<?php
}
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
    <!-- <form action="conectaBanco.php"> -->
    <div class="borda">
        <?php
        echo 'endereco =>' . $endereco;
        echo '<br>';
        echo 'indIrrad=>' . $indIrrad;
        echo '<br>';
        echo 'cm=>' . $cm;
        echo '<br>';
        echo 'potenciaPico=>' . $potenciaPico;
        echo '<br>';
        echo 'areaSistema=>' . $areaSistema;
        echo '<br>';
        echo 'geracaoAno=>' . $geracaoAno;
        echo '<br>';
        echo 'geracaoMes=>' . $geracaoMes;
        echo '<br>';
        echo 'nomeCompleto1=>' . $nomeCompleto1;
        echo '<br>';
        echo 'telefoneContato1=>' . $telefoneContato1;
        echo '<br>';
        echo 'email1=>' . $email1;
        echo 'tarifa=>' . $tarifa;
        ?>
    </div>
    <!-- </form> -->

</body>

</html>