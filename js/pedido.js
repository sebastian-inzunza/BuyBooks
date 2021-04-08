const carro = new Carrito();
const carrito = document.getElementById('carrito');
<<<<<<< Updated upstream
const product = document.getElementById('lista-product'); ///toma TODOOOO
//const Listaproducto = document.querySelector('#lista-carrito ul');
const Listaproducto = document.querySelector('#lista-carrito tbody');
=======
const productos = document.getElementById('lista-productos');
const listaProductos = document.querySelector("#lista-carrito ul");
>>>>>>> Stashed changes

cargarEventos();

function cargarEventos(){
<<<<<<< Updated upstream
    product.addEventListener('click' ,(e)=>{carro.compraProducto(e)});

    carrito.addEventListener('click',(e)=>{carro.eliminarProducto(e)});

=======
    productos.addEventListener('click', (e) => {carro.comprarProducto(e)});
    
>>>>>>> Stashed changes
}