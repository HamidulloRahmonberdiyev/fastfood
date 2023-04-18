<?php

namespace app\controllers\admin;

use myshop\Cache;

class CacheController extends AppController {

    public function indexAction() {
        $this->setMeta('Keshni tozalash');
    }

    public function deleteAction() {
        $key = isset($_GET['key']) ? $_GET['key'] : null;
        $cache = Cache::instance();
        switch ($key) {
            case 'category':
                $cache->delete('cats');
                $cache->delete('myshop_menu');
                break;
        }
        $_SESSION['success'] = 'Kesh tozalandi';
        redirect();
    }

}