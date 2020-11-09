<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/categories" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/categories/update">
                <input type="hidden" name="id" value="<?= $category->id ?>" required>
                <div class="form-group">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                           value="<?= $category->name ?>" required>
                    <small id="nameHelp" class="form-text text-muted">Category name required.</small>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="status"
                           name="status" <?php echo ($category->status == 1) ? 'checked' : '' ?>>
                    <label class="form-check-label" for="status">Check if active</label>
                </div>
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>
</div>


