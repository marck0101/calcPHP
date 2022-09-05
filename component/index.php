<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" type="text/javaScript" src="../component/js/calculos.js"></script>
    <script language="javascript" type="text/javaScript" src="../component/js/Testejson.js"></script>
    <link rel="stylesheet" type="text/css" href="../src/estilo/meuCss.css"></link>
    
    <title>Document</title>
</head>
<body>

    <div>
        <?php  include("../component/App/cabecalho/cabecalho.php")?>
        <div>
            <?php  include("../component/App/conteudo/cep.php")?>
            <?php  include("../component/App/conteudo/tipoInstalacao.php")?>

            <?php  include("../component/App/conteudo/formContato.php")?>
            <?php  include("../component/App/conteudo/gastoMensal.php")?>
            <?php  include("../component/App/conteudo/onOffGrid.php")?>
            <?php  include("../component/App/conteudo/tarifa.php")?>
        </div>     
        <?php  include("../component/App/rodape/rodape.php")?>
    </div>
</body>
</html>