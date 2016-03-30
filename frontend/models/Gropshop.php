<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gropshop".
 *
 * @property integer $g_id
 * @property string $g_name
 * @property string $g_money
 * @property integer $g_type_id
 * @property string $g_content
 * @property string $g_p_img
 * @property string $g_p_img2
 * @property string $g_p_img3
 * @property integer $g_del
 * @property integer $g_num
 * @property string $g_place
 * @property string $g_coordinate
 * @property integer $c_id
 * @property string $g_desc
 */
class Gropshop extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gropshop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_type_id', 'g_del', 'g_num', 'c_id'], 'integer'],
            [['g_content'], 'string'],
            [['g_name', 'g_money', 'g_p_img', 'g_p_img2', 'g_p_img3', 'g_place', 'g_coordinate', 'g_desc'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'g_name' => 'G Name',
            'g_money' => 'G Money',
            'g_type_id' => 'G Type ID',
            'g_content' => 'G Content',
            'g_p_img' => 'G P Img',
            'g_p_img2' => 'G P Img2',
            'g_p_img3' => 'G P Img3',
            'g_del' => 'G Del',
            'g_num' => 'G Num',
            'g_place' => 'G Place',
            'g_coordinate' => 'G Coordinate',
            'c_id' => 'C ID',
            'g_desc' => 'G Desc',
        ];
    }
    /**
     *查询该城市比较好的酒店
     *
     */
    public function hotels($id)
    {
        $alls = $this->find()->where(['c_id'=>$id])->orderBy(['g_num'=>SORT_DESC])->asArray()->all();
        if(count($alls)>4)
        {
            $alls = $this->find()->where(['c_id'=>$id])->orderBy(['g_num'=>SORT_DESC])->limit(4)->asArray()->all();
        }
        return $alls;
    }
} 