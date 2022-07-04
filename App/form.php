<?php include("cabecalho.php"); ?>
    <div class="borda">
        <h1>Formulário de Cadastro</h1>
        <!-- <form action="conexao.php"> -->
        <!-- <form action=""> -->
            <table class="table">

                <?php include("../corpo/cep.php");?>
                <?php include("../corpo/tipoInstalacao.php");?>
                <?php include("../corpo/onOfGrid.php");?>
                <?php include("../corpo/gastoMensal.php");?>
                <?php include("../corpo/tarifa.php");?>
                <?php include("../corpo/formContato.php");?>

            </table>
            <a  href="#teste">
                <button class="btn btn-danger btn-lg btn-block"  onclick="maeFunction() ">
                Simule Agora</button>
            </a>
        <!-- </form> -->
    </div>
    <div class="row space">
        <div class='' id="resultado2" name="resultado2">
    </div>

<?php include("rodape.php"); ?>