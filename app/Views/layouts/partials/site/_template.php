<template id="cartItem">
    <div class="cart-item">
        <div class="picture product-img">
            <img src="../assets/images/prod3.jpg" alt="name" class="img-fluid w-100">
        </div>
        <div class="product_name p-auto">Product name</div>
        <div class="remove-btn text-right">
            <a class="reset-anchor m-auto" href="#">
                <i class="fas fa-trash-alt"></i>
            </a>
        </div>
        <div class="quantity">
            <div class="border d-flex justify-content-around mx-auto">
                <i class="fas fa-caret-left inc-dec-btn"></i>
                <span class="border-1 p-1 amount">1</span>
                <i class="fas fa-caret-right inc-dec-btn"></i>
            </div>
        </div>
        <div class="prices">
            <span class="price">$<span class="product_price"></span></span>
            <span class="subtotal">$<span class="product-subtotal"></span></span>
        </div>
    </div>
</template>