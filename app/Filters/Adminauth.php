<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Adminauth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
      
      
       if( !session()->get('isadminLoggIn')){
            return  redirect()->to('adminlogin')->with('fail', 'You must be logged in for accessing dashboard.');
        }
        
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
