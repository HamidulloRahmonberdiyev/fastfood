<?php

namespace app\controllers\admin;
use myshop\libs\Pagination;

class OrderController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $count = \R::count('order');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $orders = \R::getAll("SELECT `order`.`id`, `order`.`user_id`, `order`.`status`, `order`.`date`, `order`.`update_at`, `order`.`currency`, `orderuser`.`name`, `orderuser`.`phone`, ROUND(SUM(`order_product`.`price`), 2) AS `sum`, MIN(`order_product`.`title`) AS `title` FROM `order` JOIN `orderuser` ON `order`.`user_id` = `orderuser`.`id` JOIN `order_product` ON `order`.`id` = `order_product`.`order_id` GROUP BY `order`.`id` ORDER BY `order`.`status`, `order`.`id` LIMIT $start, $perpage");
        $this->setMeta('Buyurtmalar ro\'yhati');
        $this->set(compact('orders', 'pagination', 'count'));
        
    }

    public function viewAction() {
        $order_id = $this->getRequestID();
        $order = \R::getRow("SELECT `order`.*, `orderuser`.`name`, `orderuser`.`phone`, ROUND(SUM(`order_product`.`price`), 2) AS `sum` FROM `order` JOIN `orderuser` ON `order`.`user_id` = `orderuser`.`id` JOIN `order_product` ON `order`.`id` = `order_product`.`order_id` WHERE `order`.`id` = ? GROUP BY `order`.`id` ORDER BY `order`.`status`, `order`.`id` LIMIT 1", [$order_id]);
        if (!$order) {
            throw new \Exception("Sahifa topilmadi", 404);        
        }
        $order_products = \R::findAll('order_product', "order_id = ?", [$order_id]);
        $this->setMeta("Buyurtma №{$order_id}");
        $this->set(compact('order', 'order_products'));
    }

    public function changeAction() {
        $order_id = $this->getRequestID();
        $status = !empty($_GET['status']) ? '1' : '0';
        $order = \R::load('order', $order_id);
        if (!$order) {
            throw new \Exception("Sahifa topilmadi", 404);        
        }
        $order->status = $status;
        $order->update_at = date("Y-m-d H:i:s");
        \R::store($order);
        $_SESSION['success'] = 'O\'zgarishlar saqlandi';
        redirect();
    }

    public function deleteAction() {
        $order_id = $this->getRequestID();
        // $user_id = $this->getRequestID();
        $order = \R::load('order', $order_id);
        $user = \R::load('orderuser', $order_id);
        \R::trash($user);
        \R::trash($order);
        // \R::trash($user);
        $_SESSION['success'] = 'Buyurtma o\'chirildi';
        redirect(ADMIN . '/order');
    }

}