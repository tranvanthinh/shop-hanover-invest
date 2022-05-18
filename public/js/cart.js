const CART_STORAGE_KEY = 'cart'

class ShoppingCart {
    constructor() {
        this.products = JSON.parse(localStorage.getItem(CART_STORAGE_KEY)) || [];
    }

    add(product, qty) {
        product.qty = qty

        this.products.push(product)
        this.saveToCart()
    }

    update(productId, qty) {
        let product = this.products.find(item => item.id == productId)
        product.qty += qty

        this.saveToCart()
    }

    remove(productId) {
        this.products.forEach((item, index) => {
            if (item.id == productId) this.products.splice(index, 1);
        })

        this.saveToCart()
    }

    exists(productId) {
        return this.products.find(item => item.id === productId) !== undefined
    }

    totalQty() {
        let total = 0

        if (this.products.length > 0) {
            this.products.forEach(product => {
                total += product.qty
            })
        }

        return total
    }

    totalAmount() {
        let total = 0

        if (this.products.length > 0) {
            this.products.forEach(product => {
                total += (product.qty * product.price)
            })
        }

        return (total).toLocaleString('en-US', { style: 'currency', currency: 'USD' })
    }

    saveToCart() {
        localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(this.products))
    }

    renderProducts() {
        let content = ''

        if (this.products.length === 0) {
            content = '<li style="justify-content:center; display: flex;">Giỏ hàng trống!</li>'
        } else {
            this.products.forEach(item => {
                content += `
                <tr>
                    <td class="si-pic">
                        <img src="${item.img}" alt="">
                    </td>
                    <td class="si-text">
                        <div class="product-selected">
                            <h6>${item.name}</h6>
                            <p>$${item.price}.00 x ${item.qty}</p>
                        </div>
                    </td>
                    <td class="si-close" onclick='removeProductInCart(${item.id})'>
                        <i class="ti-close"></i>
                    </td>
                </tr>`


                // content += `<li>
                //     <span class="remove-product" onclick='removeProductInCart(${item.id})'>
                //         <i class="bi bi-x"></i>
                //     </span>
                //     <div>
                //         <img src="${item.img}" class="p-img-cart"/>
                //     </div>
                //     <div>
                //         <h5>${item.name}</h5>
                //         <span class="text-accent me-2">$${item.price}.00</span>
                //         <span class="text-muted">x ${item.qty}</span>
                //     </div>

                // </li>`
            })
        }

        document.querySelector('#product-in-cart').innerHTML = content
    }

    // Giỏ hàng
    // renderShoppingCart() {
    //     let cart = ''

    //     if (this.products.length === 0) {
    //         cart = '<li style="justify-content:center; display: flex;">Giỏ hàng trống!</li>'
    //     } else {
    //         this.products.forEach(item => {
    //             cart += `
    //             <tr>
    //                 <td class="cart-pic first-row"><img src="${item.img}" alt=""></td>
    //                 <td class="cart-title first-row">
    //                     <h5>${item.name}</h5>
    //                 </td>
    //                 <td class="p-price first-row">$0.00</td>
    //                 <td class="qua-col first-row">
    //                     <div class="quantity">
    //                         <span class="total-count">${item.qty}</span>
    //                     </div>
    //                 </td>
    //                 <td class="total-price first-row" id="cart-total-amount">$${item.price}.00</td>
    //                 <td class="close-td first-row" onclick='removeProductInCart(${item.id})'><i class="ti-close"></i></td>
    //                 <td class="close-td first-row"><i class="ti-save"></i></td>
    //             </tr>`
    //         })
    //     }
    //     document.querySelector('#product-in-shoppingcart').innerHTML = cart
    // }
}