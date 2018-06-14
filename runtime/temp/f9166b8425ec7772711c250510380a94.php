<?php /*a:2:{s:68:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\article\add.html";i:1526811012;s:70:"G:\xamp\Apache24\htdocs\Blog\application\admin\view\layout\layout.html";i:1526812282;}*/ ?>
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
<link rel="stylesheet" href="/static/admin/lib/webuploader/0.1.5/webuploader.css">
<link rel="stylesheet" href="/static/admin/lib/ValidateForm5.5.2/css/style.css">
<body style="background-color: #fff">
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" method="post" action="<?php echo url('/article'); ?>">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="6-50个字符" datatype="*6-50" aria-errormessage="请输入长度为6-50的字符" id="articletitle" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章分类：</label>
			<div class="formControls col-xs-2 col-sm-2"> <span class="select-box">
				<select name="cate_id" class="select">
                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo htmlspecialchars($vo['id']); ?>"><?php echo htmlspecialchars($vo['cate_name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</span> </div>
				<label class="form-label col-xs-2 col-sm-2">文章标签：</label>
				<div class="formControls col-xs-2 col-sm-2">
					<input type="text" class="input-text"  placeholder="2-10个字符" value="" datatype="*2-10" aria-errormessage="请输入2至8个字符" placeholder="" id="keywords" name="tag">
				</div>
				<label class="form-label col-xs-4 col-sm-2">文章作者：</label>
				<div class="formControls col-xs-2 col-sm-1">
					<input type="text" class="input-text" placeholder="2-8个字符" datatype="*2-8" id="author" name="author">
				</div>

		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章摘要：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="summary" cols="" rows="" class="textarea"  placeholder="10-100个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" ></textarea>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">缩略图：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<div id="filePicker">选择图片</div>
                    <div id="img" class="formControls col-xs-offset-4" style="width: 250px;height: 150px;border: 1px dashed #ff6600">
                        上传图片
                    </div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文章内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="editor"  name="contents" type="text/plain" style="width:100%;height:400px;"></script>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 提交</button>
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>

<!--请在下方写此页面业务相关的脚本-->


<script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script>
				<script type="text/javascript" src="/static/admin/lib/ValidateForm5.5.2/js/Validform_v5.3.2_min.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    var uploader = WebUploader.create({

        // 选完文件后，是否自动上传。
        auto: true,

        // swf文件路径
        swf: "/static/admin/lib/webuploader/0.1.5/Uploader.swf",

        // 文件接收服务端。
        server: "<?php echo url('/admin/uploadArticleImage'); ?>",

        // 选择文件的按钮。可选。
        // 内部根据当前运行是创建，可能是input元素，也可能是flash.
        pick: '#filePicker',

        // 只允许选择图片文件。
        accept: {
            title: 'Images',
            extensions: 'gif,jpg,jpeg,bmp,png',
            mimeTypes: 'image/*'
        }
    });
    uploader.on( 'uploadSuccess', function( file,data ) {
       if (data.status=='fail'){
           $('#img').html('<span>图片上传失败</span>');
       }else {
           $('#img').html("<img src=/"+data.info+"><input type='hidden' name='img_url' value="+data.info+">");
       }
    });
    var ue=UE.getEditor('editor',{
        toolbars:[['undo','redo' ,'bold', 'italic','formatmatch', 'autotypeset',  'underline','forecolor', 'backcolor','|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|',
            'simpleupload','emotion','insertcode'
		]]
	})
    $(".form").Validform();
</script>
</body>
</html>