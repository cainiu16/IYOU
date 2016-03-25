<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imgs".
 *
 * @property integer $i_id
 * @property string $i_img
 * @property string $i_b_times
 * @property string $i_e_times
 * @property string $i_content
 * @property string $i_desc
 */
class Imgs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imgs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['i_img', 'i_b_times', 'i_e_times', 'i_content', 'i_desc'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'i_id' => 'I ID',
            'i_img' => 'I Img',
            'i_b_times' => 'I B Times',
            'i_e_times' => 'I E Times',
            'i_content' => 'I Content',
            'i_desc' => 'I Desc',
        ];
    }
    //查询类调用的方法
    public function sel()
    {
        //原生SQL查询全部
        $sql = "select * from imgs where i_del=1";
        //执行查询全部
        return $info =\Yii::$app->db->createCommand($sql)->queryAll();
    }
    //移除类调用的方法
    public function del()
    {
        //接收传来移除的ID
        $id = $_GET['id'];
        //执行移除
        $update = Yii::$app->db->createCommand()->update('imgs',['i_del'=>0],"i_id='$id'")->query();
            echo "<script>alert('移除成功');location.href='index.php?r=admin/lunbo';</script>";
       
    }
}
