<?php require_once 'BaseController.php';
    class ShoppingCart extends BaseController{
        function shoppingCart(){
            $this->callView('shoppingcart');
        }
    }
?>