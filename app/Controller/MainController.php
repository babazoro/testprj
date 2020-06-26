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
            $data = $this->request->data('search');
            $this->set('data', $data);

//             $TSyain = $this->TSyain->find('all', array(
//                 'conditions' => array('NAME' => $data)
//             ));
//             var_dump($TSyain);
            var_dump($this->request->data('search'));
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

