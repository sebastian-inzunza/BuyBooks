const carro = new Carrito();

const carrito = document.getElementById('carrito');
const product = document.getElementById('lista-product'); ///toma TODOOOO
//const Listaproducto = document.querySelector('#lista-carrito ul');
const Listaproducto = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');
const procesarPedidoBtn = document.getElementById('procesar-pedido');
const pedidos = document.getElementById("pedido");

cargarEventos();

function cargarEventos(){
    product.addEventListener('click' ,(e)=>{carro.compraProducto(e)});

    carrito.addEventListener('click',(e)=>{carro.eliminarProducto(e)});

    vaciarCarritoBtn.addEventListener('click', (e)=>{carro.vaciarCarrito(e)});

    document.addEventListener('DOMContentLoaded', carro.leerLocalStorage());

    procesarPedidoBtn.addEventListener('click', (e)=>{carro.procesarPedido(e)});
}