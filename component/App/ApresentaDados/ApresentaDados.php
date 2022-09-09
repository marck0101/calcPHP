<?php
//recebemos nosso parâmetro vindo do form
$endereco = isset($_GET['endereco']) ? $_GET['endereco'] : null;
$indIrrad = isset($_GET['indIrrad']) ? $_GET['indIrrad'] : null;
$cm = isset($_GET['cm']) ? $_GET['cm'] : null;
$potenciaPico = isset($_GET['potenciaPico']) ? $_GET['potenciaPico'] : null;
$areaSistema = isset($_GET['areaSistema']) ? $_GET['areaSistema'] : null;
$geracaoAno = isset($_GET['geracaoAno']) ? $_GET['geracaoAno'] : null;
$geracaoMes = isset($_GET['geracaoMes']) ? $_GET['geracaoMes'] : null;
$nomeCompleto = isset($_GET['nomeCompleto']) ? $_GET['nomeCompleto'] : null;
$telefoneContato = isset($_GET['telefoneContato']) ? $_GET['telefoneContato'] : null;
$email = isset($_GET['email']) ? $_GET['email'] : null;

// echo $endereco;
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
        echo 'nomeCompleto=>' . $nomeCompleto;
        echo '<br>';
        echo 'telefoneContato=>' . $telefoneContato;
        echo '<br>';
        echo 'email=>' . $email;
        ?>
    </div>
    <!-- </form> -->

</body>

</html>