<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/products" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body"
        ">
        <form method="POST" action="/admin/products/store">
            <div class="form-group">
                <div class="form-group"><label for="name">Name</label>
                    <input type="text" class="form-control" style="width: 30vw" id="name" name="name"
                           aria-describedby="nameHelp"
                           required>
                </div>
                <div class="form-group"><label for="name">Category</label>
                    <div>
                        <select class="form-select" style="width: 30vw" name="category_id" id="category_id"
                                required>
                            <?php foreach ($categories as $category) { ?>
                                <option class="text-uppercase"
                                        name="category_<?= $category->id ?>"
                                        value="<?= $category->id ?>"><?= $category->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Brand</label>
                    <div>
                        <select class="form-select" style="width: 30vw" name="brand_id" id="brand_id" required>
                            <?php foreach ($brands as $brand) { ?>
                                <option style="width: 250px" class="text-uppercase" name="brand_<?= $brand->id ?>"
                                        value="<?= $brand->id ?>"><?= $brand->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <label class="form-group" for="name">Price</label>
                <input type="number" step="0.01" class="form-control" style="width: 30vw" id="price" name="price"
                       required>
                <label class="form-group" for="name">Description</label>
                <textarea type="text" class="form-control" rows="10" cols="30" style="width: 30vw" id="description"
                          name="description" required></textarea>
            </div>
            <div class="form-group row" id="drop-area" style="width: 32vw">
                <div class="container-fluid">
                    <div class="card border-dark text-center mb-3">
                        <div class="card-header bg-transparent border-dark">
                            <label for="title">Add Image:</label>
                        </div>
                        <div class="card-body text-dark">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="file" id="insert_image" multiple accept="image/*"
                                           name="image" onchange="readURL(this, 'file-image');">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 my-3" id="store_image">
                                    <div class="col-md-2" style="margin-bottom:16px;">
                                        <img id="file-image" src="#" alt="Preview" class="img-thumbnail hidden"
                                             width=200>
                                    </div>
                                    <p>Drop Picture Here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group form-check">
                <div>
                    <input type="checkbox" class="form-check-input" id="status" name="status">
                    <label class="form-check-label " for="status">Is Active?</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="new" name="new">
                    <label class="form-check-label" for="new">Is New?</label>
                </div>
                <div>
                    <input type="checkbox" class="form-check-input" id="recommended" name="recommended">
                    <label class="form-check-label" for="recommended">Is Recommended?</label>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>

        </form>
    </div>
</div>
</div>
<?php require_once VIEWS . '/admin/partials/_modal.php' ?>

