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


<table border="1">
    <tr>
        <th>ID</th>
        <th>图片</th>
        <th>轮播开始时间</th>
        <th>轮播结束时间</th>
        <th>地点</th>
        <th>介绍</th>
        <th>操作</th>
    </tr>
    <?php foreach ($info as $k => $v): ?>
    <tr>
        <td><?php echo $v['i_id']?></td>
        <td><img src="<?php echo $v['i_img']?>" alt="无图"></td>
        <td><?php echo $v['i_b_times']?></td>
        <td><?php echo $v['i_e_times']?></td>
        <td><?php echo $v['i_content']?></td>
        <td><?php echo $v['i_desc']?></td>
        <td><a onclick="if(confirm('确定移除？')) return true; else return false;" href="index.php?r=admin/del&id=<?php echo $v['i_id']?>" class='outiong'>移除</a>||<a href="index.php?r=admin/save&id=<?php echo $v['i_id']?>">修改</a></td>
    </tr>
     <?php endforeach ?>
</table>












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


