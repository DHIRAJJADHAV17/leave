<?php

namespace App\Models;

use CodeIgniter\Model;

class WasteModel extends Model
{
    protected $table      = 'waste';
    protected $primaryKey =  'wid' ;
    protected $allowedFields = ['wid',
    'id',
    
    'department' ,
    'days',
    'from',
    'reason',
    'status'];
  
  
}