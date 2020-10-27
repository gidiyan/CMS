<div class="py-5">
    <div class="row">
          <div class="text-center  p-5 m-auto" style="width: 50%">
               <form class="" method="POST">
                        <h1><?=$title;?></h1>
                        <?php if (isset($address)):?>
                            <div class="form-control text-dark mb-1"><label><i class="fas fa-home"></i>: <input type="text" name="country" value="<?=$address['country'];?>"></label></div>
                            <div class="form-control text-dark mb-1"><label><i class="fas fa-phone-square-alt"></i>:<input type="text" name="city" value="<?=$address['city'];?>"></label></div>
                            <div class="form-control text-dark mb-1"><label><i class="fas fa-map-marker-alt"></i>: <input type="text" name="cords" value="<?=$address['cords'];?>"></label></div>
                            <div class="form-control text-dark mb-1"><label><i class="fas fa-mail-bulk"></i>: <input type="text" name="post" value="<?=$address['post'];?>"></label></div>
                        <div ><input class="btn-info" type="submit"></div>
                        <?php endif;?>
               </form>
          </div>
    </div>
</div>
