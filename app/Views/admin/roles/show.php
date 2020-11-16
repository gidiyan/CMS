<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/roles" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Role name</label>
                <input type="text" class="form-control" value="<?= $role->name ?>" disabled>
                <small id="nameHelp" class="form-text text-muted">Role name required.</small>
            </div>
        </div>
    </div>
</div>


