<?php
require_once COMMON . '/Controller.php';
require_once MODELS . '/Product.php';
require_once MODELS . '/Category.php';
require_once MODELS . '/Brand.php';


class HomeController extends Controller
{
    public function index()
    {
        $this->view->render('/home/index', ['title' => 'Homepage']);
    }

    public function getProducts()
    {
        $products = (new Product())->all();
        echo json_encode($products);

    }

    public function getProduct($vars)
    {
        extract($vars);
        $product = (new Product)->getByPK($id);
        echo json_encode($product);
    }

    public function getCategories()
    {
        $categories = (new Category())->all();
        echo json_encode($categories);

    }

    public function getBrands()
    {
        $brands = (new Brand())->all();
        echo json_encode($brands);

    }

    public function getCategoriesWithCount()
    {
        $sql = "SELECT COUNT(*) count_product, category_id, categories.* FROM products 
        INNER JOIN categories
        ON categories.id = products.category_id
        WHERE categories.status =1 GROUP BY category_id";
        $categories = (new Category)->getWithSql($sql);
        echo json_encode($categories);
    }

}