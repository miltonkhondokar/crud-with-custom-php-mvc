<?php

namespace App\Controllers;

use App\Base\Controller;
use App\Models\Sale;
use PDO;

class SalesTrackerController extends Controller
{


    private $sales_model;

    public function __construct()
    {
        $this->sales_model = new Sale();
    }

    public function index(): void
    {
        $data = $this->sales_model->getRecords();
        views('dashboard', ['data' => $data]);
    }

    public function create_form(): void
    {
        views('create_sales');
    }

    public function create_sales(): void
    {
        date_default_timezone_set('Asia/Dhaka');


        if(!isset($_COOKIE["form_submit_status"]))
        {

            setcookie('form_submit_status', 1, time() + (60 * 2));

            $salt = 'U7Dnb0dx2F18ANz3q4Ou5lfSpyVXjLirhMQ6ZKEatwe9vIgGcmoWHsYRCkBJPT';


            $entry_by = preg_replace('/[^0-9]/u','', strip_tags($_POST['entry_by']));
            $buyer = preg_replace('/[^a-zA-Z0-9 ]/u','', strip_tags($_POST['buyer']));
            $phone = preg_replace('/[^0-9]/u','', strip_tags($_POST['phone']));
            $buyer_email = preg_replace('/[^A-Za-z0-9 ().@#,:]/u','', strip_tags($_POST['buyer_email']));
            $city = preg_replace('/[^a-zA-Z ]/u','', strip_tags($_POST['city']));
            $receipt_id = preg_replace('/[^A-Za-z\s]/u','', strip_tags($_POST['receipt_id']));
            $amount = preg_replace('/[^0-9]/u','', strip_tags($_POST['amount']));
            $note = preg_replace('/[^A-Za-z0-9 ().@#,:-]/u','', strip_tags($_POST['note']));

            $data = array(
                'entry_by' => $entry_by,
                'buyer' => $buyer,
                'phone' => '880'.$phone,
                'buyer_email' => $buyer_email,
                'city' => $city,
                'receipt_id' => $receipt_id,
                'amount' => $amount,
                'note' => $note,
                'items' => implode(", ", array_values($_POST['items'])),
                'hash_key' => hash ( "sha512", $salt.$receipt_id),
                'entry_at' => date("Y-m-d"),
            );

            $insert_data = $this->sales_model->insertRecord($data);
            echo 'y';
        }else{
            echo "n";
        }
    }

}