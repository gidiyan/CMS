<div class="tb-2 my-2 text-center">
    <h4 class="px-4 border">Address</h4>
    <div class="form-control text-dark mb-1"><label><i class="fas fa-university"></i>: <?=$address['country'];?></label></div>
    <div class="form-control text-dark mb-1"><label><i class="fas fa-home"></i>:<?=$address['city'];?></label></div>
    <div class="form-control text-dark mb-1"><label><a href="https://www.google.com.ua/maps/place/<?=$address['cords'];?>" target="_blank"><i class="fas fa-map-marker-alt"></i>:<?=$address['cords'];?></a></label></div>
    <div class="form-control text-dark mb-1"><label><i class="fas fa-mail-bulk"></i>:<?=$address['post'];?></label></div>
</div>