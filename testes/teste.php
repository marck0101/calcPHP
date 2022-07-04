<?php include("cabecalho.php"); ?>
<div>
<div class="borda">

<div class="borda">
    <div class="">
        <h5>1.Local da instalação</h5>
        <label>CEP:</label><br>
        <input class="form-control" type="text" id="cep" name="message" oninput="getCEP();" value=""
            placeholder="CEP do local" required>
        <br>
        <label>Localidade:</label><br>
        <div id="localidade"></div>
    </div>

</div>
<!-- <form action="https://formsubmit.co/c732a0955f8129a10f14e8499427b401" method="POST"> -->
    <div class="borda">
        <h5>2.Qual tipo de local?</h5>
        <select name="message" id="local" class="btn btn-danger" on-Change="combo(this, 'box)">
            <option value="empresa" selected>Telhado</option>
            <option value="outro" >Solo</option>
        </select>
    </div>
    <div class="borda">
    <h5>3. Local com rede elétrica?</h5>

    <select name="message" id="redeEletrica" class="btn btn-danger">
        <option value="sim" selected>Sim</option>
        <option value="nao">Não</option>
    </select>
</div>
    <!--com o cep é possóvel identificar a cidade, e também é possível ver em uma Database a irradiação solar-->

    <div class="borda">
        <h5>4.Quanto gasta por mês?</h5>
        <label>R$:</label><br>
        <span class="input-euro left" type="text" id="gastoMensal" name="message">
            <input class="form-control " name="message" id="contaMes" type="text" placeholder="2000"
                value="500" />
        </span>
    </div>

    <div class="borda">
        <h5>5.Qual o valor da tarifa paga ?</h5>
        <input class="form-control" name="message" id="tarifa" type="text" placeholder="0,5" value="0.5" />
    </div>

    <div class="borda">
        <!-- <h5>6.Quantos kWp/h são consumidos</h5>
        <input class="form-control " name="message" id="kwpConsumo" type="text" placeholder="3.389"
            value="3.389" /> -->

        <h5>Informações para contato</h5>
        <div>
            <label>Nome Completo</label>
            <input type="text" name="name" id="nomeCompleto" class="form-control "
                placeholder="Nome e Sobrenome" value="Nome e Sobrenome"><br>
        </div>

        <div>
            <label>Telefone de contato</label>
            <input type="text" name="message" id="telefoneContato" class="form-control "
                placeholder="(55) 9 0000-0000" value="55999999999"><br>
        </div>

        <div>
            <label>E-MAIL</label><br>
            <input type="email" name="email" id="email" class="form-control " placeholder="nome@email.com"
                value="nome@email.com"><br>
        </div>

        <button class="btn btn-secondary btn-lg btn-block" onclick="maeFunction() ">Simule Agora</button>
<!-- </form> -->

<div class="borda4">
    <div class="">
        <div class="col-xs-12 col-lg-12">
            <div class="row space">
                <div class='grid' id="resultado2" name="resultado2">
                </div>
                <!--Aqui está chamando o grid com as informações-->
            </div>
        </div>
    </div>
</div>

</div>
</div>
<?php include("rodape.php"); ?>