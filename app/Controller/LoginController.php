<?php

App::uses('AppController', 'Controller');

class LoginController extends AppController
{
    public $uses = array('MUser');

    public function login()
    {
        //postでアクセスされたらバリデーション処理
        if($this->request->is('post')) {
            //フォームに入力された値を取得
            $data = $this->request->data('login');
            $this->set('data', $data);
            //MUerにフォームの値をset
            $this->MUser->set($this->request->data('login'));

            //バリデーションチェック
                //バリデーションを満たしていればresultへ
                if ($this->MUser->validates()) {
                    $this->redirect('result');
                } else {
                    //満たしてなければエラーメッセージを表示
                    $msg = $this->MUser->validationErrors;
                    if(isset($msg['ID'])) {
                        $idmsg = $msg['ID'];
                        $this->set('idmsg', $idmsg);
                    }
                    if(isset($msg['PASS'])) {
                        $passmsg = $msg['PASS'];
                        $this->set('passmsg', $passmsg);
                    }
                }
        }
    }

    public function result()
    {
        $MUser = $this->MUser->find('all', array(
            'conditions' => array('LOGIN_ID' => 'test')
        ));
        $this->set('MUser',$MUser);
        //var_dump($MUser);

        $this->set('msg', 'OK');
    }
}
