<?php

 


namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table      = 'courses';
    protected $primaryKey =  'co_id' ;
    protected $allowedFields = [
        'co_id' ,
    'course' ,
    'price' ,
    'email',
    'teacher',
    'created_at',
    'update_at'];
    protected $beforeInsert   = ['beforeInsert'];
    protected $beforeUpdate   = ['beforeUpdate'];
    // Dates
    

    protected function beforeInsert(array $data){
       
        $data['data']['created_at'] = date('y-m-d H:i:s');
        return $data;
    }

    protected function beforeUpdate(array $data){
        
        $data['data']['update_at'] = date('y-m-d H:i:s');
        return $data;
    }


    function getAll(){
        $build=$this->db->table('courses');
            $build->join('enroll','enroll.co_id=courses.co_id');
            $query = $build->get();
            return $query;
    }
}
