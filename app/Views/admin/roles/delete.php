<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/roles" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="name"><h2>This Role will be deleted! Are You Sure?</h2></label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger" name="submit">Delete Role</button>
                    <button class="btn btn-info" name="reset">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


