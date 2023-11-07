<?php

 


namespace App\Models;

use CodeIgniter\Model;

class NoticeModel extends Model
{
    protected $table      = 'notice';
    protected $primaryKey =  'id' ;
    protected $allowedFields = [
        'title' ,
        'notice' ,
    'id' ,
    'created_at',
    'updated_at'];
    protected $beforeInsert   = ['beforeInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];
    // Dates
    

    protected function beforeInsert(array $data){
       
        $data['data']['created_at'] = date('y-m-d ');
        return $data;
    }

    protected function beforeUpdate(array $data){
        
        $data['data']['updated_at'] = date('y-m-d');
        return $data;
    }

}
