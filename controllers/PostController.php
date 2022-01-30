<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use app\models\resources\PostResource;

class PostController extends ActiveController
{
   public $modelClass = PostResource::class;

}
