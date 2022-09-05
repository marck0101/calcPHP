<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="javascript" type="text/javaScript" src="../component/js/calculos.js"><script>
    <script language="javascript" type="text/javaScript" src="../component/js/Testejson.js"><script>
    // <! --<link rel="stylesheet" type="text/css" href="../component" /> -->

    <title>Document</title>
</head>
<body>
    <div>
        <?php  include("../component/App/cabecalho/cabecalho.php")?>
        <div>
            <?php  include("../component/App/conteudo/cep.php")?>
            <?php  include("../component/App/conteudo/tipoInstalacao.php")?>
<script>
            function consumoMensal() {
  console.log("entrou na funcao consumoMensal");
  var contaMes = document.getElementById("contaMes").value;
  var tarifa = document.getElementById("tarifa").value.replace(",", ".");
  console.log("tarifaa", tarifa);
  var cm = 0;
  var quo = Math.floor(contaMes / cm);
  var rem = contaMes % cm;
  if (contaMes != 0 && tarifa != 0) {
    cm = contaMes / tarifa;
    console.log("A media do consumo mensal e " + cm + "kWh");
  } else {
    alert("insira o valor nos campos");
  }
  return cm;
}
</script>

            <?php  include("../component/App/conteudo/formContato.php")?>
            <?php  include("../component/App/conteudo/gastoMensal.php")?>
            <?php  include("../component/App/conteudo/onOffGrid.php")?>
            <?php  include("../component/App/conteudo/tarifa.php")?>
        </div>     
        <?php  include("../component/App/rodape/rodape.php")?>
    </div>
</body>
</html>