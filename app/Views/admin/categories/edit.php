<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/categories" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/categories/update" style="width: 30vw">
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
                <button type="submit" class="btn btn-primary">Update Category</button>
            </form>
        </div>
    </div>
</div>
<div id="insertimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 50vw">
            <div class="modal-header d-flex">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title float-right text-info">Crop & Insert Image</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <div id="image_crop" style="width:300px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <button class="btn btn-success crop_image img-fluid" data-model="categories">Crop & Insert
                            Image
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
