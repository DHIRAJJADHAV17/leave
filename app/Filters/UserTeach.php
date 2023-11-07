<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class UserTeach implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
      
        if (!session()->get('isLoggedIn') &&  !session()->get('isLoggInteach')){
            return  redirect()->back();
        }
       
        
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
