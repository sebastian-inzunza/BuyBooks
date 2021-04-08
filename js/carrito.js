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
        let productosLS;
        productosLS = this.obtenerProductoLocalStorange();
        productosLS.forEach(function(productoLS){
            if (productoLS.id === infoProducto.id){
                productosLS = productoLS.id;
            }
        });

        if (productosLS === infoProducto.id){
            Swal.fire({
                type: 'info',
                title: 'Oops...',
                text: 'El producto ya está agregado',
                showConfirmButton: false,
                timer: 1000
            })
        }else{
           this.insertarCarrito(infoProducto);
        }
        
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

        <style> 

        td{
            display:flex;
            justify-content: center;
        }
            
        </style>
        <td>
            <img src="${producto.imagen}" width=60>
        </td>
        <td>${producto.precio}</td>
        <td>${producto.titulo}</td>
       
        <td>
            <a href="#" class="borrar-producto fa fa-times-circle item-id" data-id="${producto.id}"></a>
        </td>
    `;
        Listaproducto.appendChild(row);
        this.guardarProductosLocalStorange(producto);
    }

    eliminarProducto(e){
        e.preventDefault();
        let producto, productID;
        if(e.target.classList.contains('borrar-producto')){
            e.target.parentElement.parentElement.remove();
            producto = e.target.parentElement.parentElement;
            productID = producto.querySelector('.item-id').getAttribute('data-id');
        }
        this.eliminarProductoLocalStorage(productID);
    }

    vaciarCarrito(e){
        e.preventDefault();
        while(Listaproducto.firstChild){
            Listaproducto.removeChild(Listaproducto.firstChild);
        }
        this.vaciarLocalStore();
        return false;

    }

    guardarProductosLocalStorange(producto){
        let productos;
        productos = this.obtenerProductoLocalStorange();
        productos.push(producto);
        localStorage.setItem('productos', JSON.stringify(productos));
    }

    obtenerProductoLocalStorange(){
        let productoLS;

        //Comprobar si hay algo en LS
        if(localStorage.getItem('productos') === null){
            productoLS = [];
        }
        else {
            productoLS = JSON.parse(localStorage.getItem('productos'));
        }
        return productoLS;
    }


    eliminarProductoLocalStorage(productID){
        let productosLS;
        //Obtenemos el arreglo de productos
        productosLS = this.obtenerProductoLocalStorange();
        //Comparar el id del producto borrado con LS
        productosLS.forEach(function(productoLS, index){
            if(productoLS.id === productID){
                productosLS.splice(index, 1);
            }
        });

        //Añadimos el arreglo actual al LS
        localStorage.setItem('productos', JSON.stringify(productosLS));
    }

    leerLocalStorage(){
        let productosLS;
        productosLS = this.obtenerProductoLocalStorange();
        productosLS.forEach(function (producto){
            //Construir plantilla
            const row = document.createElement('tr');
            row.innerHTML = `

        <style> 

            td{
             display:flex;
             justify-content: center;
          }
            
        </style>
        <td>
            <img src="${producto.imagen}" width=60>
      </td>
            <td>${producto.precio}</td>
        <td>${producto.titulo}</td>
       
        <td>
            <a href="#" class="borrar-producto fa fa-times-circle item-id" data-id="${producto.id}"></a>
        </td>
         `;
            Listaproducto.appendChild(row);
        });
    }

    vaciarLocalStore(){
        localStorage.clear();
    }

    procesarPedido(e){
        e.preventDefault();

        if(this.obtenerProductoLocalStorange().length === 0){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El carrito está vacío, agrega algún producto',
                showConfirmButton: false,
                timer: 3000
            })
        }else{
             location.href =  "cart.html";
        }
    }

}