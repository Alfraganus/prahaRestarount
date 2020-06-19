<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string $event_title_en
 * @property string $event_title_cz
 * @property string $event_description_en
 * @property string $event_description_cz
 * @property string $event_photo
 */
class Event extends \yii\db\ActiveRecord
{
    public $EventPhoto;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_title_en', 'event_title_cz', 'event_description_en', 'event_description_cz'], 'required'],
            [['event_description_en', 'event_description_cz'], 'string'],
            [['event_title_en', 'event_title_cz'], 'string', 'max' => 255],
            [['event_photo'],'file','extensions'=>['png','jpg','jpeg']],
            [['image'],'safe'],
        
        ];
    }


public function upload()
{
    if($this->validate() and $this->EventPhoto->baseName){
        $this->EventPhoto->saveAs(Yii::$app->basePath.'uploads/'.$this->EventPhoto->extensions);
        return true;
    }else{
        return false;
    }




}



    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'event_title_en' => 'Event Title En',
            'event_title_cz' => 'Event Title Cz',
            'event_description_en' => 'Event Description En',
            'event_description_cz' => 'Event Description Cz',
            'event_photo' => 'Event Photo',
        ];
    }
}
