<div class="col">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/products" class="btn btn-info text-center float-right"><span
                        data-feather="arrow-left-circle"></span>Go Back</a>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="name">Product name</label>
                <input type="text" style="width: 30vw" class="form-control" value="<?= $product->name ?>" disabled>
                <small id="nameHelp" class="form-text text-muted">Brand name required.</small>
            </div>
            <div class="form-group"><label for="name">Category</label>
                <div>
                    <input class="form-select" style="width: 30vw" name="category_id" id="category_id" <?php
                    if ($product->category_id > 0) {
                    foreach ($categories

                    as $category) {
                    if ($product->category_id == $category->id){
                    ?>value="<?= $category->name ?>" <?php };
                    }
                    } else ?> value="Category was not set" disabled>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Brand</label>
                <div>
                    <input class="form-select" style="width: 30vw" name="category_id" id="category_id" <?php
                    if ($product->brand_id > 0) {
                    foreach ($brands as $brand) {
                    if ($product->brand_id == $brand->id) {
                    ?>value="<?= $brand->name ?>" <?php };
                    }
                    } else ?> value="Brand was not set" disabled>
                </div>
            </div>
            <label class="form-group" for="name">Price</label>
            <input type="number" step="0.01" class="form-control" style="width: 30vw" id="price" name="price"
                   value="<?= $product->price ?>" disabled>
            <label class="form-group" for="name">Description</label>
            <textarea type="text" class="form-control" rows="10" cols="30" style="width: 30vw" id="description"
                      name="description" disabled><?= $product->description ?></textarea>
            <img id="file-image" src="/assets/images/products/<?= $product->image ?>" alt="Preview"
                 class="img-thumbnail"
                 width=200>
        </div>
        <div class="form-group form-check">
            <div>
                <label for="new">Is New:</label>
                <input type="text" name="new" value="<?php echo $product->is_new ? 'Yes' : 'No' ?>" disabled>
            </div>
            <div>
                <label for="recommended">Is Recommended:</label>
                <input type="text" name="recommended" value="<?php echo $product->is_recommended ? 'Yes' : 'No' ?>"
                       disabled>
            </div>
            <div class="form-check-label">
                <label for="status">Status:</label>
                <input type="text" name="status" value="<?php echo $product->status ? 'Active' : 'Not Active' ?>"
                       disabled>
            </div>
        </div>
    </div>


