// LLmando el JSON
const requestURL = 'https://aocampo93.github.io/PedroPaloma-PWA/js/producto.json';
fetch(requestURL)
    .then(function(response) {
        return response.json();
    })
    .then(function(jsonObject) {
        console.table(jsonObject);
        myobj = jsonObject;
        return myobj;
    });
//Creando Tarjetas de paquetes
function tarjetas(myobj) {
    var paquetes = myobj['paquetes'];
    document.getElementById('catalogo').innerHTML = paquetes[0].nombre;
}