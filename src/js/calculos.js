
function getCEP() {
  var cep = document.getElementById("cep").value;
  if (cep.length > 7) {
    var urlApi = "https://viacep.com.br/ws/" + cep + "/json/";
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", urlApi, false);
    xhttp.send(); //A execução do script para aqui até a requisição retornar do servidor
    var retorno = JSON.parse(xhttp.responseText);
    console.log("retorno da API: ", xhttp.responseText);
    console.log("cep: ", retorno.cep);
    console.log("localidade: ", retorno.localidade);
    console.log("uf: ", retorno.uf);
    document.getElementById("localidade").innerHTML =
      retorno.localidade + "/" + retorno.uf;
    var localidade = (document.getElementById("localidade").innerHTML =
      retorno.localidade);
    console.log("a localidade é: " + localidade);
  } else {
    document.getElementById("localidade").innerHTML = "cep invalido";
  }
  return localidade;
}

/**
 * Pega os campos de entrada da tela
 * e trazer para javascript
 * @param {*} cep 
 * @param {*} localidade 
 * @param {*} redeEletrica 
 * @param {*} local 
 * @param {*} contaMes 
 * @param {*} nomeCompleto 
 * @param {*} telefoneContato 
 * @param {*} email 
 */

var cepTeste;
var localTeste;

function captApresenta() {
  cepTeste = document.getElementById("cep").value;
 
  var cep = document.getElementById("cep").value;
  // var localidade = document.getElementById("localidade").value;
  var redeEletrica = document.getElementById("redeEletrica").value; // como saber se é sim ou n o selecionado
  localTeste = document.getElementById("local").value;
  local = document.getElementById("local").value;
  var contaMes = document.getElementById("contaMes").value;
  var tarifa = document.getElementById("tarifa").value;
  // var kwpConsumo = document.getElementById("kwpConsumo").value;
  var nomeCompleto = document.getElementById("nomeCompleto").value;
  var telefoneContato = document.getElementById("telefoneContato").value;
  var email = document.getElementById("email").value;

  if (cep.length > 7) {
    // console.log("o cep é " + cep)
  }

  //  if(localidade === retorno.localidade){
  //      console.log("A localidade é "+ retorno.localidade)
  // }

  if (redeEletrica === "sim") {
    console.log("tem rede elétrica");
  } else {
    console.log("Não possui rede elétrica");
  }

  if (local === "empresa") {
    console.log("Rede empresarial.");
  } else {
    console.log("outro");
  }

  if (contaMes > 0) {
    console.log("O valor da conta mensal é " + contaMes);
    if (tarifa >= 0) {
      console.log("O valor da tarifa é " + tarifa);
      // if (kwpConsumo > 0) {
      //   console.log("A média de kwp consumida é " + kwpConsumo);
      if (nomeCompleto != undefined && nomeCompleto != "") {
        console.log("Nome do possível Cliente: " + nomeCompleto);
        if (telefoneContato != undefined && telefoneContato != "") {
          console.log("telefone do possível Cliente: " + telefoneContato);
          if ((email != undefined) & (email != "")) {
            console.log("email do Cliente: " + email);
          }
        }
      }
    }
  }
}
// }

function getLocalidade() {
  console.log("entrou na funcao getLocalidade");
  var endereco = document.getElementById("localidade").value;
  return endereco;
}

// console.log("Nome do possível Cliente: " + email)

function irradJson(endereco) {
  console.log("entrou na funcao irradJson");
  console.log("localidade recebida " + endereco);
  var json = JSON.parse(irradiacao);
  var indIrrad = "";
  json.map((item) => {
    // o map vai buscar o item que o teste está carregando, no caso o número e vai printar no
    if (item.NAME === endereco) {
      console.log("A irradiação anual de", item.NAME, "é: ", item.ANNUAL);
      indIrrad = item.ANNUAL;
    }
  });
  return indIrrad;
}

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

function picoSistema(indIrrad, cm) {
  console.log("entrou na funcao picoSistema");
  if (cm != 0) {
    var potenciaPico = "";
    var eficienciaSistema = 0.83;
    potenciaPico = cm / ((eficienciaSistema * indIrrad * (365 / 12)) / 1000);
  }
  return potenciaPico;
}

function areaEstimada(potenciaPico) {
  console.log("entou o valor de potencia --> Pico", potenciaPico);
  let areaSistema = 0;
  let potenciaModulo = 545;
  let areaModulo = 2.564;
  let fatorSolo = 2.3;
  let fatorTelhado = 1.5;
  let numeroModulos = 0;
  let local = document.getElementById("local").value;
  numeroModulos = potenciaPico / potenciaModulo;
  if (local === "empresa") {
    areaSistema = numeroModulos * 1000 * fatorTelhado * areaModulo;
    console.log("fator telhado com area estimada: " + areaSistema);
  } else {
    areaSistema = numeroModulos * 1000 * fatorSolo * areaModulo;
    console.log("fator solo com area estimada: " + areaSistema);
  }
  return areaSistema;
}

function energiaGeradaAno(indIrrad, potenciaPico) {
  var geracaoAno = "";
  var eficienciaSistema = 0.83;
  geracaoAno = potenciaPico * eficienciaSistema * (indIrrad / 1000) * 365;
  console.log("energia gerada no ano " + geracaoAno);
  return geracaoAno;
}

/* Máscaras ER */
function mascara(o, f) {
  v_obj = o;
  v_fun = f;
  setTimeout("execmascara()", 1);
}
function execmascara() {
  v_obj.value = v_fun(v_obj.value);
}
function mtel(v) {
  v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
  v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
  v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
  return v;
}
function id(el) {
  return document.getElementById(el);
}
window.onload = function () {
  id("telefoneContato").onkeyup = function () {
    mascara(this, mtel);
  };
};

function energiaGeradaMes(geracaoAno) {
  var geracaoMes = "";
  geracaoMes = geracaoAno / 12;
  console.log("A geracao de energia mensal é ", geracaoMes);
  return geracaoMes;
}
function exibeGrid(cm, potenciaPico, areaSistema, geracaoMes, geracaoAno) {
  exibe =
    `<div class="borda">

  <div class="teste-item1">
    <div class="tamanho-icon">
      <img src="../icons/lampada.png"/>
    </div>

    <div class="alinhamento">
      <h5 class="texto">Consumo mensal médio considerado: ${cm.toFixed(
        2
      )} kWh<h5/>
    </div>
  </div>

  <div class="teste-item1">
    <img src="../icons/potencia.png"/>
      <div class="alinhamento">
        <h5 class="texto">Potência Pico: ${potenciaPico.toFixed(2)} kWp</h5>
      </div>
  </div>

  <div class="teste-item1">
    <img src="../icons/placa.png"/>
      <div class="alinhamento">
        <h5 class="texto">Consumo mensal médio considerado: ${areaSistema.toFixed(
          2
        )} m²<h5/>
      </div>
  </div>

  <div class="teste-item1"> <a id='teste'></a>
    <img src="../icons/area.png"/>
      <div class="alinhamento">
        <h5 class="texto">Consumo mensal médio considerado: ${geracaoMes.toFixed(
          2
        )} kWh<h5/>
      </div>
  </div>

  <div class="teste-item1">
    <img src="../icons/ano.png"/><div class="alinhamento">
    <h5 class="texto">Consumo mensal médio considerado: ${geracaoAno.toFixed(
      2
    )} kWh<h5/>
  </div>
  </div>

</div>  
`;

  document.getElementById("resultado2").innerHTML = exibe;
}

function submitBanco() {}

function maeFunction() {
  console.log("entrou na funcao maeFunction");
  //vai retornar a localidade e armazenar na variavel endereco
  var endereco = getCEP();
  //vai usar a variavel de endereco para procurar o nivel de irradiacao
  var indIrrad = irradJson(endereco);
  //consumoMensal está retornando algo que é armazenado dentro de cm
  var cm = consumoMensal();
  //pico sistema retorna um resultado que é armazenado dentro de potenciaPico
  var potenciaPico = picoSistema(indIrrad, cm);
  // console.log(areaEstimada(potenciaPico));

  // a area estimada precisa da potenciaPico para calcular
  var areaSistema = areaEstimada(potenciaPico);

  // var areaSistema = areaEstimada();

  //aqui retorna geração ano, e para calcular é preciso de indIrrad, potenciaPico
  var geracaoAno = energiaGeradaAno(indIrrad, potenciaPico);
  //vai retornar geracaoMes, mas precisa de geracaoAno para calcular
  var geracaoMes = energiaGeradaMes(geracaoAno);

  captApresenta(
    cep,
    localidade,
    redeEletrica,
    local,
    contaMes,
    // kwpConsumo,
    nomeCompleto,
    telefoneContato,
    email
  );

  //exibe grid, mas para isso precisa => ()
  exibeGrid(cm, potenciaPico, areaSistema, geracaoMes, geracaoAno);
}


/**
 * Envia dados para o PHP
 *  json Variável que armazena os dados para enviar para o arquivo php
 *  xhttp Cria a instância para comunicar com o arquivo php
 */
// function enviaRequest() {

//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) { //Verifica se comunicou com o php
//       alert('Entrou na função enviaRequest()');
//       console.log(this.responseText);
//       alert(this.responseText); // é o que o arquivo php retornou de mensagem
//      // document.getElementById("demo").innerHTML = this.responseText;
//     }
//   };
//   xhttp.open("POST", "../src/js/arquivo.php?teste=1500", true); // Abre uma instância com o arquivo php
//   //xhttp.open("POST", "../src/js/arquivo.php?cep=" + cep + "&localidade=" + localidade, true);
//   xhttp.send(null);
// }

/** 
 * exemplo vídeo aula 
 * https://www.youtube.com/watch?v=bpx0r_PLLBo
var xhr =new XMLHttpRequest();
xhr.onreadystatechange = function(){
  var documento;

  if(xhr.readyState == 4 && xhr.status ==200){
   documento = xhr.response;
   documento = JSON.parse(documento)
   console.log(documento);
  }else{

  }
}

xhr.open("GET", "" )

xhr.send();

*/

function enviaRequest() {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) { //Verifica se comunicou com o php
      alert('Entrou na função enviaRequest()');
      alert(this.responseText); // é o que o arquivo php retornou de mensagem
     // document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "../src/js/arquivo.php?teste=1500", true); // Abre uma instância com o arquivo php
  
  //xhttp.open("POST", "../src/js/arquivo.php?cep=" + cep + "&localidade=" + localidade, true);
  xhttp.send(null);
}

xhr.open("GET", "" )

xhr.send();



function enviaRequest() {

var xmlhttp = new XMLHttpRequest();   // new HttpRequest instance 
var theUrl = "/calculadoraPHP/src/js/arquivo.php";
xmlhttp.open("POST", theUrl);
xmlhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
xmlhttp.send(JSON.stringify({cep: cepTeste, local: localTeste }));
}