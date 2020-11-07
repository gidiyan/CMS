<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a href="/admin/categories/create" class="btn btn-primary text-center float-right"><span data-feather="plus"></span> Add New</a>
        </div>
        <div class="card-body">
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
                        <td></td>
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


