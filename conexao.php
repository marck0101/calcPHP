<?php include("cabecalho.php"); ?>
    <?php
    $nome = $_GET["nome"];
    $preco = $_GET["email"];
    
    function insereProduto($conexao, $nome, $email) {
        $query = "insert into form (nome, email) values ('{$nome}', {$email})";
        $resultadoDaInsercao = mysqli_query($conexao, $query);
        return $resultadoDaInsercao;
    }

    $conexao = mysqli_connect('localhost', 'root', '', 'form');

    if(insereProduto($conexao, $nome, $email)) {
    ?>
        <p class=" text-success">
            Produto: <?= $nome; ?>, email: <?= $email; ?> - adicionado com sucesso!
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
<?php include("rodape.php"); ?>