<?php 

namespace app\Http\controllers;

use \polakjan\mvc\db;

class InsertsongController
{
    public function index()
    {
        
        // if (!empty($_GET['id'])) {
        //     // retrieve existing SONG from database
        // } else {
        //     // create empty SONG
        // }
         
        // // if the form was submitted
        // if ($_POST) {
        //     // load the submitted information into the SONG
         
        //     // validate the data in SONG
        //     $data_is_valid = true;
        //     if (!$song->name) {
        //         $data_is_valid = false;
        //     }
        //     if (!$song->code) {
        //         $data_is_valid = false;
        //     }
         
        //     // if validation did not encounter any errors
        //     if ($data_is_valid) {
        //         // save the data
        //         $query = "
        //             INSERT INTO ...
        //         "; // etc.
         
        //         // redirect (ideally to the edit page of the inserted song)
        //         header('Location: /some/url.php');
        //     }
        // }


        // set the content
        $content = 'insertsong.php';


        // when we are ready with setup, include the wrapper
        include __DIR__ . '/../../../resources/views/html-wrapper.php'; 
    }


 
}

    
