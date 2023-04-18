<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\admin\Delivery;
use myshop\libs\Pagination;
use myshop\App;

class DeliveryController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 5;
        $count = \R::count('delivery');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $deliveries = \R::getAll("SELECT delivery.*  FROM delivery ORDER BY delivery.title LIMIT $start, $perpage");
        $this->setMeta('Habarlar ro\'yhati');
        $this->set(compact('deliveries', 'pagination', 'count'));
    }

    public function deleteAction() {
        $id = $this->getRequestID();
        $delivery = \R::load('delivery', $id);
        \R::trash($delivery);
        $src = $delivery['img'];
        $file = WWW . "/img/$src";
        if(file_exists($file)){
           unlink($file);
        }
        $_SESSION['success'] = 'Mahsulot o\'chirildi!';
        redirect();  
    }

    public function addImageAction() {
        if (isset($_GET['upload'])) {
            if ($_POST['name'] == 'photo') {
                $wmax = App::$app->getProperty('img_width');
                $hmax = App::$app->getProperty('img_height');
            }
            $name = $_POST['name'];
            $delivery = new Delivery();
            $delivery->uploadImg($name, $wmax, $hmax);
        }
    }

    public function editAction() {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $delivery = new Delivery();
            $data = $_POST;
            $delivery->load($data);
            $delivery->getImg();
            if (!$delivery->validate($data)) {
                $delivery->getErrors();
                redirect();
            }

            if ($delivery->update('delivery', $id)) {
                $alias = AppModel::createAlias('delivery', 'alias', $data['title'], $id);
                $delivery = \R::load('delivery', $id);
                $delivery->alias = $alias;
                \R::store($delivery);
                $_SESSION['success'] = "O'zgarishlar saqlandi";
                redirect();
            }
        }
        $id = $this->getRequestID();
        $delivery = \R::load('delivery', $id);
        $this->setMeta("Tahrirlash ($delivery->title)");
        $this->set(compact('delivery'));
    }

    public function addAction() {
        if (!empty($_POST)) {
            $delivery = new Delivery();
            $data = $_POST;
            $delivery->load($data);
            $delivery->getImg();
            if (!$delivery->validate($data)) {
                $delivery->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if ($id = $delivery->save('delivery')) {
                $alias = AppModel::createAlias('delivery', 'alias', $data['title'], $id);
                $delivery = \R::load('delivery', $id);
                $delivery->alias = $alias;
                \R::store($delivery);
                $_SESSION['success'] = "Habar qo\'shildi";
            }
            redirect();
        }
    

        $this->setMeta('Yangi habar');
    }


}
