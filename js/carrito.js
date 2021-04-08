class Carrito{
    //Añadir al carrito
    compraProducto(e){
        e.preventDefault();
        if(e.target.classList.contains('agregar-carrito')){ ///BOTON
            const producto = e.target.parentElement.parentElement;
            this.leerDatosProducto(producto);
            //console.log(producto);
        }
    }

    leerDatosProducto(producto){
        const infoProducto = {
            imagen : producto.querySelector('.item-imagen').src,
            titulo : producto.querySelector('.item-title').textContent,
            precio : producto.querySelector('.item-precio').textContent,
            //id: producto.querySelector('.item-id').textContent,
            id: producto.querySelector('.item-id').getAttribute('data-id'),
            cantidad : 1
        }
        this.insertarCarrito(infoProducto);
    }

    insertarCarrito(producto){
        console.log(producto.imagen,producto.titulo, producto.precio,producto.id);
        //const row = document.createElement('li');
        const row = document.createElement('tr');
        /*row.innerHTML = `
         <a class="aa-cartbox-img" href="#"><img src="${producto.imagen}" alt="img"></a>
            <div class="aa-cartbox-info">
                <h4><a href="#">${producto.titulo}</a></h4>
                 <p>${producto.precio}</p>
            </div>
        <a class="aa-remove-product borrar-producto item-eliminar" href="#" data-id="${producto.titulo}"><span class="fa fa-times"></span></a>
        `;*/
        row.innerHTML = `
        <td>
            <img src="${producto.imagen}" width=45>
        </td>
        <td>${producto.titulo}</td>
        <td>${producto.precio}</td>
        <td>
            <a href="#" class="borrar-producto fa fa-times" data-id="${producto.id}"></a>
        </td>
    `;
        Listaproducto.appendChild(row);
    }

    eliminarProducto(e){
        e.preventDefault();
        let producto, productID;
        if(e.target.classList.contains('borrar-producto')){
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productID = producto.querySelector('a').getAttribute('data-id');
        }
    }
}