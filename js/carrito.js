class Carrito{
<<<<<<< Updated upstream
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
=======

    //añadir el producto
    comprarProducto(e){
        e.preventDefault();

        if (e.target.classList.contains('agregar-carrito')){
            const producto = e.target.parentElement.parentElement;
            this.leerDatosproductos(producto);
        }
    }

    leerDatosproductos(producto){
        const infoProducto = {
            imagen : producto.querySelector('img').src,
            titulo : producto.querySelector('h4').textContent,
            precio : producto.querySelector('.precio span').textContent,
>>>>>>> Stashed changes
            cantidad : 1
        }
        this.insertarCarrito(infoProducto);
    }

    insertarCarrito(producto){
<<<<<<< Updated upstream
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
=======
        const row = document.createElement('li');
        row.innerHTML =`
            <a class="aa-cartbox-img" href="#"><img src="${producto.imagen}" alt="img"></a>
              <div class="aa-cartbox-info">
                 <h4><a href="#">${producto.titulo}</a></h4>
                 <p>${producto.precio}</p>
             </div>
            <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
        `;
        listaProductos.appendChild(row);
    }
    

}

>>>>>>> Stashed changes
