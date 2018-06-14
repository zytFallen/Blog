<?php /*a:6:{s:68:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\index\login.html";i:1526887580;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\layout\layout.html";i:1526812282;s:68:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\base.html";i:1525331406;s:68:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\meta.html";i:1525327980;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\footer.html";i:1525329654;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\public\script.html";i:1525332599;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico">
<link rel="Shortcut Icon" href="/favicon.ico"/>


<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.login.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/static/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title><?php echo htmlspecialchars($title); ?></title>
</head>


<body>
<input type="hidden" id="TenantId" name="TenantId" value=""/>
<div class="header"></div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <div style="color: #ff6c54;font-size: 15px;text-align:-webkit-center;display: none;" id="message"></div>
        <form class="form form-horizontal" action="" method="post">
            <input type="hidden" name="__token__" value="<?php echo htmlspecialchars(app('request')->token()); ?>" />
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input name="username" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="captcha" class="input-text size-L" type="text" placeholder="请输入验证码" style="width:150px;">
                    <a><img src="<?php echo url('/admin/captcha'); ?>" id="verify" onclick="javascript:change();" title="点击刷新"> </a></div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="button" class="btn btn-success radius size-L"
                           value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L"
                           value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
        </form>
    </div>
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
<script type="text/javascript">
        function change(){
            var time = Date.parse(new Date())/1000;
            $('#verify').attr('src', "/admin/captcha"+"?time="+time);
        }
        $('.btn-success').click(
            function () {
                $.ajax({
                    url:'/admin/checkLogin',
                    data:$('form').serialize(),
                    dataType:'JSON',
                    method:'post',
                    success:function (data) {
                        if (data.status==1){
                            layer.msg('登录成功，正在为您跳转',{'time':1000},function () {
                                location.href='/admin/index';
                            });
                        } else {
                            $('#message').css({"display":"block","text-align":"center"}).html(data.message);
                            change();
                        }
                    }
                })
            }
        )
</script>

