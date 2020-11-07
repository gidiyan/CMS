<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a href="/admin/categories" class="btn btn-info text-center float-right"><span data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/categories/store">
                <div class="form-group">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" require>
                    <small id="nameHelp" class="form-text text-muted">Category name required.</small>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="status">
                    <label class="form-check-label" for="status">Is Active?</label>
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>

            <div class="table-responsive">
                <?php if(!empty($categories) && count($categories)>0): ?>

                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($categories as $category):    ?>
                            <tr>
                                <th scope="row"><?=$category->id ?></th>
                                <td><?=$category->name ?></td>
                                <td><?=$category->status ?></td>
                                <td>@mdo</td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                <?php else: echo "<h2>No categories yet</h2>"  ?>
                <?php endif;?>
            </div>

        </div>
    </div>
</div>


