<div class="col">
    <div class="card">
        <div class="card-header text-center">
            <strong class="card-title"> <span data-feather="file-text" ></span><?php echo $title; ?></strong><a href="/admin/categories/create" class="btn btn-primary text-center float-right"><span data-feather="plus"></span> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if(!empty($categories) && count($categories)>0): ?>

                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Status</th>
                        <th scope="col" class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
<?php foreach ($categories as $category):    ?>
                    <tr>
                        <th scope="row" class="text-center"><?=$category->id ?></th>
                        <td class="text-center"><?=$category->name ?></td>
                        <td class="text-center"><?=$category->status!==0 ? 'active':'not active' ?></td>
                        <td class="text-center"><a href="/admin/categories/show/<?=$category->id?>" class="btn btn-default"><span data-feather="eye"></span>View</a>
                        <a href="/admin/categories/edit/<?=$category->id?>" class="btn btn-primary"><span data-feather="edit"></span>Edit</a>
                        <a href="/admin/categories/delete/<?=$category->id?>" class="btn btn-danger"><span data-feather="delete"></span>Delete</a>
                        </td>
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


