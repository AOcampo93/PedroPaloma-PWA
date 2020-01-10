// Llamando el JSON
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
            //Genera un div para almacenar la etiqueta <img>
            var cajaImg = document.createElement('div');
            //Genera la etiqueta <img>
            var img = document.createElement('img');
            //Genera un div para almacenar la info
            var cajaInfo = document.createElement('div');
            //Genera un <h2> que sera el titulo de la tarjeta
            var titulo = document.createElement('h2');
            //Genera una etiqueta <p> que tendra la descripción
            var descripcion = document.createElement('p');
            //Genera una etiqueta <p> que tendra el precio
            var precio = document.createElement('p');
            //Genera una etiqueta <button>
            var boton = document.createElement('button');


            //Decimos que dentro de <section> meta el <article> que hemos creado
            section.appendChild(caja);

            //Decimos que dentro de <article> meta los dos <div> empezando por el div "img"
            caja.appendChild(cajaImg);
            caja.appendChild(cajaInfo);
            //Decimos que dentro del <div> "cajaImg" coloque la etiqueta <img>
            cajaImg.appendChild(img);

            //Buscando info en el JSON para poner en la etiqueta correspondiente
            //Seleccionamos la etiqueta deseada -> seleccionamos la info en el JSON deseada
            //h2 -> Nombre
            titulo.textContent = paquetes[i].nombre;
            //p -> Descripcion
            descripcion.textContent = paquetes[i].descripcion;
            //p -> Precio
            precio.textContent = paquetes[i].precio;
            //Escribimos dentro del botón el texto deseado
            boton.textContent = 'Perzonaliza tu paquete';
            //Creamos una variable donde decimos que tome el link del JSON corespondiente
            var link = paquetes[i].link;
            //Creamos un atributo a <button> y agregamos un "onclick" y cocatenamos la  url correspondiente
            boton.setAttribute("onclick", "location.href=" + "'" + link + "'");
            //Agregamos un src a la etiqueta <img> donde llamaremos desde el JSON la url de la imagen
            img.src = 'images/' + paquetes[i].foto;

            //Le decimos que toda esta info la coloque en el interior de nuestra etiqueta <article>
            cajaInfo.appendChild(titulo);
            cajaInfo.appendChild(descripcion);
            cajaInfo.appendChild(precio);
            cajaInfo.appendChild(boton);

            //Agregamos una clase al elemento "Caja"
            caja.classList.add('caja');
            //Agregamos una clase al elemento "img-fluid" de Bootstrap
            img.classList.add('img-fluid', 'Width100');
            //Agregamos una clase al elemento <button>
            boton.classList.add('button-catalogo');
            //Agregamos una clase al elemento <p> para precio
            precio.classList.add('precio-text');


            //El "for" hará esto por el tamaño del Array[] del JSON

        }
    });