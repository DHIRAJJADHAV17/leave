<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
      
        if ( !session()->get('isLoggedIn') && !session()->get('isadminLoggIn') ){
            return  redirect()->back();
        }
       
        
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
