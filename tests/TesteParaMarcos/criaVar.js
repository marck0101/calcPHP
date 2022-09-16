
function teste(){

    console.log('chegou aqui');

const variableForPrintInScreen = 'teste de variavel';

const testesss = "óia aí ó"

console.log('variableForPrintInScreen ->', variableForPrintInScreen);
// document.getElementById('testeVar').value = variableForPrintInScreen;

// document.getElementById('variables').innerHTML=`

//  <label>${variableForPrintInScreen}</label>
//   <input type='hidden' name='testeVar' value='${variableForPrintInScreen}' />

//  `;
console.log('chegou ate aqui tbm :D')
window.location.href=`captura.php?varteste=${variableForPrintInScreen}&varteste2=${testesss}`
}