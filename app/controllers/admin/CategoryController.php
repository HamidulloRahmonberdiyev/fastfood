<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\Category;
use myshop\App;

class CategoryController extends AppController {

    public function indexAction() {
        $this->setMeta('Kategoriyalar');
    }

    public function addImageAction() {
        if (isset($_GET['upload'])) {
            if ($_POST['name'] == 'photo') {
                $wmax = App::$app->getProperty('img_width');
                $hmax = App::$app->getProperty('img_height');
            }
            $name = $_POST['name'];
            $delivery = new Category();
            $delivery->uploadImg($name, $wmax, $hmax);
        }
    }

    public function deleteAction() {
        $id = $this->getRequestID();
        $children = \R::count('category', 'parent_id = ?', [$id]);
        $errors = '';
        if ($children) {
            $errors .= '<li>Oʻchirish mumkin emas, turkumda ichki o\'rnatilgan kategoriya!</li>';
        }
        $products = \R::count('product', 'category_id = ?', [$id]);
        if ($products) {
            $errors .= '<li>Oʻchirish mumkin emas, kategoriyada mahsulotlar bor!</li>';
        }
        if ($errors) {
            $_SESSION['error'] = "<ul>$errors</ul>";
            redirect();
        }
        $category = \R::load('category', $id);
        \R::trash($category);
        $src = $category['img'];
        $file = WWW . "/img/$src";
        if(file_exists($file)){
           unlink($file);
        }
        $_SESSION['success'] = 'Kategoriya o\'chirildi';
        redirect();
    }


    public function editAction() {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            $category->getImg();
            if (!$category->validate($data)) {
                $category->getErrors();
                redirect();
            }
            if ($category->update('category', $id)) {
                $alias = AppModel::createAlias('category', 'alias', $data['title'], $id);
                $category = \R::load('category', $id);
                $category->alias = $alias;
                \R::store($category);
                $_SESSION['success'] = 'O\'zgarishlar saqlandi';
            }
            redirect();
        }
        $id =  $this->getRequestID();
        $category = \R::load('category', $id);
        App::$app->setProperty('parent_id', $category->parent_id);
        $this->setMeta("Tahrirlash {$category->title}");
        $this->set(compact('category'));
    }

    public function addAction() {
        if (!empty($_POST)) {
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            $category->getImg();
            if (!$category->validate($data)) {
                $category->getErrors();
                redirect();
            }
            if ($id = $category->save('category')) {
                $alias = AppModel::createAlias('category', 'alias', $data['title'], $id);
                $cat = \R::load('category', $id);
                $cat->alias = $alias;
                \R::store($cat);
                $_SESSION['success'] = 'Kategoriya qo\'shildi';
            }
            redirect();
        }
        $this->setMeta('Yangi kategoriya');
    }

}