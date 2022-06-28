<?php include("cabecalho.php"); ?>
    
    <h1>Formulário de Cadastro</h1>
    <!-- <form action="conexao.php"> -->
    <!-- <form action=""> -->
        <table class="table">

            <?php include("cep.php");?>
            <?php include("tipoInstalacao.php");?>
            <?php include("onOfGrid.php");?>
            <?php include("gastoMensal.php");?>
            <?php include("tarifa.php");?>
            <?php include("formContato.php");?>

        </table>
        <a  href="#teste">
            <button class="btn btn-danger btn-lg btn-block"  onclick="maeFunction() ">
            Simule Agora</button>
        </a>
    <!-- </form> -->

    <div class="row space">
        <div class='' id="resultado2" name="resultado2">
    </div>

<?php include("rodape.php"); ?>