<?php
namespace app\models\resources;
use app\models\Post;


class PostResource extends Post{

    public function fields()
    {
        return ['id', 'title', 'content', 'user_id', 'comments'];
    }

    public function extraFields()
    {
        return ['created_at', 'updated_at'];
    }
}
