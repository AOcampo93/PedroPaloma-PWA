// LLmando el JSON
const requestURL = 'https://aocampo93.github.io/PedroPaloma-PWA/js/producto.json';
fetch(requestURL)
    .then(function(response) {
        return response.json();
    })
    .then(function(jsonObject) {
        console.table(jsonObject);

        //Creando Tarjetas de paquetes
        //seleccionando el array principal
        var paquetes = jsonObject['paquetes'];

        //Generando un for para crear cada tarjeta
        for (var i = 0; i < paquetes.length; i++) {
            //Genera una etiqueta <article> Donde se almacenara toda la info
            var caja = document.createElement('article');
            //Genera un <h2> que sera el titulo de la tarjeta
            var titulo = document.createElement('h2');
            //Genera una etiqueta <p> que tendra la descripción
            var descripcion = document.createElement('p');
            //Genera una etiqueta <p> que tendra el precio
            var precio = document.createElement('p');

            //Buscando info en el JSON para poner en la etiqueta correspondiente
            //Seleccionamos la etiqueta deseada -> seleccionamos la info en el JSON deseada
            //h2 -> Nombre
            titulo.textContent = paquetes[i].nombre;
            //p -> Descripcion
            descripcion.textContent = 'descripcion: ' + paquetes[i].descripcion;
            //p -> Precio
            precio.textContent = 'precio: ' + paquetes[i].precio;

            //Le decimos que toda esta info la coloque en el interior de nuestra etiqueta <article>
            caja.appendChild(titulo);
            caja.appendChild(descripcion);
            caja.appendChild(precio);
            //Decimos que la seccion es la caja que hemos creado
            section.appendChild(caja);


            //Agregamos una clase al elemento "Caja"
            caja.classList.add('caja');

            //El for hará esto por el tamaño de Array[] del JSON

        }
    });