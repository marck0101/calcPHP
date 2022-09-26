<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" type="text/javaScript" src="./js/calculos.js"></script>
    <script language="javascript" type="text/javaScript" src="./js/Testejson.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/meuCss.css">
    </link>

    <title>Document</title>
</head>

<body>
    <div>
        <?php include("../component/App/cabecalho/cabecalho.php") ?>
        <div class="borda">
            <!-- <form action="conectaBanco.php"> -->
            <table>
                <?php include("../component/App/conteudo/cep.php") ?>
                <?php include("../component/App/conteudo/tipoInstalacao.php") ?>
                <?php include("../component/App/conteudo/onOffGrid.php") ?>
                <?php include("../component/App/conteudo/gastoMensal.php") ?>
                <?php include("../component/App/conteudo/tarifa.php") ?>
                <?php include("../component/App/conteudo/formContato.php") ?>
                <div class="borda">
                    <button class="btn btn-danger btn-lg btn-block" onclick="maeFunction() ">
                        Simule Agora</button>
                </div>

            </table>
            <!-- </form> -->
        </div>
        <?php include("../component/App/rodape/rodape.php") ?>
    </div>
</body>

</html>