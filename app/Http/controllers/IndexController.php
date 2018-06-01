<?php 

namespace app\Http\controllers;

use \polakjan\mvc\db;

class IndexController
{
    public function index()
    {

        // setup everything we need for the project
        $site_url = SITE_URL;

        // set the content
        $content = 'homepage/layout.php';


        // when we are ready with setup, include the wrapper
        include __DIR__ . '/../../../resources/views/html-wrapper.php'; 
    }


 
}

    
