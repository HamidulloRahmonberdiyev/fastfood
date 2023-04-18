<?php

namespace app\controllers;

class DeliveryController extends AppController {
    
    public function indexAction() {
        $delivery = \R::find('delivery', "status = '1' LIMIT 12");
        $this->setMeta('Yetkazib berish');
        $this->set(compact('delivery'));
    }

    public function viewAction() {
        $alias = $this->route['alias'];
        $delivery = \R::findAll('delivery', "alias = ? AND status = '1'", [$alias]);
        if (!$delivery) {
            throw new \Exception("Sahifa topilmadi!", 404);
        }
        $this->setMeta('Habar haqida');
        $this->set(compact('delivery'));
    }
}