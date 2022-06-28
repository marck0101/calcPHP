<?php include("cabecalho.php") ?>

<?php
    $nome = $_GET["nomeCompleto"];
    $email = $_GET["email"];
    $telefoneContato = $_GET["telefoneContato"];
    $cep = $_GET["cep"];
    $localidade = $_GET["localidade"];
    $local = $_GET["local"];
    $gastoMensal = $_GET["gastoMensal"];
    $tarifa = $_GET["tarifa"];

    $cm = $_GET["cm"];
    $geracaoMes = $_GET["geracaoMes"];
    $geracaoAno = $_GET["geracaoAno"];
    $potenciaPico = $_GET["potenciaPico"];
    $areaSistema = $_GET["areaSistema"];
    $redeEletrica = $_GET["redeEletrica"];
    $contaMes = $_GET["contaMes"];
    $indIrrad = $_GET["indIrrad"];
    
    function insereProduto(
        $conexao, 
        $nomeCompleto,
        $email, 
        $telefoneContato, 
        $cep, $localidade, 
        $local, 
        $gastoMensal, 
        $tarifa, 
        $cm,
        $geracaoMes,
        $geracaoAno,
        $potenciaPico,
        $areaSistema,
        $redeEletrica,
        $contaMes,
        $indIrrad) {
        $query = "insert into formulario(
            nome, 
            telefoneContato,
            email,
            cep,
            localidade,
            local,
            gastoMensal,
            tarifa) 
            values 
            ('{$nomeCompleto}',
            '{$email}',
            '{$telefoneContato}',
            '{$cep}',
            '{$localidade}',
            '{$local}',
            '{$gastoMensal}',
            '{$tarifa}'
        )";

            $query2 = "insert into grid(
            cm, 
            geracaoMes, 
            geracaoAno, 
            potenciaPico, 
            areaSistema, 
            redeEletrica, 
            contaMes, 
            indIrrad)
            values
            (
            '{$cm}',
            '{$geracaoMes}',
            '{$geracaoAno}',
            '{$potenciaPico}',
            '{$areaSistema}',
            '{$redeEletrica}',
            '{$contaMes}',
            '{$indIrrad}'
        )";

        $resultadoDaInsercao = mysqli_query(
            $conexao, 
            $query
            // $query2
        );
        return $resultadoDaInsercao;
    }

    $conexao = mysqli_connect('localhost', 'root', '', 'testesphp');

    if(insereProduto($conexao, $nome, $email)) {
    ?>
        <p class=" text-success">
            Produto: <?= $nome; ?> - adicionado com sucesso!
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



