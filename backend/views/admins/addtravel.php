<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap Admin</title>
  </head>
  <body class=""> 
  <!--<![endif]-->
    <div class="content">
        
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="number">53</span>tickets</p>
    <p class="stat"><span class="number">27</span>tasks</p>
    <p class="stat"><span class="number">15</span>waiting</p>
</div>

            <h1 class="page-title">Dashboard</h1>
        </div>
        
                <ul class="breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Dashboard</li>
        </ul>

        <div class="container-fluid">


<?=Html::beginForm('index.php?r=admins/doaddtravel' , 'post' , ['enctype' => 'multipart/form-data'])?>   <table>
    <tr>
        <td>景点名称</td>
        <td><input type="text" name="t_name"></td>
    </tr>
    <tr>
        <td>图片</td>
        <td><?=Html::activeFileInput($model , 't_p_img')?>
        </td>
    </tr>
    <tr>
        <td>景点介绍</td>
        <td><input type="text" name="t_content"></td>
    </tr>
    <tr>
        <td>地图经度</td>
        <td><input type="text" name="t_j"></td>
    </tr>
    <tr>
        <td>地图纬度</td>
        <td><input type="text" name="t_w"></td>
    </tr>
    <tr>
        <td>景点所在地</td>
        <td>
            <select name="c_id">
                <?php foreach ($info as $k => $v): ?>
                <option value="<?php echo $v['c_id']?>">
                    <?php echo $v['c_name']?>
                </option>
                <?php endforeach ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>适合季节</td>
        <td>
            <select name="s_id">
                <?php foreach ($arr as $k => $v): ?>
                <option value="<?php echo $v['s_id']?>">
                    <?php echo $v['s_name']?>
                </option>
                <?php endforeach ?>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="添加"><input type="reset" value="重置"></td>
        <td></td>
    </tr>
    </table>

<?=Html::endForm();?>











        </div>
    </div>
    


    <script src="lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>


