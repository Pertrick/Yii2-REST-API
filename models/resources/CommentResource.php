<?php
namespace app\models\resources;
use app\models\Comment;


class CommentResource extends Comment{

    public function fields()
    {
        return ['id', 'content', 'user_id'];
    }

    public function extraFields()
    {
        return ['post', 'created_at', 'updated_at'];
    }
}
