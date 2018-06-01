<?php
// The modal
namespace app;

use \polakjan\mvc\db;

/**
 * represents one row in the table `product`
 */
class Song
{
    // properties represent the columns of the table
    public $id = null;
    public $name = null;
    public $code = null;
    public $description = null;
    public $author = null;
    

    public function insert()
    {
        $query = "
            INSERT
            INTO `songs`
            (`name`, `code`, `description`, `author`)
            VALUES
            (?, ?, ?, ?)
        ";
        $values = [
            $this->name,
            $this->code,
            $this->description,
            $this->author,
        ];

        db::query($query, $values);

        // find the last inserted id and update this object's property
        $this->id = db::getConnection()->lastInsertId();
    }
}