<aside class="sidebar">
    <div class="sidebar-header">
        <button class="close-btn"><i class="fas fa-times"></i></button>
        <h5 class="logo">Your shopping cart</h5>
    </div>
    <div class="cart-items">
    </div>
    <div class="cart-footer">
        <h3>Your total:$<span class="cart-total"></span></h3>
        <button class="clear-cart btn-info font-size--default">Clear Cart</button>
        <?php if (Helper::isGuest()): ?>
            <p>To make Your order please <a href="/#login">Sign In</a></p>
        <?php else: ?>
        <a href="#" class="check-out clear-cart btn-info font-size--default checkout__now">Checkout</a>
        <?php endif;?>
    </div>
</aside>