<div class="col">
    <div class="card">
        <div class="card-header text-center">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/brands/create" class="btn btn-primary text-center float-right"><span
                        data-feather="plus"></span> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (!empty($brands) && count($brands) > 0): ?>

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
                        <?php foreach ($brands as $brand): ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $brand->id ?></th>
                                <td class="text-center"><?= $brand->name ?></td>
                                <td class="text-center"><?= $brand->status !== 0 ? 'active' : 'not active' ?></td>
                                <td class="text-center"><a href="/admin/brands/show/<?= $brand->id ?>"
                                                           class="btn btn-default"><span data-feather="eye"></span>View</a>
                                    <a href="/admin/brands/edit/<?= $brand->id ?>" class="btn btn-primary"><span
                                                data-feather="edit"></span>Edit</a>
                                    <a href="/admin/brands/delete/<?= $brand->id ?>" class="btn btn-danger"><span
                                                data-feather="delete"></span>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: echo "<h2>No brands yet</h2>" ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>


