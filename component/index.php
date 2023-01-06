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
    <link rel="icon" type="imagem/png" href="img/icon.svg" />

    <title>Fockink | Simulador de geração fotovoltaica</title>
</head>

<body>
    <div>
        <?php include("../component/App/cabecalho/cabecalho.php") ?>
        <div class="borda">
            <!-- <form action="conectaBanco.php"> -->
            <table>
                <div class="bordaII">
                    <!-- faz a busca do CEP -->
                    <div class="">
                        <h5>1.Local da instalação</h5>
                        <label>CEP:</label><br>
                        <input class="form-control form-control-sm" type="text" id="cep" name="cep" oninput="getCEP();" value="" placeholder="CEP do local" maxlength="8" required>
                        <br>
                        <label>Localidade:</label><br>
                        <div id="localidade"></div>
                    </div>
                </div>

                <div class="bordaII">
                    <h5>2.Tipo de instalação</h5>
                    <select name="local" id="local" class="btn btn-danger" on-Change="combo(this, 'box)">
                        <option value="empresa" selected>Empresa</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>

                <div class="bordaII">
                    <h5>3. Local com rede elétrica?</h5>
                    <select name="redeEletrica" id="redeEletrica" class="btn btn-danger">
                        <option value="1" selected>Sim</option>
                        <option value="0">Não</option>
                    </select>
                </div>

                <div class="bordaII">
                    <h5>4.Quanto gasta por mês?</h5>
                    <label>R$:</label><br>
                    <span class="input-euro left" type="text" id="gastoMensal" name="gastoMensal">
                        <input class="form-control " name="message" id="contaMes" type="text" placeholder="2000" maxlength="8" value="" />
                    </span>
                </div>

                <div class="bordaII">
                    <h5>5.Qual o valor da tarifa paga ?</h5>
                    <input class="form-control" name="tarifa" id="tarifa" type="text" maxlength="4" placeholder="0.58" value="" />
                </div>

                <div class="bordaII">
                    <h5>Informações para contato</h5>
                    <div>
                        <label>Nome Completo</label>
                        <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control " placeholder="Nome e Sobrenome" maxlength="50" value=""><br>
                    </div>
                    <div>
                        <label>Telefone de contato</label>
                        <input type="text" name="telefoneContato" id="telefoneContato" class="form-control " placeholder="(55) 9 0000-0000" value="" placeholder="(55) 9 9999-9999" maxlength="15"><br>
                    </div>
                    <div>
                        <label>E-MAIL</label><br>
                        <input type="email" name="email" id="email" class="form-control " placeholder="nome@email.com" maxlength="50" value=""><br>
                    </div>
                </div>
                <div class="borda">
                    <button class=" btn btn-danger btn-lg btn-block" onclick="maeFunction() ">
                        Simule Agora</button>
                </div>

            </table>
            <!-- </form> -->
        </div>
        <?php include("../component/App/rodape/rodape.php") ?>
    </div>
</body>

</html>