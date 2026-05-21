<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\User;
use App\Models\UserInvoice;
use App\View;

class HomeController
{
    public function index() : View
    {
        $email = 'alex@doe.com';
        $name = 'Alex Doe';
        $amount = 25;
        
        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new UserInvoice($userModel, $invoiceModel))->register(
            [
                'email' => $email,
                'name' => $name
            ],
            [
                'amount' => $amount
            ]
        );

        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }

    public function download()
    {
        header('Content-Type: application/pdf');
        header('Content-Disposition: atttachment;filename="myfile.pdf"');

        readfile(STORAGE_PATH . '/receipt 6-20-2021.pdf');
    }

    public function upload()
    {
        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file($_FILES['receipt']['tmp_name'], $filePath);

        header('Location: /');
        exit;
    }
}