<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "food_menu".
 *
 * @property int $id
 * @property string $menu_title_en
 * @property string $menu_title_cz
 * @property string $price
 * @property string $show_priority
 * @property string $active
 */
class FoodMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_title_en', 'menu_title_cz', 'price', 'show_priority', 'active'], 'required'],
            [['menu_title_en', 'menu_title_cz', 'price', 'show_priority', 'active'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_title_en' => 'Menu Title En',
            'menu_title_cz' => 'Menu Title Cz',
            'price' => 'Price',
            'show_priority' => 'Show Priority',
            'active' => 'Active',
        ];
    }
}
