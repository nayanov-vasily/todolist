<?php

namespace app\modules\api\actions;

use Yii;
use yii\data\ActiveDataProvider;

class IndexAction extends \yii\rest\IndexAction
{
    public function run(): ActiveDataProvider
    {
        if ($this->checkAccess) {
            call_user_func($this->checkAccess, $this->id);
        }

        $requestParams = Yii::$app->getRequest()->getQueryParams();
        $cache = Yii::$app->cache;
        $key = md5(serialize($requestParams));

        $dataProvider = $cache->get($key);

        if ($dataProvider === false) {
            $dataProvider = $this->prepareDataProvider();
            $dataProvider->prepare();
            $cache->set($key, $dataProvider, 300);
        }

        return $dataProvider;
    }
}
