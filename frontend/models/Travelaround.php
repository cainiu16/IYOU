<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "travelaround".
 *
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $content
 * @property integer $c_id
 */
class Travelaround extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travelaround';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['c_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'title' => 'Title',
            'content' => 'Content',
            'c_id' => 'C ID',
        ];
    }
    //查询所在城市id
    public function select_city($city){
        $id=$this->findBySql("select c_id from city where c_name = '$city'")->asArray()->one();
        return $id;
    }
    //查询景点
    public function select_all($id){
        $arr=$this->findBySql("select * from travel inner join city on travel.c_id=city.c_id where travel.c_id='$id' and travel.t_del=1")->limit(0,8)->asArray()->all();
        return $arr;
    }
    //查询景点详细信息
    public function detial($id){
        $arr=$this->findBySql("select * from travel where t_id = '$id'")->asArray()->one();
        return $arr;
    }
    //查询其他推荐景点
    public function select_else(){
        $row=$this->findBySql("select * from travel where t_del='1' order by click_num desc")->limit(0,8)->asArray()->all();
        return $row;
    }
}
