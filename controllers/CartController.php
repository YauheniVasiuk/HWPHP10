<?php

//require_once ROOT.'/models/Cart.php';

class CartController 
{
    
    public function actionAdd($id) {

        Cart::addProduct($id);

        $refferer = $_SERVER['HTTP_REFERER'];
        header("Location: $refferer");
    }

    public function actionIndex() {

        $countItems = Cart::countItems();

        $productsInCart = false;
        
        $productsInCart = Cart::getProducts();

        if($productsInCart) {
            
            $productsIds = array_keys($productsInCart);
            $products = Cart::getProductsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);

        }

        require_once ROOT . '/views/cart.php';

        return true;
    }

}