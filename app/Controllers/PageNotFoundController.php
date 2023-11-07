<?php
namespace App\Controllers;

class PageNotFoundController extends BaseController
{
    public function index()
    {
        // Load a view to display a custom 404 error page
        return view('errors/html/error_404');
    }
}