<?php

 


namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table      = 'admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'phone', 'active','creat_at','updated_at'];
    protected $beforeInsert   = ['beforeInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];
    // Dates
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
       
        }

        return $data;
    }

    protected function beforeInsert(array $data){
        $data = $this->hashPassword($data);
        $data['data']['creat_at'] = date('y-m-d H:i:s');
        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->hashPassword($data);
        $data['data']['updated_at'] = date('y-m-d H:i:s');
        return $data;
    }
}

