<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "food_category".
 *
 * @property int $id
 * @property string $category_name
 */
class FoodCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'string', 'max' => 255],
        ];
    }
    public function getFoodMenu()
    {
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }



    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_name' => 'Category Name',
        ];
    }




}
