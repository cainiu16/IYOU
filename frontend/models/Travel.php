<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "travel".
 *
 * @property integer $t_id
 * @property string $t_name
 * @property string $t_p_img
 * @property string $t_content
 * @property string $t_j
 * @property string $t_w
 * @property integer $c_id
 * @property integer $s_id
 * @property string $t_money
 * @property integer $t_comment_id
 * @property integer $t_del
 */
class Travel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'travel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c_id', 's_id', 't_comment_id', 't_del'], 'integer'],
            [['t_name', 't_p_img', 't_content', 't_j', 't_w', 't_money'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            't_name' => 'T Name',
            't_p_img' => 'T P Img',
            't_content' => 'T Content',
            't_j' => 'T J',
            't_w' => 'T W',
            'c_id' => 'C ID',
            's_id' => 'S ID',
            't_money' => 'T Money',
            't_comment_id' => 'T Comment ID',
            't_del' => 'T Del',
        ];
    }
    /**
     * 模块：搜索价格最高的前六条数据
     * author：wangnana
     * time:2016/3/24
     */
    public function searchsix()
    {
        return $this->find()->select('*')
            ->innerJoin('city',"travel.c_id = city.c_id")
            ->innerJoin('season',"travel.s_id = season.s_id")
            ->innerJoin('comment',"travel.t_comment_id = comment.c_id")
            ->orderBy(['click_num'=>SORT_DESC])
            ->limit(6)
            ->asArray()
            ->all();
    }
    /**
     * 最好的时节
     * 按时间跟点击量
     */
    public function seasons()
    {
        $time = date('m',time());
        if($time>=3 && $time<6)
        {
            $season = 1;
        }
        else if($time>=6 && $time<9)
        {
            $season = 2;
        }
        else if($time>=9 && $time<11)
        {
            $season = 3;
        }
        else
        {
            $season = 4;
        }
            $sql = $this->find()
            ->innerJoin('city',"travel.c_id = city.c_id")
            ->innerJoin('season',"travel.s_id = season.s_id")
            ->innerJoin('comment',"travel.t_comment_id = comment.c_id")
            ->where(['travel.s_id'=>$season])
           ->orderBy(['click_num'=>SORT_DESC])->select('*');
        //return  $sql->asArray()->all();die;

        $sql1 = clone $sql;
        $pages = new Pagination([
            'totalCount'=>$sql1->count(),
            'defaultPageSize'=>3,
        ]);
        $info = Yii::$app->db->createCommand("select * from travel as tr join city on tr.c_id = city.c_id join season as sea on sea.s_id=tr.s_id join comment on tr.t_comment_id = comment.c_id where tr.s_id = '$season' limit ".$pages->offset.",".$pages->limit)->queryAll();

       /* $info = $sql2->offset($pages->offset)
            ->limit($pages->limit)
            ->all();*/
        return ['page'=>$pages,'info'=>$info];
    }
    /**
     * 最热的城市
     * 按城市里景点最多
     */
    public function hotcity()
    {
        $city = $this->find()->select("c_id")->asArray()->all();
        foreach($city as $k=>$v)
        {
            $arr[$k]=$v['c_id'];
        }
        print_r(array_count_values($arr));
    }
}
