<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog Discount</title>
    <?php require_once  VIEWS. '/layouts/partials/site/_head.php';?>
</head>
<body>
<div class="container">
    <div class="over"></div>
<?php require_once  VIEWS. '/layouts/partials/site/_nav.php';?>
<?php require_once  VIEWS. '/layouts/partials/site/_sidebar.php';?>
<?php require_once VIEWS."/".$template?>
<?php
//    require_once  VIEWS. '/layouts/partials/site/_footer.php';
//    require_once VIEWS.'/layouts/partials/site/_modal.php';
//    require_once VIEWS.'/layouts/partials/site/_template.php';
    if(getURI()!=='contact' or getURI()!=='blog') {
    ?><script src="/assets/js/app.js"></script><?php
    }
?>
</body>
</html>
