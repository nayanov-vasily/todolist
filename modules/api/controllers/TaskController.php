<?php

namespace app\modules\api\controllers;

use app\modules\api\actions\IndexAction;
use app\modules\api\models\Task;
use Yii;

class TaskController extends \yii\rest\ActiveController
{
    public $modelClass = Task::class;

    public function actions(): array
    {
        $actions = parent::actions();

        $actions['index'] = [
            'class' => IndexAction::class,
            'modelClass' => $this->modelClass,
            'checkAccess' => [$this, 'checkAccess'],
        ];

        return $actions;
    }

    public function afterAction($action, $result): mixed
    {
        if (in_array($action->id, [
            'create',
            'update',
            'delete'
        ])) {
            Yii::$app->cache->flush();
        }

        return parent::afterAction($action, $result);
    }
}
