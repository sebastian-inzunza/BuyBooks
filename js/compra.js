const compra = new Carrito();

const listaCompra = document.querySelector("#lista-compra tbody");
const carrito = document.getElementById('carrito');
const procesarCompraBtn = document.getElementById('procesar-compra');

cargarEventos();

function cargarEventos(){
        document.addEventListener('DOMContentLoaded', compra.leerLocalStorageCompra());

        //Eliminar productos del carrito
        
        carrito.addEventListener('click', (e) => { compra.eliminarProducto(e)});
        compra.calcularTotal();
        procesarCompraBtn.addEventListener('click', procesarCompra);

}

function procesarCompra() {
    
    if (compra.obtenerProductoLocalStorange().length === 0) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'No hay productos, selecciona alguno',
            showConfirmButton: false,
            timer: 3000
        })
    }
}
