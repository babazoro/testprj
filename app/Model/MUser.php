<?php
//DBのテーブル名とモデルのクラス名を合わせる

class MUser extends AppModel
{
    //DBのm_userテーブルを使うことを指定
    var $useTable = 'm_user';

    //バリデートを指定
    public $validate = array (
        'ID' => array (
            'rule' => array('email'),
            'required' => true,
            'message' => 'メールアドレスを入力してください'
        ),
        'PASS' => array (
            'rule' => 'alphaNumeric',
            'required' => true,
            'message' => '必須入力の項目です'
        )
    );

//     public function getData(){
//         $sql = "SELECT * FROM m_user";
//         $data = $this->query($sql);
//         return $data;
//     }
}

