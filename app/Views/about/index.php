<div class="no_goods"></div>
<div class="row">
    <div class="tb-2">
        <form class="text-center border m-auto" action="" method="post">
            <h4 class="px-4">Contact us</h4>
            <div class="mb-1">
                <input class="form-control text-center" type="text" name="username" value="" id="username" placeholder="Enter Your Name" required></div>
            <div class="mb-1">
                <input class="form-control text-center" type="email" name="email" value="" id="email" placeholder="Enter Your Email" required>
            </div>
<!--            <div class="form-control form-radio mb-1">-->
<!--                <label>-->
<!--                    <input name="gender" type="radio" ><strong class="text-col-5">Mr.</strong>-->
<!--                </label>-->
<!--                <label>-->
<!--                    <input name="gender" type="radio" ><strong class="text-col-5">Ms.</strong>-->
<!--                </label>-->
<!--            </div>-->
            <label class="text-col-5 text_uppercase" for="">Subject:</label>
            <select name="subject" class="form-select" id="">
                <option class="text-uppercase" value="" disabled>Choose options</option>
                <option  class="text-uppercase" value="Feedback">Feedback</option>
                <option  class="text-uppercase" value="Report">Report a bug</option>
                <option  class="text-uppercase" value="Request">Feater request</option>
            </select>
            <div class="form-group">
                <textarea name="message" class="form-control bg-white" id="text" cols="20" rows="10" required></textarea>
            </div>
<!--            <div class="form-checkbox mb-1">-->
<!--                <label>-->
<!--                    <input type="checkbox" name="copy">-->
<!--                </label>Send me a copy of this message-->
<!--            </div>-->
            <button type="submit" class="btn btn-info btn-block">Send</button>
        </form>
    </div>
<!--    <div class="tb-2"><h2>~ here could be your advertise ~</h2></div>-->

    <div class="tb-2 my-2 text-center">
        <h4 class="px-4 border">Address</h4>
        <div class="form-control text-dark mb-1"><label><i class="fas fa-university"></i>: <?=$address['country'];?></label></div>
        <div class="form-control text-dark mb-1"><label><i class="fas fa-home"></i>:<?=$address['city'];?></label></div>
        <div class="form-control text-dark mb-1"><label><a href="https://www.google.com.ua/maps/place/<?=$address['cords'];?>" target="_blank"><i class="fas fa-map-marker-alt"></i>:<?=$address['cords'];?></a></label></div>
        <div class="form-control text-dark mb-1"><label><i class="fas fa-mail-bulk"></i>:<?=$address['post'];?></label></div>
    </div>
</div>