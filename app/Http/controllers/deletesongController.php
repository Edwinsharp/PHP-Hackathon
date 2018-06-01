<?php 

namespace app\Http\controllers;

use \polakjan\mvc\db;
use app\Song;


class DeletesongController
{
    public function index()
    {
        $query = "DELETE 
        FROM `songs`
        WHERE `id` = ? ;
        ";
     $songs = db:: query($query, [$_GET['id']]);
     
            // set the content
            //$content = 'selectsong.php';
            header('Location: ?page=selectsong');

            // when we are ready with setup, include the wrapper
           // include __DIR__ . '/../../../resources/views/html-wrapper.php'; 
    }
}