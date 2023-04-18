<?php

namespace app\controllers;

use app\models\User;

class UserController extends AppController {

    public function signupAction() {
         if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data) || !$user->checkUnique()) {
                 $user->getErrors();
                 $_SESSION['form_data'] = $data;
            }else{
               $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
               if ($user->save('user')) {
                    $_SESSION['success'] = 'Foydalanuvchi qo\'shildi';
               }else {
                    $_SESSION['error'] = 'Xatolik!';
               }
          }
          redirect();   
     }
     $this->setMeta('Ro\'yxatdan o\'tish');
}

    public function loginAction() {
          if (!empty($_POST)) {
               $user = new User();
               if ($user->login()) {
                    $_SESSION['success'] = 'Siz tizimga muvaffaqiyatli kiritildingiz!';
               }else {
                    $_SESSION['error'] = 'Login yoki parol noto\'g\'ri';
               }
               redirect();
          }
          $this->setMeta('Kirish');
    }

    public function logoutAction() {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect();
    }

    

}