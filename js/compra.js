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
        procesarCompraBtn.addEventListener('click',(e) => {compra.procesarCompra(e)});
}


