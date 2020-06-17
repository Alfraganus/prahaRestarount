<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Events".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $date
 * @property string $photo
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'date', 'photo'], 'required'],
            [['description'], 'string'],
            [['date'], 'safe'],
            [['name', 'photo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'date' => 'Date',
            'photo' => 'Photo',
        ];
    }
}
