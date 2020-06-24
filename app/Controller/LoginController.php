<?php

App::uses('AppController', 'Controller');

class LoginController extends AppController
{
    public $uses = array('MUser');

    public function login()
    {
    }

    public function result()
    {
        //
//         $data = $this->MUser->getData();
//         $this->set('data', $data);
//         var_dump($data);

        //フォームに入力された値を取得
        $id = $this->request->data('login.ID');
        $pass = $this->request->data('login.PASS');
        $this->set('id', $id);
        $this->set('pass', $pass);

        //MUerにフォームの値をset
         $this->MUser->set($this->request->data('login'));

        //バリデーションチェック
        if ($this->MUser->validates()) {
            $this->set('msg', 'OK');
        } else {
            $this->set('msg', $this->MUser->validationErrors);
            var_dump($this->MUser->validationErrors);
            return $this->render('login');
        }

        $MUser = $this->MUser->find('all');
        $this->set('MUser',$MUser);
        //var_dump($MUser);

    }
}
