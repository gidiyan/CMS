<div id="login" class="modal">
    <div class="dialog">
        <a href="#close" class="close">X</a>
        <form class="text-center border p-5 m-auto" action="/login" method="POST">
            <h4 class="m-auto">Sign In</h4>
            <div class="mb-1">
                <input class="form-control" type="email" name="email"
                       placeholder="Enter Your Email">
            </div>
            <div class="mb-1">
                <input class="form-control" type="password" name="password"
                       placeholder="Enter Your Password"></div>
            <div class="custom-control custom-checkbox">
                <label class="text-col-4">
                    <input type="checkbox" class="custom-control-input" id="formRemember">
                    <label class="custom-control-label" for="formRemember">Remember me</label>
                </label>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Login</button>
            <p class="mb-1">
                <a class="text-col-1" href="/forgot">Forgot password</a>
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
        <form class="text-center border p-5" action="/register" method="POST">
            <h4 class="h4 mb-2 m-auto">Sign Up</h4>
            <div class="row mb-2 m-auto">
                <div class="tb-2">
                    <label>
                        <input class="form-control text-center" type="text" name="first_name" value=""
                               placeholder="Enter Your First Name">
                    </label>
                </div>
                <div class="tb-2">
                    <label>
                        <input class="form-control" type="text" name="last_name" value=""
                               placeholder="Enter Your Last Name">
                    </label>
                </div>
            </div>
            <div class="row tb-1 m-auto">
                <input class="form-control text-center" type="email" name="email"
                       placeholder="Enter Your Email">
            </div>
            <label>
                <input class="form-control text-center" type="text" name="phone_number" value=""
                       placeholder="Enter Your Phone Number">
            </label>
            <div class="row tb-1  m-auto">
                <input class="form-control text-center" type="password" name="password"
                       placeholder="Enter Your Password">
                <input class="form-control text-center" type="password" name="confirmpassword"
                       placeholder="Confirm Your Password">
            </div>

            <button type="submit" class="btn btn-dark btn-block">Resgister</button>
            <p class="p-1">
                Already a member? <a class="text-col-1 " href="#login">Sign In</a>
            </p>
        </form>
    </div>
</div>