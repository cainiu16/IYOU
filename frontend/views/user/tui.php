<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
$session=yii::$app->session;
$session->open();
?>
    <body>
<?php
require('/file/left.php');
?>
<link type="text/css" rel="stylesheet" href="css/tgv3_index.css">
<div class="u-main">
    <div class="ucenter">
        <div class="tgv3_index_bqnav" style="width:684px;">
            <ul>
                <li>推广方式</li>
            </ul>
        </div>
        <div class="tgv3_indexcon clearfix">
            <div class="tgv3_indexcon_l ">
                <div class="tgv3_index_yjjh">
                    <div class="tgv3_index_bqnav" style="width:684px;">
                        <div class="tgv3_index_tgfs">
                            <div class="tgv3_index_tgfs1">
                                <p>
                                    <span>方式1：</span>
                                    复制链接发送邀请给朋友
                                </p>
                                <div class="tgv3_index_tgfs1_dz">
                                    <ul>
                                        <li class="fzljc">
                                            <div id="sharetext" name="sharetext" style="width:493px; color:#797979; height:40px; border:2px solid #adadad; border-right:0px; padding:0 4px; line-height:40px;">注册送积分！,兑换商品http://www.pceggs.com/i.aspx?id=<?= $session['u_id']?></div>
                                        </li>
                                        <li class="fzlja">
                                            <a onclick="copyurl();" href="javascript:void(0)">复制链接</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ucenter-info mt10">
                            <div class="ucenter-tab-box">
                                <ul>
                                    <li><font>我的推荐</font></li>
                                </ul>
                            </div>
                            <div id="tab_box">
                                <style>
                                    .list {width:200px;height:20px}
                                </style>
                                <div class="u-form-wrap">
                                    <table>
                                        <th class="list">被推荐人名称名称</th>
                                        <th class="list">获取积分</th>
                                        <th class="list">注册时间</th>
                                        <?php
                                        foreach($models as $k=>$v){
                                            ?>
                                            <tr>
                                                <td class="list"><?= $v['u_pname']?></td>
                                                <td class="list"><?= $v['e_inte']?></td>
                                                <td class="list"><?= $v['e_time']?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <?php
                                    echo LinkPager::widget([
                                        'pagination' => $pages,
                                    ]);
                                    ?>
                                    <div>
                                    </div>
        <script type="text/javascript">

            var $div_li = $(".ucenter-tab-box ul li");

            $div_li.click(function () {

                $(this).addClass("current").siblings().removeClass("current");

                var div_index = $div_li.index(this);

                $("#tab_box>div").eq(div_index).show().siblings().hide();

            }).hover(function () {

                $(this).addClass("hover");

            }, function () {

                $(this).removeClass("hover");

            });
            //粘贴
            function copyurl()
            {
                var share_url = $("#sharetext").html();
                if(window.clipboardData){
                    window.clipboardData.setData("Text",share_url);

                    alert("推荐代码已经复制到粘贴板!");
                }else{

                    alert("该浏览器不支持快捷复制，请使用CTR+C手动复制内容!");
                }

            }
            function copyfw(id){
                var share_url = document.getElementById(id).innerHTML;
                if(window.clipboardData){
                    window.clipboardData.setData("Text",share_url);
                    alert("推荐代码已经复制到粘贴板!");
                }else{

                    alert("该浏览器不支持快捷复制，请使用CTR+C手动复制内容!");
                }
            }
        </script>
    </div>
    <!-- /.u-main -->
</div>