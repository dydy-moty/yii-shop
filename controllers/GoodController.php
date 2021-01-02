<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Good;
use Yii;

class GoodController extends Controller
{
    public function actionIndex($name)
    {
        $good = new Good();
        $good = $good->getGood($name);
        return $this->render('index', compact('good'));
    }
}