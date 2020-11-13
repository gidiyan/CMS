<div class="col">
    <div class="card">
        <div class="card-header text-center">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong>
            <!--            <a      href="/admin/guestbook/create" class="btn btn-primary text-center float-right"><span-->
            <!--                        data-feather="plus"></span> Add New</a>-->
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (!empty($messages) && count($messages) > 0): ?>
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Approved</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($messages as $message): ?>
                            <tr>
                                <th scope="row"><?= $message->id ?></th>
                                <td><?= $message->username ?></td>
                                <td><?= $message->email ?></td>
                                <td><?= $message->subject ?></td>
                                <td><p class="text-truncate" style="width: 250px"><?= $message->message ?></p></td>
                                <td><?= $message->approved !== 0 ? 'YES' : '' ?></td>
                                <td>
                                    <a href="/admin/guestbook/show/<?= $message->id ?>" class="btn btn-default"><span
                                                data-feather="eye"></span>View</a>
                                    <a href="/admin/guestbook/edit/<?= $message->id ?>" class="btn btn-primary"><span
                                                data-feather="edit"></span>Edit</a>
                                    <a href="/admin/guestbook/delete/<?= $message->id ?>" class="btn btn-danger"><span
                                                data-feather="delete"></span>Delete</a>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: echo "<h2>No guestbook yet</h2>" ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


