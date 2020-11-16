<div class="col">
    <div class="card">
        <div class="card-header text-center">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/users/create" class="btn btn-primary text-center float-right"><span
                        data-feather="plus"></span> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (!empty($users) && count($users) > 0): ?>

                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $user->id ?></th>
                                <td class="text-center"><?= $user->name ?></td>
                                <td class="text-center"><?= $user->email ?></td>
                                <td class="text-center"><a href="/admin/users/show/<?= $user->id ?>"
                                                           class="btn btn-default"><span data-feather="eye"></span>View</a>
                                    <a href="/admin/users/edit/<?= $user->id ?>" class="btn btn-primary"><span
                                                data-feather="edit"></span>Edit</a>
                                    <a href="/admin/users/delete/<?= $user->id ?>" class="btn btn-danger"><span
                                                data-feather="delete"></span>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: echo "<h2>No users yet</h2>" ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>


