<!DOCTYPE html>
<html lang="en">
<?php require_once  VIEWS. '/layouts/partials/admin/_head.php';?>
<body>
<?php require_once  VIEWS. '/layouts/partials/admin/_nav.php';?>
<div class="container-fluid">
    <div class="row">
<?php require_once  VIEWS. '/layouts/partials/admin/_sidebar.php';?>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<?php require_once  VIEWS. '/layouts/partials/admin/_titles.php';?>
<?php require_once VIEWS."/".$template;?>
</main>
</div>
</div>
<?php require_once  VIEWS. '/layouts/partials/admin/_scripts.php';?>
</body>
</html>
