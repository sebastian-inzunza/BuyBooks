const carro = new Carrito();
const carrito = document.getElementById('carrito');
const product = document.getElementById('lista-product'); ///toma TODOOOO
//const Listaproducto = document.querySelector('#lista-carrito ul');
const Listaproducto = document.querySelector('#lista-carrito tbody');

cargarEventos();

function cargarEventos(){
    product.addEventListener('click' ,(e)=>{carro.compraProducto(e)});

    carrito.addEventListener('click',(e)=>{carro.eliminarProducto(e)});

}