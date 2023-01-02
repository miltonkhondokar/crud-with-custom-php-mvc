<?php

namespace App\Controllers;

use App\Base\Controller;
use App\Models\Sale;
use PDO;

class SalesTrackerController extends Controller
{

//    $salt = 'U7Dnb0dx2F18ANz3q4Ou5lfSpyVXjLirhMQ6ZKEatwe9vIgGcmoWHsYRCkBJPT';
    public function index(): void
    {
        $salesData = new Sale();
        $data = $salesData->getRecords();
        views('dashboard', ['data' => $data]);
    }

    public function create_form(): void
    {
        views('create_sales');
    }

    public function create_sales(): void
    {
        if(!isset($_COOKIE["form_submit_status"]))
        {
            setcookie('form_submit_status', 1, time() + (60 * 2));
//            echo "<pre>";
            print_r($_POST);
//            echo "</pre>";
//            echo "Cookie set";
//            exit;
        }else{
            echo "Cookie Exists";
//            exit;
        }



    }

}