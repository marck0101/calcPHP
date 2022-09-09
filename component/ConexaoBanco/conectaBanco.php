<?php include("../App/cabecalho/cabecalho.php") ?>

<?php
$endereco = $_GET["endereco"];
$indIrrad = $_GET["indIrrad"];
$cm = $_GET["cm"];
$potenciaPico = $_GET["potenciaPico"];
$areaSistema = $_GET["areaSistema"];
$geracaoAno = $_GET["geracaoAno"];
$geracaoMes = $_GET["geracaoMes"];
$nomeCompleto = $_GET["nomeCompleto"];
$telefoneContato = $_GET["telefoneContato"];
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
    $nomeCompleto,
    $telefoneContato,
    $tarifa
) {
    $query = "insert into produtos (endereco, 
    indIrrad, 
    cm, 
    preco, 
    potenciaPico, 
    areaSistema, 
    geracaoAno, 
    geracaoMes, 
    nomeCompleto, 
    telefoneContato, 
    tarifa) 
    values 
    ({$endereco}, 
    {$indIrrad}, 
    {$cm}, 
    {$potenciaPico}, 
    {$areaSistema}, 
    {$geracaoAno}, 
    {$geracaoMes}, 
    {$nomeCompleto}, 
    {$telefoneContato}, 
    {$tarifa}
    )";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if (insereCliente(
    $conexao,
    $endereco,
    $indIrrad,
    $cm,
    $potenciaPico,
    $areaSistema,
    $geracaoAno,
    $geracaoMes,
    $nomeCompleto,
    $telefoneContato,
    $tarifa
)) {
?>
    <p class=" text-success">
        Produto: <?= $nome; ?>, preco: <?= $preco; ?> - adicionado com sucesso!
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
<?php include("../App/rodape/rodape.php") ?>