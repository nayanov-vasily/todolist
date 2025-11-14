<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $status
 */
class Task extends ActiveRecord
{
    const STATUS_NEW = 'new';
    const STATUS_IN_PROGRESS = 'in_progress';
    const STATUS_COMPLETED = 'completed';

    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return '{{%tasks}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['title', 'description', 'status'], 'required'],
            ['title', 'string', 'max' => 255],
            ['description', 'string'],
            ['status', 'in', 'range' => [
                self::STATUS_NEW,
                self::STATUS_IN_PROGRESS,
                self::STATUS_COMPLETED,
            ]],
        ];
    }
}
