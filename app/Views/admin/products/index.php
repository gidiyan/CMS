<div class="col">
    <div class="card">
        <div class="card-header text-center">
            <strong class="card-title"> <span data-feather="file-text"></span><?php echo $title; ?></strong><a
                    href="/admin/products/create" class="btn btn-primary text-center float-right"><span
                        data-feather="plus"></span> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php if (!empty($products) && count($products) > 0): ?>

                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Brand</th>
                            <th scope="col" class="text-center">Category</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Is New</th>
                            <th scope="col" class="text-center">Is Recommended</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $product->id ?></th>
                                <td class="text-center"><?= $product->name ?></td>
                                <td class="text-center"><?php if ($product->brand_id > 0) {
                                        foreach ($brands as $brand) {
                                            if ($product->brand_id == $brand->id) {
                                                echo $brand->name;
                                            }
                                        }
                                    } else {
                                        echo "Brand was not set";
                                    } ?></td>
                                <td class="text-center"><?php if ($product->category_id > 0) {
                                        foreach ($categories as $category) {
                                            if ($product->category_id == $category->id) {
                                                echo $category->name;
                                            }
                                        }
                                    } else {
                                        echo "Category was not set";
                                    } ?></td>
                                <td class="text-center"><?= $product->status !== 0 ? 'active' : 'not active' ?></td>
                                <td class="text-center"><?= $product->is_new !== 0 ? 'yes' : 'no' ?></td>
                                <td class="text-center"><?= $product->is_recommended !== 0 ? 'yes' : 'no' ?></td>
                                <td class="text-center"><a href="/admin/products/show/<?= $product->id ?>"
                                                           class="btn btn-default"><span data-feather="eye"></span>View</a>
                                    <a href="/admin/products/edit/<?= $product->id ?>" class="btn btn-primary"><span
                                                data-feather="edit"></span>Edit</a>
                                    <a href="/admin/products/delete/<?= $product->id ?>" class="btn btn-danger"><span
                                                data-feather="delete"></span>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: echo "<h2>No products yet</h2>" ?>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>


