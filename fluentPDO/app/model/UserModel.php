<?php
namespace App\Model;

use App\Lib\Database;

class UserModel{

    private $db = null;

    public function __construct()
    {
        $temp = new Database();
        $this->db = $temp::StartUp();
    }

    public function obtener($id)
    {
        return $this->db->from('composer', $id)->fetch();
    }

    public function listar()
    {
        return $this->db->from('composer')->fetchAll();
    }

    public function registrar($data)
    {
        return $this->db->insertInto('composer', $data)->execute();
    }

    public function update($data, $id)
    {
        return $this->db->upDate('composer', $data, $id)->execute();
    }

    public function eliminar($id)
    {
        return $this->db->deleteFrom('composer', $id)->execute();
    }
}
