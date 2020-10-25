<div class="fr">
    <div class="sm-foot md-foot or-3">
        <p>&copy;2020 Dog discount</p>
    </div>
    <ul class="sm-foot md-foot tb-foot">
        <li><b>Follow:</b></li>
        <li><a href="https://twitter.com/dog_discount" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
        <li><a href="https://www.instagram.com/dog_discount/" target="_blank"><i class="fab fa-instagram-square"></i></a></li>
        <li><a href="https://www.facebook.com/dog_discount/" target="_blank"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.tiktok.com/@dogdiscount.ea?lang=en" target="_blank"><i class="fab fa-tiktok"></i></a></li>
    </ul>
    <ul class="sm-foot md-foot tb-foot">
        <li><b>Contact:</b></li>
        <li><a href="mailto:test@test.com" target="_blank"><i class="far fa-envelope"></i></a></li>
        <li><a href="tel:+123456789123" target="_blank"><i class="fas fa-mobile-alt"></i></a></li>
        <li><a href="viber://chat/?number=+123456789123&lang=en" target="_blank"><i class="fab fa-viber"></i></a></li>
        <li><a href="https://wa.me/123456789123?lang=ru&text=I%20have%20a%20question" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
    </ul>
</div>
<div id="login" class="modal">
    <div class="dialog">
        <a href="#close" class="close">X</a>
        <form class="text-center border p-5 m-auto" action="">
            <h4 class="m-auto">Sign In</h4>
            <div class="mb-1">
                <input class="form-control" type="email" name="email" value=""  id="email_login" placeholder="Enter Your Email"></label>
            </div>
            <div class="mb-1">
                <input class="form-control" type="password" name="username" id="password_login" value=""  placeholder="Enter Your Password"></label></div>
            <div class="form-checkbox mb-1">
                <label class="text-col-4">
                    <input class="form-control" type="checkbox">Remeber Me
                </label>
            </div>


            <button type="submit" class="btn btn-dark btn-block">Login</button>
            <p class="mb-1">
                <a class="text-col-1" href="forgot.html">Forgot password</a>
            </p>
            <p class="p-1">
                Not a memer <a class="text-col-1" href="#register">Register</a>
            </p>
        </form>
    </div>
</div>
<div id="register" class="modal">
    <div class="dialog">
        <a href="#close" class="close">X</a>
        <form class="text-center border p-5" action="">
            <h4 class="h4 mb-2 m-auto">Sign Up</h4>
            <div class="row mb-2 m-auto">
                <div class="tb-2">
                    <label>
                        <input class="form-control" type="text" name="First Name" value="" placeholder="Enter Your First Name">
                    </label>
                </div>
                <div class="tb-2">
                    <label>
                        <input class="form-control" type="text" name="Last Name" value="" placeholder="Enter Your Last Name">
                    </label>
                </div>
            </div>
            <div class="row tb-1 m-auto">
                <input class="form-control" type="email" name="email" value=""  id="email_register" placeholder="Enter Your Email">
            </div>
            <div class="row tb-1  m-auto">
                </label><input class="form-control text-center" type="password" name="username" value="" id="username_register" placeholder="Enter Your Password">
                <input class="form-control text-center" type="password" name="username" value=""  id="password_register" placeholder="Confirm Your Password">
            </div>

            <button type="submit" class="btn btn-dark btn-block">Resgister</button>
            <p class="p-1">
                Already a member? <a class="text-col-1 "href="#login">Sign In</a>
            </p>
        </form>
    </div>
</div>
</div>
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
</body>
</html>