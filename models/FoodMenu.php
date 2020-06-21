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
 * @property string $status
 * @property string $food_desc_en
 * @property string $food_desc_cz
 * @property string $food_image
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
            [['menu_title_en', 'menu_title_cz', 'price', 'show_priority', 'status','food_desc_en','food_desc_cz'], 'required'],
            [['menu_title_en', 'menu_title_cz', 'price', 'show_priority', 'status','food_desc_en','food_desc_cz'], 'string', 'max' => 255],
            [['food_image'], 'file',  'extensions' => ['png','jpg','jpeg']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'menu_title_en' => 'Menu title(English)',
            'menu_title_cz' => 'Menu title (Czech)',
            'price' => 'Price',
            'show_priority' => 'Show Priority',
            'status' => 'status',
            'food_desc_en'=>'Food description(English)',
            'food_desc_cz'=>'Food description(Czech)',
        ];
    }


    public function upload()
    {
        if($this->food_image->baseName){
            $this->food_image->saveAs(Yii::$app->basePath.'uploads/'.$food_image->baseName . '.'.$food_image->extension);
            return true;
        }else{
            return false;
        }






}
}
