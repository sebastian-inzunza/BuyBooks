

const addToShoppingCartButtons = document.querySelectorAll('.addCart');

addToShoppingCartButtons.forEach((addToCardButton)=> {
    addToCardButton.addEventListener('click', addToCartClicked);
});

const shoppingCartItemContainer = document.querySelector (
    '.shoppingCartItemContainer');

function addToCartClicked(event){
    const button = event.target
    //console.log('addToCartClicked -> button', button);
    const item = button.closest('.item');
    //console.log('addToCartClicked -> item', item);

    const itemImagen = item.querySelector('.item-imagen').src;
    const itemTittle = item.querySelector('.item-title').textContent;
    const itemPrecio = item.querySelector('.item-precio').textContent;

    addItemToShoppingCart(itemImagen, itemTittle, itemPrecio);
    
}

function addItemToShoppingCart(itemImagen, itemTittle, itemPrecio) {
    /*console.log('addToCartClicked -> datos', 
    itemImagen, 
    itemTittle, 
    itemPrecio);*/

    const  shoppingCartRow = document.createElement('div');
    const shoppingCartContent = `
   
    <table class="table">            
    <tbody>
        <tr class ="shoppingCartItemContainer">
          <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
          <td><a href="#"><img src= ${itemImagen} alt="img"></a></td>
          <td><a class="aa-cart-title" href="#">${itemTittle}</a></td>
          <td>${itemPrecio}</td>
          <td><input class="aa-cart-quantity" type="number" value="1"></td>
        </tr>  
    </tbody>

  </table>
    
    `;
    shoppingCartRow.innerHTML = shoppingCartContent;
    shoppingCartItemContainer.append(shoppingCartRow);
}


