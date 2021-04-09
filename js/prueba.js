class Carrit{
    //Añadir al carrito
    compraProducto(e){
        e.preventDefault();
        if(e.target.classList.contains('agregar')){ ///BOTON
            const producto = e.target.parentElement.parentElement;
            //this.leerDatosProducto(producto);
            console.log(producto);
        }
    }
}