<?php


namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{

    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods()
    {
        $model = Yii::$app->cache->get('$model');
            if (!$model) {
                $model = Good::find()
                ->asArray()
                ->all();
                Yii::$app->cache->set('$model', $model, 30);
              }

            return $model;
    }

    public function getGoodsCategories($id)
    {
        $goods = Good::find()
            ->where(['category' => $id])
            ->asArray()
            ->all();
        return $goods;
    }

    public function getSearchResult($search)
    {
        $searchResults = Good::find()
            ->where(['like', 'name', $search])
            ->asArray()
            ->all();
        return $searchResults;
    }

    public function getGood($name)
    {
        $good = Good::find()
            ->where(['name' => $name])
            ->one();
        return $good;
    }

}