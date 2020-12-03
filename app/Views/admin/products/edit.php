<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/products" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="/admin/products/update">
                <input type="hidden" name="id" value="<?= $product->id ?>" required>
                <div class="form-group">
                    <label for="name">Product name</label>
                    <input type="text" style="width: 30vw" id="name" name="name" class="form-control"
                           value="<?= $product->name ?>" required>
                    <small id="nameHelp" class="form-text text-muted">Brand name required.</small>
                </div>
                <div class="form-group"><label for="category">Category</label>
                    <div>
                        <select class="form-select" style="width: 30vw" name="category_id" id="category_id" required>
                            <?php foreach ($categories as $category) { ?>
                                <option style="width: 250px" class="text-uppercase" name="category_<?= $category->id ?>"
                                        <?php if ($product->category_id == $category->id) { ?>selected <?php } ?>
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
                                <option style="width: 250px" class="text-uppercase" name="category_<?= $brand->id ?>"
                                        <?php if ($product->brand_id == $brand->id) { ?>selected <?php } ?>
                                        value="<?= $brand->id ?>"><?= $brand->name ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <label class="form-group" for="price">Price</label>
                <input type="number" step="0.01" class="form-control" style="width: 30vw" id="price" name="price"
                       value="<?= $product->price ?>" required>
                <label class="form-group" for="description">Description</label>
                <textarea type="text" class="form-control" rows="5" cols="30" style="width: 30vw" id="description"
                          name="description" required><?= $product->description ?></textarea>
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
                                            <img id="file-image" src="/assets/images/products/<?= $product->image ?>"
                                                 alt="Preview" class="img-thumbnail hidden"
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
                        <input type="checkbox" class="form-check-input" id="status"
                               name="status" <?php echo ($product->status == 1) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="status">Check if active</label>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" id="new"
                               name="new" <?php echo ($product->is_new == 1) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="new">Check if new</label>
                    </div>
                    <div>
                        <input type="checkbox" class="form-check-input" id="recommended"
                               name="recommended" <?php echo ($product->is_recommended == 1) ? 'checked' : '' ?>>
                        <label class="form-check-label" for="recommended">Check if recommended</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once VIEWS . '/admin/partials/_modal.php' ?>

