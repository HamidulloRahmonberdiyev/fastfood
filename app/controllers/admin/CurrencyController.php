<?php

namespace app\controllers\admin;

use app\models\admin\Currency;

class CurrencyController extends AppController {

    public function indexAction() {
        $currencies = \R::findAll('currency');
        $this->setMeta('Valyutalar');
        $this->set(compact('currencies'));
    }

    public function deleteAction() {
        $id = $this->getRequestID();
        $currency = \R::load('currency', $id);
        \R::trash($currency);
        $_SESSION['success'] = 'Valyuta o\'chirildi';
        redirect(); 
    }


    public function editAction() {
        if (!empty($_POST)) {
            $id = $this->getRequestID(false);
            $currency = new Currency();
            $data = $_POST;
            $currency->load($data);
            $currency->attributes['base'] = $currency->attributes['base'] ? '1' : '0';
            if (!$currency->validate($data)) {
                $currency->getErrors();
                redirect();
            }
            if ($currency->update('currency', $id)) {
                $_SESSION['success'] = 'O\'zgarishlar saqlandi';
                redirect();   
            }
        }

        $id = $this->getRequestID();
        $currency = \R::load('currency', $id);
        $this->setMeta("Tahrirlash {$currency->title}");
        $this->set(compact('currency'));

    }

    public function addAction() {
        if (!empty($_POST)) {
            $currency = new Currency();
            $data = $_POST;
            $currency->load($data);
            $currency->attributes['base'] = $currency->attributes['base'] ? '1' : '0';
            if (!$currency->validate($data)) {
                $currency->getErrors();
                redirect();
            }
            if ($currency->save('currency')) {
                $_SESSION['success'] = 'Valyuta qo\'shildi';
                redirect();   
            }
            $this->setMeta('Yangi valyuta');
        }
    }

}