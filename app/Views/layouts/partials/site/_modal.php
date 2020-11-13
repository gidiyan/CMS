<div id="login" class="modal">
    <div class="dialog">
        <a href="#close" class="close">X</a>
        <form class="text-center border p-5 m-auto" action="">
            <h4 class="m-auto">Sign In</h4>
            <div class="mb-1">
                <input class="form-control" type="email" name="email" value="" id="email_login"
                       placeholder="Enter Your Email">
            </div>
            <div class="mb-1">
                <input class="form-control" type="password" name="username" value="" id="username_login"
                       placeholder="Enter Your Password"></div>
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
                        <input class="form-control" type="text" name="First Name" value=""
                               placeholder="Enter Your First Name">
                    </label>
                </div>
                <div class="tb-2">
                    <label>
                        <input class="form-control" type="text" name="Last Name" value=""
                               placeholder="Enter Your Last Name">
                    </label>
                </div>
            </div>
            <div class="row tb-1 m-auto">
                <input class="form-control" type="email" name="email" value="" id="email_register"
                       placeholder="Enter Your Email">
            </div>
            <div class="row tb-1  m-auto">
                <input class="form-control text-center" type="password" name="username" value="" id="username_register"
                       placeholder="Enter Your Password">
                <input class="form-control text-center" type="password" name="username" value="" id="username_register"
                       placeholder="Confirm Your Password">
            </div>

            <button type="submit" class="btn btn-dark btn-block">Resgister</button>
            <p class="p-1">
                Already a member? <a class="text-col-1 " href="#login">Sign In</a>
            </p>
        </form>
    </div>
</div>