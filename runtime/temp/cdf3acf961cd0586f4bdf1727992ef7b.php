<?php /*a:2:{s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\article\index.html";i:1526811012;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\layout\layout.html";i:1526812282;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="Bookmark" href="/favicon.ico">
    <link rel="Shortcut Icon" href="/favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
        <!--_footer 作为公共模版分离出去-->
    <script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
    <script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
    <script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
    <!--/_footer /作为公共模版分离出去-->
    <![endif]-->
    <!--/meta 作为公共模版分离出去-->

    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="keywords" content="博客天地-展现你的天地">
    <meta name="description" content="博客天地-展现你的天地">
</head>
﻿<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 文章管理 <span
        class="c-gray en">&gt;</span><?php echo htmlspecialchars($title); ?> <a class="btn btn-success radius r"
                                                 style="line-height:1.6em;margin-top:3px"
                                                 href="javascript:location.replace(location.href);" title="刷新"><i
        class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">
        <button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button>
        <span class="select-box inline">
		<select name="cate_id" class="select">
                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo htmlspecialchars($vo['id']); ?>"><?php echo htmlspecialchars($vo['cate_name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
		</span> 日期范围：
        <input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin"
               class="input-text Wdate" style="width:120px;">
        <input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax"
               class="input-text Wdate" style="width:120px;">
        <input type="text" name="" id="" placeholder=" 文章名称" style="width:250px" class="input-text">
        <button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜文章</button>
    </div>
    <form action="" method="post" id="datadel">
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:datadel();"
                                                               class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
        <a class="btn btn-primary radius" data-title="添加文章"  href="<?php echo url('/article/create'); ?>"><i class="Hui-iconfont">&#xe600;</i> 添加文章</a>

    </span>
        <span class="r">共有数据<strong><?php echo htmlspecialchars($count); ?></strong>条</span>
    </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox"  value=""></th>
                <th width="80">ID</th>
                <th>标题</th>
                <th width="100">分类</th>
                <th width="80">作者</th>
                <th width="180">发表时间</th>
                <th width="75">浏览次数</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="text-c">
                <td><input type="checkbox" value="<?php echo htmlspecialchars($vo['id']); ?>" name="ck[]"></td>
                <td><?php echo htmlspecialchars($vo['id']); ?></td>
                <td class="text-l"><?php echo htmlspecialchars($vo['title']); ?></td>
                <th><?php echo htmlspecialchars($vo['cate_name']); ?></th>
                <td><?php echo htmlspecialchars($vo['author']); ?></td>
                <td><?php echo htmlspecialchars($vo['update_time']); ?></td>
                <td><?php echo htmlspecialchars($vo['view_count']); ?></td>
                <td class="f-14 td-manage"><a style="text-decoration:none" class="ml-5"
                                              href="<?php echo url('/article/'.$vo['id'].'/edit'); ?>" title="编辑" data-title="文章编辑"><i
                        class="Hui-iconfont">&#xe6df;</i></a>
                    <a style="text-decoration:none" class="ml-5" href="javascript:article_del(<?php echo htmlspecialchars($vo['id']); ?>);" title="删除"><i
                            class="Hui-iconfont">&#xe6e2;</i></a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <?php echo $data; ?>
    </div></form>
</div>


<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript">
    /*删除文章*/
    function article_del(id) {
        layer.confirm('确认要删除吗？', function () {
            $.ajax({
                type: 'DELETE',
                url: '/article/' + id,
                dataType: 'json',
                success: function (data) {
                    //$(obj).parents("tr").remove();
                    if (data.status == 1) {
                        layer.msg(data.message, {icon: 1, time: 1000}, function () {
                            location.href = '/article';
                        })
                    } else {
                        layer.msg(data.message, {icon: 2, time: 1000}, function () {
                            location.href = '/article';
                        })
                    }
                },
            });
        });
    }
    function datadel(){
        layer.confirm('确定删除吗?',function () {
            $.ajax({
                type: 'POST',
                url: '/article/sum',
                dataType: 'json',
                data:$('#datadel').serialize(),
                success:function (data) {
                    alert(JSON.stringify(data));
                }
            })
        })
    }
</script>
</body>
</html>