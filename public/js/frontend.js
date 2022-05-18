const shoppingCart = new ShoppingCart
const buttonsAddToCart = document.querySelectorAll('.btn-add-to-cart')
const elTotalProductInCart = document.querySelector('.total-count')
const elCartTotalAmount = document.querySelector('#cart-total-amount')
const elProductAmount = document.querySelector('#product-amount')
const elThumbsItem = document.querySelectorAll('.thumbs-item img')
const elProductMainImage = document.querySelector('img#product-main-image')

shoppingCart.renderProducts()
elTotalProductInCart.innerHTML = shoppingCart.totalQty()
elCartTotalAmount.innerHTML = shoppingCart.totalAmount()

// Add to cart
Array.from(buttonsAddToCart).forEach(button => {
    button.addEventListener('click', function(event) {
        let qty = elProductAmount ? parseInt(elProductAmount.value) : 1

        if (isNaN(qty)) {
            alert('Product amount is wrong')
            return false
        }

        let product = {
            id: button.getAttribute('data-id'),
            name: button.getAttribute('data-name'),
            price: button.getAttribute('data-price'),
            img: button.getAttribute('data-img'),
        }

        if (!shoppingCart.exists(product.id)) {
            shoppingCart.add(product, qty)
        } else {
            shoppingCart.update(product.id, qty)
        }

        elTotalProductInCart.innerHTML = shoppingCart.totalQty()
        elCartTotalAmount.innerHTML = shoppingCart.totalAmount()
        shoppingCart.renderProducts()

    })
})

// Remove product from cart store
function removeProductInCart(productId) {
    shoppingCart.remove(productId)
    elTotalProductInCart.innerHTML = shoppingCart.totalQty()
    elCartTotalAmount.innerHTML = shoppingCart.totalAmount()
    shoppingCart.renderProducts()
}

Array.from(document.querySelectorAll('ul#product-in-cart .remove-product')).forEach(button => {
    button.addEventListener('click', function(event) {

        let productId = button.getAttribute('data-id')
        shoppingCart.remove(productId)
        shoppingCart.renderProducts()
    })
})

// Change image
Array.from(elThumbsItem).forEach(img => {
    img.addEventListener('click', function(event) {
        elProductMainImage.setAttribute('src', img.getAttribute('src'))
    })
})

// Input amount minus or plus
if (document.querySelector('.btn-plus-amount') && document.querySelector('.btn-minus-amount')) {
    document.querySelector('.btn-plus-amount').addEventListener('click', function(event) {
        let total = parseInt(elProductAmount.value) + 1

        if (isNaN(total)) {
            elProductAmount.value = 1
            return
        }

        elProductAmount.value = total
    })

    document.querySelector('.btn-minus-amount').addEventListener('click', function(event) {
        let total = parseInt(elProductAmount.value) - 1

        if (isNaN(total) || total <= 0) {
            elProductAmount.value = 1
            return
        }

        elProductAmount.value = total
    })
}