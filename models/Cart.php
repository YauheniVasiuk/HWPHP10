<?php

require_once ROOT . '/models/Product.php';

class Cart
{

    public static function addProduct($id)
    {

        $id = intval($id);

        $productsInCart = array();

        if ($_SESSION['products']) {
            $productsInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

    }

    public static function countItems()
    {

        $productsInCart = $_SESSION['products'];

        if (!empty($productsInCart)) {
            $count = 0;

            foreach ($productsInCart as $index => $quantity) {
                $count = $count + $quantity;
            }

            return $count;
        } else {
            return 0;
        }
    }

    public static function getProducts()
    {

        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }

        return false;
    }

    public static function getProductsByIds($ids)
    {

        $allProducts = Product::getApiLatetstProducts();

        $products = array();

        foreach ($allProducts as $product) {

            foreach ($ids as $id) {

                if ($id == $product['id']) {
                    $products[] = $allProducts[$id];
                }
            }
        }

        return $products;
    }

    public static function getTotalPrice($products)
    {

        $productsInCart = self::getProducts();

        if (isset($productsInCart)) {

            $totalPrice = 0;

            foreach ($products as $item) {
                $totalPrice += $item['price'] * $productsInCart[$item['id']-1];
            }

            return $totalPrice;
        } else {
            return 0;
        }
    }
}
