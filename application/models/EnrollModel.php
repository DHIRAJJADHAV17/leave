<?php

namespace App\Models;

use CodeIgniter\Model;

class EnrollModel extends Model
{
    protected $table      = 'enroll';
    protected $primaryKey =  'er_id' ;
    protected $allowedFields = ['er_id',
    'co_id',
    'id' ,
    'trans_id',
    'mode',
    'amount', 
    'duration', 
    'startdate',
    'validtill',
    'renewdate',
    'status',
    'img',  
    'created_a',
    'updated_at'];
    protected $beforeInsert   = ['beforeInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];
    // Dates
    

    protected function beforeInsert(array $data){
       
        $data['data']['created_a'] = date('y-m-d ');
        return $data;
    }

    protected function beforeUpdate(array $data){
        
        $data['data']['updated_at'] = date('y-m-d ');
        return $data;
    }
}