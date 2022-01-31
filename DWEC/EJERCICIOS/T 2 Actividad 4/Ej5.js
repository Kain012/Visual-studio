
    var productos = [];

    /** Añade un producto a la lista y muestra la lista **/
    function anadirProducto() {
        let valueTxtProducto = document.getElementById('txtProducto').value;
        if (valueTxtProducto === "") {
            alert("Debe especificar un nombre de producto");
        } else {
            productos.push(valueTxtProducto);
            mostrarLista();
        }

    }

    /** Reinicia el array de productos **/
    function limpiar() {
        productos = [];
        mostrarLista();
    }

    /** Refrescamos la lista de productos **/
    function mostrarLista() {
        var htmlListaProductos = "";
        for (var i = 0; i < productos.length; i++) {
            htmlListaProductos += '<li>' + productos[i] + '</li>';
        }
        document.getElementById('listaProductos').innerHTML = htmlListaProductos;
    }
