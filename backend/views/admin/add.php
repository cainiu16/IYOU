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


<?=Html::beginForm('index.php?r=admin/doadd' , 'post' , ['enctype' => 'multipart/form-data'])?>   <table>
    <tr>
        <td>图片</td>
        <td><?=Html::activeFileInput($model , 'i_img')?>
        </td>
    </tr>
    <tr>
        <td>开始时间</td>
        <td><input type="text" name="i_b_times"></td>
    </tr>
    <tr>
        <td>结束时间</td>
        <td><input type="text" name="i_e_times"></td>
    </tr>
    <tr>
        <td>地点</td>
        <td><input type="text" name="i_content"></td>
    </tr>
    <tr>
        <td>介绍</td>
        <td><input type="text" name="i_desc"></td>
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


