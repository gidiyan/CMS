<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/roles" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/roles/store">
                <div class="form-group">
                    <label for="name">Role name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                    <small id="nameHelp" class="form-text text-muted">Role name required.</small>
                </div>

                <button type="submit" class="btn btn-primary">Add Role</button>
            </form>
        </div>
    </div>
</div>


