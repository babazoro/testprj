<?php

App::uses('AppController', 'Controller');

class MainController extends AppController
{
    public function main()
    {
    }

    public  function test()
    {
        $this->autoRender = FALSE;
        if ($this->request->is('ajax')) {
            echo 'ajaxテスト成功';
        }

    }
}

