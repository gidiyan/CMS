<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/guestbook" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/guestbook/update">
                <input type="hidden" name="id" value="<?= $message->id ?>" required>
                <div class="form-group">
                    <label for="name">Author</label>
                    <input type="text" class="form-control" id="name" name="username"
                           value="<?= $message->username ?>" required>
                    <label for="name">Email</label>
                    <input type="text" class="form-control" id="name" name="email"
                           value="<?= $message->email ?>" required>
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" id="name" name="subject"
                           value="<?= $message->subject ?>" required>
                    <label for="name">Message</label>
                    <textarea rows="10" cols="50" style="width: 50vw" class="form-control" id="name" name="message"
                              required><?= $message->message ?></textarea>
                    <small class="form-text text-muted">All fields required.</small>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="status"
                           name="approved" <?php echo ($message->approved == 1) ? 'checked' : '' ?>
                    <label class="form-check-label" for="approved">Check if approved</label>
                </div>
                <button type="submit" class="btn btn-primary">Update Message</button>
            </form>
        </div>
    </div>
</div>