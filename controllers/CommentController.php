<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use app\models\resources\CommentResource;

class CommentController extends ActiveController
{
   public $modelClass = CommentResource::class;

}
