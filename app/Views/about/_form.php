<div class="row">
    <div class="tb-2">
        <form class="text-center border m-auto" action="" method="post">
            <h4 class="px-4">Contact us</h4>
            <div class="mb-1">
                <input class="form-control text-center" type="text" name="username" value="" id="username"
                       placeholder="Enter Your Name" required></div>
            <div class="mb-1">
                <input class="form-control text-center" type="email" name="email" value="" id="email"
                       placeholder="Enter Your Email" required>
            </div>
            <label class="text-col-5 text_uppercase" for="">Subject:</label>
            <select name="subject" class="form-select" id="">
                <option class="text-uppercase" value="" disabled selected>Choose options</option>
                <option class="text-uppercase" value="Feedback">Feedback</option>
                <option class="text-uppercase" value="Report">Report a bug</option>
                <option class="text-uppercase" value="Request">Feater request</option>
            </select>
            <div class="form-group">
                <textarea name="message" class="form-control bg-white" id="text" style="height: 10vw"
                          required></textarea>
            </div>
            <div class="form-checkbox mb-1">
                <label>
                    <input type="checkbox" name="copy">
                </label>Send me a copy of this message
            </div>
            <button type="submit" class="btn btn-info btn-block">Send</button>
        </form>
    </div>