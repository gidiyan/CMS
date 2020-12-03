<!--main header page-->
<nav>
    <div class="navbar-center">
        <!-- navigation -->
        <div class="sm-nav md-nav tb-nav">
            <ul class="sm-brand md-brand tb-brand">
                <li><img class="img-fluid" alt="" src="/assets/images/kindpng_625081.png"></li>
            </ul>
            <input id="hamburger" type="checkbox" class="trig_menu">
            <ul class="sm-links md-links tb-links">
                <li><a href="/">Main</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/contact">Contacts</a></li>
            </ul>

            <ul class="sm-tools md-tools tb-tools">
                <li><a href="#"><i class="fas fa-dolly-flatbed"></i>(<small id="cart"
                                                                            class="count-items-in-cart"></small>)</a>
                </li>
                <li><a href="#"><i class="far fa-heart"></i>(<small class="like_me"></small>)</a></li>
                <?php if (Helper::isGuest()): ?>
                    <li><a href="#login"><i class="fas fa-user-alt"></i></a></li>
                <?php else: ?>
                    <li><a title="User Profile" href="/profile"><i class="fas fa-address-card"></i></a></li>
                    <li><a title="Sign Out" href="/logout"><i class="fas fa-sign-out-alt"></i></a></li>
                <?php endif; ?>
            </ul>
            <label for="hamburger" class="nav-ham"><i class="fa-bars fa"></i></label>
        </div>
    </div>
</nav>