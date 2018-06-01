<?php 

namespace app\Http\controllers;

use \polakjan\mvc\db;
use app\Song;

class selectsongcontroller
{
    public function index()
    {
        $query = "SELECT *
        FROM `songs`
        ";
     $songs = Song:: select($query);
     
            // set the content
            $content = 'selectsong.php';


            // when we are ready with setup, include the wrapper
            include __DIR__ . '/../../../resources/views/html-wrapper.php'; 
    }
}