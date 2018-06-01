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
    public function update()
    {
        $query = "
            UPDATE `songs`
            SET `name` = ?,
                `code` = ?,
                `description` = ?,
                `author` = ?,
            WHERE `id` = ?
        ";
        $values = [
            $this->name,
            $this->code,
            $this->description,
            $this->author,
            $this->id
        ];
        db::query($query, $values);
    }
    public function delete()
    {
        $query = "
            DELETE
            FROM `songs`
            WHERE `id` = ?
        ";
        $values = [
            $this->id
        ];
        db::query($query, $values);
        $this->id = null;
    }
    public function save()
    {
        if ($this->id) {
            $this->update();
        } else {
            $this->insert();
        }
    }
    public static function find($id)
    {
        $query = "
            SELECT *
            FROM `songs`
            WHERE `id` = ?
        ";
        $statement = db::query($query, [
            $id
        ]);
        // set the statement to fetch objects of this class
        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);
        // fetch and return the first result
        return $statement->fetch();
    }
    public static function select($query, $values = [])
    {
        // run the query, get the statement
        $statement = db::query($query, $values);
        // set the statement to fetch objects of this class
        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);
        // fetch and return all of the results
        return $statement->fetchAll();
    }
    
}

