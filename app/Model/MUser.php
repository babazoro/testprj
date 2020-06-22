<?php
//DBのテーブル名とモデルのクラス名を合わせる

class MUser extends AppModel
{
    var $useTable = 'm_user';

    public function getData(){
        $sql = "SELECT * FROM m_user";
//         $params = array(
//             'id'=> $id
//         );
        $data = $this->query($sql);
        return $data;
    }
}

