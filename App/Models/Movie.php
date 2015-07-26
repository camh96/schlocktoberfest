<?php

namespace App\Models;
use PDO;

class Movie extends DatabaseModel
{
    
    protected static $columns = ['id', 'title', 'year', 'description'];

    protected static $tableName = "movies";

 	protected static $validationRules = [
        'title'       => 'minlength:1',
        'year'        => 'minlength:4,maxlength:4,numeric',
        'description' => 'minlength:10'
    ];

    public function comments()
    {
        return Comment::allBy('movieID', $this->id);
    }

    public function getTags()
    {
        $models = [];

        $db = static::getDatabaseConnection();

        $query  = "SELECT id, tag FROM tags ";
        $query .= " JOIN movies_tags ON id = tag_id ";
        $query .= " WHERE movie_id = :id";

        $statement = $db->prepare($query);
        $statement->bindValue(":id", $this->id);
        $statement->execute();

        while ($record = $statement->fetch(PDO::FETCH_ASSOC)) {
            $model = new Tag();
            $model->data = $record;
            array_push($models, $model);
        }

        return $models;

    }

       public function loadTags()
    {
        $tags = $this->getTags();
        $taglist = [];
        foreach ($tags as $tag) {
            array_push($taglist, $tag->tag);
        }
        $this->tags = implode($taglist, ", ");
    }

}