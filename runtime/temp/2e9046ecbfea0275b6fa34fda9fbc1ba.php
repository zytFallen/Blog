<?php /*a:2:{s:71:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\category\index.html";i:1526812648;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\layout\layout.html";i:1526812282;}*/ ?>
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
<style type="text/css">
    .pagination {
        margin-top: 50px;
    }

    .pagination ul {
        display: inline;
    }

    .pagination li {
        display: inline;
        float: left;
        margin-left: 20px;
        border: 1px solid #020f06;
        background: #00b7ee;
        width: 30px;
        height: 30px;
        text-align: center;
        vertical-align: center;
        border-radius: 2px;
    }
</style>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 分类管理 <span
        class="c-gray en">&gt;</span> 分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px"
                                              href="javascript:location.replace(location.href);" title="刷新"><i
        class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">
        <?php if(isset($cate)): ?>
        <form class="Huiform" action="<?php echo url('/cate/'.$cate['id']); ?>" method="post">
            <input type="hidden" name="_method" value="PUT">
            <?php else: ?>
            <form class="Huiform" action="<?php echo url('/cate'); ?>" method="post">
                <?php endif; ?>
                <?php echo token(); ?>
                <input type="text" value="<?php echo !empty($cate) ? htmlspecialchars($cate['cate_name']) : ''; ?>" name="cate_name" placeholder="分类名称2-15位"
                       class="input-text" style="width:120px">
                <input type="text" value="<?php echo !empty($cate) ? htmlspecialchars($cate['cate_desc']) : ''; ?>" name="cate_desc" placeholder="分类描述5-50位"
                       class="input-text" style="width: 240px">
                <input type="submit" class="btn btn-success search" id="search" value="<?php echo !empty($cate) ? '提交更改' : '添加分类'; ?>">
            </form>
    </div>
    <div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"></span>
        <span class="r">共有<?php echo htmlspecialchars($count); ?>条，每页显示：<strong><?php echo count($list); ?></strong> 条</span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="70">ID</th>
                <th width="120">分类名称</th>
                <th>具体描述</th>
                <th width="80">添加时间</th>
                <th width="80">更新时间</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="text-c">
                <td><input name="" type="checkbox" value=""></td>
                <td><?php echo htmlspecialchars($vo['id']); ?></td>
                <td><?php echo htmlspecialchars($vo['cate_name']); ?></td>
                <td><?php echo htmlspecialchars($vo['cate_desc']); ?></td>
                <td><?php echo htmlspecialchars($vo['create_time']); ?></td>
                <td><?php echo htmlspecialchars($vo['update_time']); ?></td>
                <td class="f-14 product-brand-manage"><a style="text-decoration:none"
                                                         href="<?php echo url('/cate/'.$vo['id'].'/edit'); ?>" title="编辑"><i
                        class="Hui-iconfont">&#xe6df;</i></a>
                    <a style="text-decoration:none" class="ml-5" href="javascript:delArt(<?php echo htmlspecialchars($vo['id']); ?>);" title="删除" id="del"><i
                            class="Hui-iconfont">&#xe6e2;</i></a></td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <hr style=" height:1px;border:none;border-top:2px solid #131398; margin-top: 25px"/>
        <div style="text-align: center"> <?php echo $list; ?></div>
    </div>
</div>

<!--请在下方写此页面业务相关的脚本-->
<script>
    function delArt(id) {
        layer.confirm('确认要删除吗？', function () {
            $.ajax({
                type: 'DELETE',
                url: '/cate/'+id,
                dataType: 'json',
                success: function (data) {
                    //$(obj).parents("tr").remove();
                    if (data.status==1){
                        layer.msg(data.message,{icon: 1, time: 1000},function () {
                            location.href='/cate';
                        })
                    }else {
                        layer.msg(data.message,{icon: 2, time: 1000})
                    }
                },
            });
        });
    }
</script>
</body>
</html>