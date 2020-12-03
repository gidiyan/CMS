<div class="position-fixed mx-5">
    <div class="profile-userpic">
        <a href="/profile" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="/assets/images/user.png" size="20%"></a>
    </div>
    <div class="profile-usertitle">
        <div class="profile-usertitle-name">
            <?= $user->name;?>
        </div>
        <div class="profile-usertitle-job">
            Developer
        </div>
    </div>
    <div class="profile-usermenu sidebar-sticky">
        <ul class="nflex-column incol">
            <li class="incol mb-2 mt-3">
                <a href="/profile" class="nav-link active">
                    <i class="fa fa-home"></i>
                    Overview </a>
            </li>
            <li class="incol mb-2 mt-3">
                <a class="nav-link" href="/profile">
                    <i class="fa fa-user"></i>
                    Account Settings </a>
            </li>
            <li class="incol mb-2 mt-3">
                <a class="nav-link" href="#">
                    <i class="fa fa-check"></i>
                    Tasks </a>
            </li>
            <li class="incol mb-2 mt-3">
                <a class="nav-link" href="/profile/orders">
                    <i class="fa fa-flag"></i>
                    Orders </a>
            </li>
        </ul>
    </div>
</div>
