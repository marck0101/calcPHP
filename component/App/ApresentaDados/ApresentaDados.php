<?php
	//recebemos nosso parâmetro vindo do form
	$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;
    echo $endereco;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        echo 'endereco aqui =>' . $endereco;
        echo '<br>';
        echo 'teste';
    ?>

</body>
</html>