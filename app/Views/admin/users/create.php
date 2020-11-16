<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/users" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/users/store">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                    <small id="nameHelp" class="form-text text-muted">User name required.</small>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                           required>
                    <small id="emailHelp" class="form-text text-muted">User email required.</small>
                </div>
                <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                           aria-describedby="passwordHelp" required>
                    <small id="passwordHelp" class="form-text text-muted">User password required.</small>
                </div>
                <div class="form-group">
                    <label for="name">Role</label>
                    <select name="role_id" class="form-control">
                        <?php foreach ($roles as $role) : ?>
                            <option value="<?= $role->id ?>"><?= $role->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add User</button>
            </form>
        </div>
    </div>
</div>


