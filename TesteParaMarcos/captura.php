<?php
    //recebemos nosso parâmetro vindo do form
    $varHunted = isset($_GET['varteste']) ? $_GET['varteste'] : null;
    $varHunted2 = isset($_GET['varteste2']) ? $_GET['varteste2'] : null;

?>
<!-- varHunted É A VAR QUE VAI PARA O BANCO  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../component/css/meuCss.css"></link>

    <title>Document</title>
</head>
<body>
    <div class="borda">
        <?php
            echo 'variavel capturada aqui --> '.$varHunted; 
            echo'<br>';
            echo 'variavel capturada aqui --> '.$varHunted2;
        ?>
    </div>
</body>
</html>