<?php
namespace App\Model;

use App\Lib\Database;

class UserModel2{

    private $db = null;

    public function __construct()
    {
        $temp = new Database();
        $this->db = $temp::StartUp();
    }

    public function prueba()
    {
        /*
        return $this->db->from('items')
                        ->leftJoin('user ON user.id = items.user_id')
                        ->select('user.first_name', 'user.last_name')
                        ->fetchAll();

        */
        return $this->db->from('items')->select('user.*')->getQuery();
    }
}
