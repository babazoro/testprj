<?php

App::uses('AppController', 'Controller');

class MainController extends AppController
{
    public $uses = array('TSyain');

    public function main()
    {
    }

    public  function search()
    {
        $this->autoRender = FALSE;
        if($this->request->is('ajax')) {
            //フォームの値を取得
            $data = $this->request->data('search');
            $word = $data['name'];

            //フォームが未入力の場合
            if($word == '') {
                echo '0';
            } else {
//             TSyainにフォームの値をset
                $this->TSyain->set($this->request->data('search'));
                $result = $this->TSyain->find('all', array(
                    'conditions' => array(
                        'TSyain.NAME LIKE ' => '%'.$word.'%'
                    ),
                ));
                if($result == null) {
                    return '1';
                } else {
                    // JSONに変換(エンコード)する
                    $json = json_encode($result, JSON_PRETTY_PRINT);
                    $this->set('json',$json);
                    return $json;
                }
            }
        }
    }

    public  function test()
    {
        $this->autoRender = FALSE;

        if ($this->request->is('ajax')) {
            echo 'ajaxテスト成功';
        }
    }
}

