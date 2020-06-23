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

        //$data = $this->m_user->find('all');
        $data = $this->MUser->getData();
        $this->set('data', $data);
        var_dump($data);

        $id = $this->request->data('login.ID');
        $pass = $this->request->data('login.PASS');

        $this->set('id', $id);
        $this->set('pass', $pass);

    }


}
