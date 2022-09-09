
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
  const nomeCompleto = document.getElementById("nomeCompleto").value;
  const telefoneContato = document.getElementById("telefoneContato").value;
  const email = document.getElementById("email").value;

  if (cep.length > 7) {
    // console.log("o cep é " + cep)
  }

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

// function exibeGrid(cm, potenciaPico, areaSistema, geracaoMes, geracaoAno) {
//   exibe =
//     `<div class="borda">

//   <div class="teste-item1">
//     <div class="tamanho-icon">
//       <img src="../icons/lampada.png"/>
//     </div>

//     <div class="alinhamento">
//       <h5 class="texto">Consumo mensal médio considerado: ${cm.toFixed(
//         2
//       )} kWh<h5/>
//     </div>
//   </div>

//   <div class="teste-item1">
//     <img src="../icons/potencia.png"/>
//       <div class="alinhamento">
//         <h5 class="texto">Potência Pico: ${potenciaPico.toFixed(2)} kWp</h5>
//       </div>
//   </div>

//   <div class="teste-item1">
//     <img src="../icons/placa.png"/>
//       <div class="alinhamento">
//         <h5 class="texto">Consumo mensal médio considerado: ${areaSistema.toFixed(2)} m²<h5/>
//       </div>
//   </div>

//   <div class="teste-item1"> <a id='teste'></a>
//     <img src="../icons/area.png"/>
//       <div class="alinhamento">
//         <h5 class="texto">Consumo mensal médio considerado: ${geracaoMes.toFixed(2)} kWh<h5/>
//       </div>
//   </div>

//   <div class="teste-item1">
//     <img src="../icons/ano.png"/><div class="alinhamento">
//     <h5 class="texto">Consumo mensal médio considerado: ${geracaoAno.toFixed(
//       2
//     )} kWh<h5/>
//   </div>
//   </div>

// </div>  
// `;

//   document.getElementById("resultado2").innerHTML = exibe;
// }

// function submitBanco() {}

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

  const nomeCompleto1 = document.getElementById("nomeCompleto").value;
  const telefoneContato1 = document.getElementById("telefoneContato").value;
  const email1 = document.getElementById("email").value;

  window.location.href=`../component/App/ApresentaDados/ApresentaDados.php?
  endereco=${endereco}&
  indIrrad=${indIrrad}&
  cm=${cm}&
  potenciaPico=${potenciaPico.toFixed(2)}&
  areaSistema=${areaSistema.toFixed(2)}&
  geracaoAno=${geracaoAno.toFixed(2)}&
  geracaoMes=${geracaoMes.toFixed(2)}&
  nomeCompleto=${nomeCompleto1}&
  telefoneContato=${telefoneContato1}&
  email=${email1}
  `

// Aqui no click fazer uma função que manda informações para o banco

}

