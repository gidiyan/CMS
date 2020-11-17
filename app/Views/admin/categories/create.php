<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/categories" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form action="/admin/categories/store" method="POST" enctype="multipart/form-data" style="width: 30vw">
                <div class="form-group">
                    <label for="name">Category name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                    <small id="nameHelp" class="form-text text-muted">Category name required.</small>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="status" name="status">
                    <label class="form-check-label" for="status">Check if active</label>
                </div>
                <div class="form-group row" id="drop-area">
                    <div class="container-fluid">
                        <div class="card border-dark text-center mb-3">
                            <div class="card-header bg-transparent border-dark">
                                <label for="title">Add Image:</label>
                            </div>
                            <div class="card-body text-dark">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="file" id="insert_image" multiple accept="image/*"
                                               name="image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 my-3" id="store_image">
                                        <p>Drop Picture Here</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
            </form>
        </div>
    </div>
</div>
<?php require_once VIEWS . '/admin/categories/_modal.php' ?>

