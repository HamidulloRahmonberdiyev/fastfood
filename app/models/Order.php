<?php

namespace app\models;

class Order extends AppModel {

    public static function saveOrder($data) {
        $order = \R::dispense('order');
        $order->user_id = $data['user_id'];
        $order->currency = $_SESSION['cart.currency']['code'];
        $order_id = \R::store($order);
        self::saveOrderProduct($order_id);
        return $order_id; 
    }

    public static function saveOrderProduct($order_id) {
        $sql_part = '';
        foreach ($_SESSION['cart'] as $product_id => $product) {
            $product_id = (int)$product_id;
            $sql_part .= "($order_id, $product_id, '{$product['title']}', {$product['price']}),";
        }
        $sql_part = rtrim($sql_part, ',');
        \R::exec("INSERT INTO order_product (order_id, product_id, title, price) VALUES $sql_part");
    }

}