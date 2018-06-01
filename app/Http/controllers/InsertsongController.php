<?php 

namespace app\Http\controllers;

use \polakjan\mvc\db;
use app\Song;


class InsertsongController
{
    public function index()
    {
        
         if (!empty($_GET['id'])) {
             // retrieve existing SONG from database
              $song = Song::find($_GET['id']);
         } else {
             // create empty SONG
            $song = new Song;
            
         }
         
         // if the form was submitted
        if ($_POST) {
             // load the submitted information into the SONG
             $song->name = $_POST["name"];
             $song->code = $_POST["code"];
             $song->description = $_POST["description"];
             $song->author = $_POST["author"];

            var_dump($_POST);
             // validate the data in SONG
            $data_is_valid = true;
            if (!$song->name) {
                $data_is_valid = false;
            }
            if (!$song->code) {
                $data_is_valid = false;
            }
         
            // if validation did not encounter any errors
            if ($data_is_valid) {
                // save the data
               $song -> save();
                // redirect (ideally to the edit page of the inserted song)
               header('Location: ?page=insertsong&id='.$song->id);
            }
        }


        // set the content
        $content = 'insertsong.php';


        // when we are ready with setup, include the wrapper
        include __DIR__ . '/../../../resources/views/html-wrapper.php'; 
    }


 
}

    
