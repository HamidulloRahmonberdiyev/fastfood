<?php

namespace app\controllers;

use app\models\Order;
use app\models\User;
use app\models\OrderUser;
use app\models\Cart;

class CartController extends AppController {

    public function addAction() {
        $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
        $qty = !empty($_GET['qty']) ? (int)$_GET['qty'] : null;
        if ($id) {
            $product = \R::findOne('product', 'id = ?', [$id]);
            if (!$product) {
                return false;
            }
        }
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        $this->loadView('cart_modal');
        if ($this->isAjax()) {
            $this->loadView('cart_modal');
        }
        redirect();
       
    }

    public function showAction() {
        $this->loadView('cart_modal');
    }

    public function deleteAction() {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if (isset($_SESSION['cart'][$id])) {
            $cart = new Cart();
            $cart->deleteItem($id);
        }
        if ($this->isAjax()) {
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function clearAction() {
        unset($_SESSION['cart']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart.currency']);
        $this->loadView('cart_modal');
    }

    public function viewAction() {
        $this->setMeta('Buyurtma berish');
    }

    public function createAction() {
        if (!empty($_POST)) {
                $user = new OrderUser();
                $data = $_POST;
                $user->load($data);
                if (!$user->validate($data)) {
                    $user->getErrors();
                    $_SESSION['form_data'] = $data;
                    redirect();
                }else{
                    if (!$user_id = $user->save('orderuser')) {
                        redirect();
                    }
                }

                // Buyurtmani saqlash
                $data['user_id'] = isset($user_id) ? $user_id : $_SESSION['orderuser']['id']; 
                $order_id = Order::saveOrder($data);
                $_SESSION['success'] = 'Buyurtmangiz uchun rahmat. Tez orada operator buyurtmani muvofiqlashtirish uchun siz bilan bog\'lanadi.';

            }
            redirect();
    }

}
