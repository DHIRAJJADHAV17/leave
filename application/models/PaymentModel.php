<?php

 


namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table      = 'payment';
    protected $primaryKey =  'pt_id' ;
    protected $allowedFields = [
        'pt_id' ,
    'id' ,
    'trans_id',
    'mode',
    'amount',
    'start_date',
    'end_date',
    'img',
    'created_at',
    'updated_at'];
    protected $beforeInsert   = ['beforeInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];
    // Dates
    

    protected function beforeInsert(array $data){
       
        $data['data']['created_at'] = date('y-m-d H:i:s');
        return $data;
    }

    protected function beforeUpdate(array $data){
        
        $data['data']['updated_at'] = date('y-m-d H:i:s');
        return $data;
    }

}
