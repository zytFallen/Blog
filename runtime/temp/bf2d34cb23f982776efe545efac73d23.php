<?php /*a:7:{s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\index\welcome.html";i:1526812391;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\layout\layout.html";i:1526812282;s:68:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\base.html";i:1525331406;s:68:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\meta.html";i:1525327980;s:68:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\head.html";i:1526887485;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\footer.html";i:1525329654;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\script.html";i:1525332599;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />


<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title><?php echo htmlspecialchars($title); ?></title>
<meta name="keywords" content="博客天地-展现你的天地">
<meta name="description" content="博客天地-展现你的天地">
</head>


<body>
<div class="page-container">
    <p class="f-20 text-success">博客系统后台管理 <span class="f-14">v1.1</span></p>
    <p>登录次数：18 </p>
    <p>登录IP：<?php echo htmlspecialchars($ip); ?>  登录时间：<?php echo date("Y-m-d H:i:s",time()); ?></p>
    <table class="table table-border table-bordered table-bg">
        <thead>
        <tr>
            <th colspan="7" scope="col">信息统计</th>
        </tr>
        <tr class="text-c">
            <th>统计</th>
            <th>文章库</th>
            <th>图片库</th>
            <th>分类库</th>
            <th>用户</th>
            <th>管理员</th>
        </tr>
        </thead>
        <tbody>
        <tr class="text-c">
            <td>总数</td>
            <td>92</td>
            <td>10</td>
            <td>25</td>
            <td>7</td>
            <td>20</td>
        </tr>
        <tr class="text-c">
            <td>今日</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr class="text-c">
            <td>昨日</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr class="text-c">
            <td>本周</td>
            <td>2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr class="text-c">
            <td>本月</td>
            <td>2</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
        </tbody>
    </table>
    <table class="table table-border table-bordered table-bg mt-20">
        <thead>
        <tr>
            <th colspan="2" scope="col">服务器信息</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>服务器IP地址</td>
            <td><?php echo htmlspecialchars(app('request')->ip()); ?></td>
        </tr>
        <tr>
            <td>服务器域名</td>
            <td><?php echo htmlspecialchars(app('request')->domain()); ?></td>
        </tr>
        <tr>
            <td>服务器端口</td>
            <td><?php echo htmlspecialchars(app('request')->port()); ?></td>
        </tr>
        </tbody>
    </table>
</div>


<div class="footer mt-20">
    <div class="container">
        <p>
        Copyright &copy;2017-2018 博客天地 by Fallen
        </p>
    </div>
</div>


<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
</body>
</html>

