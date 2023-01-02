<?php

namespace App\Controllers;

use App\Base\Controller;

class SalesTrackerController extends Controller
{

//    $salt = 'U7Dnb0dx2F18ANz3q4Ou5lfSpyVXjLirhMQ6ZKEatwe9vIgGcmoWHsYRCkBJPT';
    public function index()
    {
        views('dashboard');
    }

    public function create()
    {
        views('create_sales');
    }

}