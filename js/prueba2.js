const z = new Carrit();

const c = document.getElementById('carrito');
const prod = document.getElementById('lista'); ///toma TODOOOO
//const Listaproducto = document.querySelector('#lista-carrito ul');
const Listaprodu = document.querySelector('#lista-carrito tbody');

cargarEventos();

function cargarEventos(){
    prod.addEventListener('click' ,(e)=>{z.compraProducto(e)});

}