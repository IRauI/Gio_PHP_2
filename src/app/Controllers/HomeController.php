<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;
use PDOException;

class HomeController
{
    public function index() : View
    {
        try{
            $db = new PDO('pgsql:host=db;dbname=gio_php', 'postgres', 'postgres', [

            ]);

            $email = $_GET['email'];
            $query = 'SELECT * FROM users WHERE email = :email';

            $stmt = $db->prepare($query);
            $stmt->execute(
                ['email' => $email]
            );

            foreach($stmt->fetchAll() as $user){
                echo '<pre>';
                var_dump($user);
                echo '</pre>';
            }
        }catch(PDOException $e){
            throw new PDOException($e->getMessage(), (int) $e->getCode());
        }

        return View::make('index');
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