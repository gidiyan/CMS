"use strict"

class Nav{
    cart = [...document.querySelectorAll('.but-cart')];
    constructor() {
    }
    total() {
        let tmpTotal = 0;
        let count = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
        tmpTotal = count.reduce((previous, current) => previous + current.amount, 0);
        document.querySelector('.count-items-in-cart').textContent = tmpTotal;
    }
    button(){
        this.cart.forEach(button => {
            button.addEventListener('click',
                () => {
                    let tmpTotal = 0;
                    let count = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
                    tmpTotal = count.reduce((previous, current) => previous + current.amount, 0);
                    document.querySelector('.count-items-in-cart').textContent = tmpTotal;
                }
            )
        })
    }
}
(function () {
    const nav = new Nav();
    nav.total();
    nav.button();
})();