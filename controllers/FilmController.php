<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\rest\ActiveController;
use app\models\Film;
use app\components\AccessRule;

class FilmController extends ActiveController
{
   public function behaviors()
   {
       return [
           'access' => [

            'ruleConfig' => [
               'class' => AccessRule::className(),
               ],
               'class' => AccessControl::className(),
               'rules' => [
                   [
                       'actions' => ['auth-only'],
                       'allow' => true,
                       'roles' => ['@'],
                   ],
               ],
           ],
          
       ];
   }

   public function actionAuthOnly()
   {
      echo "Looks like you are authorized to run me.";
   }
   


   public $modelClass = 'app\models\Film';
}
