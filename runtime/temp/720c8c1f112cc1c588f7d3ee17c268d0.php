<?php /*a:4:{s:70:"G:\xamp\Apache24\htdocs\Blog\application\home\view\article\detail.html";i:1526993172;s:69:"G:\xamp\Apache24\htdocs\Blog\application\home\view\layout\header.html";i:1526996461;s:67:"G:\xamp\Apache24\htdocs\Blog\application\home\view\layout\side.html";i:1526996308;s:69:"G:\xamp\Apache24\htdocs\Blog\application\home\view\layout\footer.html";i:1526867374;}*/ ?>
﻿
﻿﻿<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title>博客天地</title>
    <meta name="description" content="博客天地-展现你的天地" />
    <meta name="keywords" content="博客天地-展现你的天地" />
    <!--[if lt IE 9]>
    <script src="/static/home/js/html5.js"></script>
    <script src="/static/home/js/css3-mediaqueries.js"></script>
    <![endif]-->
    <link rel="stylesheet" id="crayon-font-mydream-css" href="/static/home/css/mydream.css" type="text/css" media="all" />
    <link rel="stylesheet" id="style-css" href="/static/home/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="swiper-css-css" href="/static/home/css/swiper.min.css" type="text/css" media="all" />
    <script type="text/javascript" src="/static/home/js/jquery.min.js"></script>
    <link rel='stylesheet' id='iconfont-css'  href='/static/home/css/font.css' type='text/css' media='all' />
    <script src="/static/home/js/swipe.jquery.min.js"></script>
</head>
<body>
<header id="masthead" class="site-header">
    <div id="fix-header"></div>
    <div id="menu-box">
        <div id="main-menu">
            <hgroup class="logo-sites">
                <h1 class="site-title"> <a href="/"><img src="/static/home/images/logo.png" alt="blog" /></a> </h1>
            </hgroup>
            <div id="user-profile">
						<span class="nav-set">
				 	<span class="nav-login">
				 						<a href="#login" class="flatbtn" id="login-main" ><i class="iconfont icon-login"></i>登录</a>
										</span>
				</span>
            </div>
            <div id="sidr-close">
                <a href="#sidr-close" class="toggle-sidr-close">&times;</a>
            </div>
            <a href="#sidr-main" id="navigation-toggle" class="bars"><i class="iconfont icon-viewheadline"></i></a>
            <div id="site-nav-wrap">
                <nav id="site-nav" class="main-nav">
                    <div class="menu-container">
                        <ul id="menu" class="down-menu nav-menu">
                            <?php if(isset($cur)): ?>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item"><a href="/"><i class="iconfont icon-home"></i>首页</a></li>
                            <?php else: ?>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom  current_page_item"><a href="/"><i class="iconfont icon-home"></i>首页</a></li>
                            <?php endif; ?>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children" id="jishu"><a href="#"><i class="iconfont icon-codebraces"></i>技术分享</a>
                                <ul class="sub-menu">
                                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(isset($cate_id)&&$cate_id==$vo['id']): ?>
                                    <script type="text/javascript">
                                        $('#jishu').addClass('current-menu-item');
                                    </script>
                                    <?php else: endif; ?>
                                    <li  class="menu-item menu-item-type-taxonomy  menu-item-object-category"><a  href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><i class=""></i><?php echo htmlspecialchars($vo['cate_name']); ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category " ><a href="/au3"><i class="iconfont icon-codebraces"></i>AU3编程</a>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category " ><a href="#"><i class="iconfont"></i>给我留言</a>
                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category " ><a href="#"><i class="iconfont "></i>友情链接</a>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="clear"></div>
    </div>
<div class="breadcrumb">
   <a class="crumbs" title="返回首页" href="/">返回首页</a>
  <i class="iconfont icon-chevronright"> </i>
  <a href="">正文</a>
   </div>
   <div id="content">
    <div id="primary" class="single-area">
     <main id="main" class="site-main" role="main">
      <!-- 文章内容 -->
      <article id="post-93" class="post-93 post type-post status-publish format-standard hentry category-web-technology tag-ssl tag-startssl tag-43">
       <header class="entry-header">
        <div class="single-meta">
         <span><i class="iconfont icon-calendartext"></i>&nbsp;<?php echo htmlspecialchars(date('Y-m-d',!is_numeric($data['update_time'])? strtotime($data['update_time']) : $data['update_time'])); ?></span>
         <span><i class="iconfont icon-chartbar"><?php echo htmlspecialchars($data['view_count']); ?></i>&nbsp;</span>
        </div>
        <div class="clear"></div>
        <h1 class="entry-title"><?php echo htmlspecialchars($data['title']); ?></h1>
        <div class="single-tag">
         <i class="iconfont icon-tagmultiple"></i>&nbsp;标签：
         <a href="" rel="tag"><?php echo htmlspecialchars($data['tag']); ?></a>&nbsp;&nbsp;
        </div>
        <div class="clear"></div>
       </header>
       <div class="single-content">
         <?php echo $data['contents']; ?>
       </div>
       <!-- 文章点赞分享 -->
       <div class="clear"></div>
       <div id="social">
        <div class="social-main">
         <span class="share-sd"> <span class="share-s"><a href="javascript:void(0)" id="share-s" title="分享"><i class="iconfont icon-sharevariant"></i>分享</a></span>
          <div id="share">
           <ul class="bdsharebuttonbox">
            <li><a title="分享到QQ空间" class="iconfont icon-kongjian" data-cmd="qzone"></a></li>
            <li><a title="分享到QQ好友" class="iconfont icon-qq0" data-cmd="sqq"></a></li>
            <li><a title="分享到新浪微博" class="iconfont icon-sina" data-cmd="tsina"></a></li>
            <li><a title="分享到微信" class="iconfont icon-weixin0" data-cmd="weixin"></a></li>
           </ul>
          </div> </span>
         <div class="clear"></div>
        </div>
       </div>
      </article>
      <div id="copyright">
       <img alt="" src="/static/home/images/nick.jpg" class="avatar avatar-72" width="72" height="72" />
       <ul class="spostinfo">
        <li><a target="_blank" rel="nofollow" href="<?php echo url('/detail',['aid'=>encrypt($data['id'])]); ?>">原文链接</a></li>
        <li>版权声明：本站原创文章，于<?php echo htmlspecialchars(date('Y-m-d',!is_numeric($data['update_time'])? strtotime($data['update_time']) : $data['update_time'])); ?>，由<span rel="author"><?php echo htmlspecialchars($data['author']); ?></span>发表。</li>
        <li>转载请注明：<a href="<?php echo url('/detail',['aid'=>encrypt($data['id'])]); ?>" rel="bookmark" title=""><?php echo htmlspecialchars($data['title']); ?></a></li>
       </ul>
      </div>
      <div id="related-img">
       <!--如果存在tag标签，列出tag相关文章 -->
       <!-- 如果tag相关文章少于10篇，那么继续以分类作为相关因素列出相关文章 -->
       <?php if(is_array($randArt) || $randArt instanceof \think\Collection || $randArt instanceof \think\Paginator): $i = 0; $__LIST__ = $randArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <div class="r4">
        <div class="related-site">
         <figure class="related-site-img">
          <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><img src="/<?php echo htmlspecialchars($vo['img_url']); ?>" alt="<?php echo htmlspecialchars($vo['title']); ?>" /></a>
         </figure>
         <div class="related-title">
          <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><?php echo htmlspecialchars($vo['title']); ?></a>
         </div>
        </div>
       </div>
       <?php endforeach; endif; else: echo "" ;endif; ?>
       <div class="clear"></div>
      </div>
      <!-- 上下文 -->
      <nav class="nav-single">
       <?php if(count($preArt)==0): ?>
       <span class="meta-nav" rel="prev"><span class="post-nav"><i class="iconfont icon-chevronleft"></i> 没有了</span><br />已经是第一篇文章</span>
       <?php else: if(is_array($preArt) || $preArt instanceof \think\Collection || $preArt instanceof \think\Paginator): $i = 0; $__LIST__ = $preArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>" rel="prev"><span class="meta-nav"><span class="post-nav"><i class="iconfont icon-chevronleft"></i> 上一篇</span><br /><?php echo htmlspecialchars($vo['title']); ?></span></a>
       <?php endforeach; endif; else: echo "" ;endif; endif; if(count($nextArt)==0): ?>
       <span class="meta-nav"><span class="post-nav">没有了<br /></span>已是最后一篇文章</span>
       <?php else: if(is_array($nextArt) || $nextArt instanceof \think\Collection || $nextArt instanceof \think\Paginator): $i = 0; $__LIST__ = $nextArt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><span class="meta-nav"><span class="post-nav">下一篇<br /></span><?php echo htmlspecialchars($vo['title']); ?></span></a>
       <?php endforeach; endif; else: echo "" ;endif; endif; ?>
       <div class="clear"></div>
      </nav>
      <!-- 文章评论 -->
      <!-- 引用 -->
      <div id="comments" class="comments-area">
          <?php if(!is_array($comments)): ?>
          <h2 class="comments-title"> 此文章暂无人评论</h2>
          <?php else: ?>
       <h2 class="comments-title"> <?php echo htmlspecialchars($data['comment']); ?>条留言</h2>
       <ol class="comment-list">
           <?php if(is_array($comments) || $comments instanceof \think\Collection || $comments instanceof \think\Paginator): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="comment even thread-even depth-1 parent" id="comment-34">
         <div id="div-comment-34" class="comment-body">
          <div class="comment-author vcard">
           <img alt="" src="/static/home/images/tx-2.jpg" class="avatar avatar-48" width="48" height="48" />
           <!--<cite class="fn">卡珊德拉</cite> <span class="says">:</span>-->
           <strong> 匿名用户 </strong>
           <span class="comment-meta commentmetadata"><?php echo htmlspecialchars(date('Y-m-d H:i:s',!is_numeric($key)? strtotime($key) : $key)); ?><br /> <span class="comment-aux">  </span>
          </div>
          <p><?php echo htmlspecialchars($vo); ?></p>
         </div>
 </li>
           <?php endforeach; endif; else: echo "" ;endif; ?>
       </ol>
          <?php endif; ?>

       <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">给我留言</h3>
        <form action="/comment" method="post" id="commentform">
         <?php echo token(); ?>
         <div id="comment-author-info">
          <p class="comment-form-author"> <select name="author"><option value="">匿名用户</option></select> <label for="author">昵称</label> </p>
         </div>
         <div class="clear"></div>
         <p class="comment-tool">
		 <span class="smiley-box">
	评论内容
</span> </p>
         <p class="comment-form-comment"><textarea id="comment" name="comment" rows="4" tabindex="4"></textarea></p>
         <p class="form-submit"> <input id="submit" name="submit" type="submit" tabindex="5" value="提&nbsp;交" /> <input id="reset" name="reset" type="reset" tabindex="6" value="重&nbsp;写" /> <input type="hidden" name="art" value="<?php echo htmlspecialchars($data['id']); ?>" id="comment_post_ID" /> <input type="hidden" name="comment_parent" id="comment_parent" value="0" /> </p>
        </form>

       </div>
      </div>
      <!-- #comments -->
     </main>
    </div>
   <!-- 右侧开始-->
<div id="sidebar" class="widget-area">
    <!-- 右侧搜索框开始-->
    <aside id="search-2" class="widget widget_search">
        <div id="searchbar">
            <form method="get" id="searchform" action="www.lampol-blog.com/">
                <input type="text" value="" name="s" id="s" placeholder="输入搜索内容" required="" />
                <button type="submit" id="searchsubmit">搜索</button>
            </form>
        </div>
        <div class="clear"></div>
    </aside>
    <!-- 右侧搜索框结束-->
    <!-- 右侧分类开始-->
    <aside id="categories-2" class="widget widget_categories">
        <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>分类目录</h3>
        <ul>
            <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="cat-item cat-item-6" id="zzz"><i class="iconfont"></i><a href="<?php echo url('/list',['cid'=>encrypt($vo['id'])]); ?>"><?php echo htmlspecialchars($vo['cate_name']); ?></a> </li>
            <!--<?php if(isset($cate_id)&&$cate_id==$vo['id']): ?>-->
            <script type="text/javascript">
                $('#zzz').addClass('current-menu-item');
            </script>
            <!--<?php endif; ?>-->
            <?php endforeach; endif; else: echo "" ;endif; ?>
            <li class="cat-item cat-item-6" id="zzz"><i class="iconfont"></i><a href="/au3">AU3编程</a> </li>
        </ul>
        <div class="clear"></div>
    </aside>
    <!-- 右侧分类结束-->

    <!-- 近期文章开始-->
    <aside id="recent-posts-2" class="widget widget_recent_entries">
        <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>近期文章</h3>
        <ul>
            <?php if(is_array($new_art) || $new_art instanceof \think\Collection || $new_art instanceof \think\Paginator): $i = 0; $__LIST__ = $new_art;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li> <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><?php echo htmlspecialchars($vo['title']); ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <div class="clear"></div>
    </aside>
    <!-- 近期文章结束-->
    <aside id="img_cat-2" class="widget img_cat">
        <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>最多评论</h3>
        <div class="img_cat">
            <ul>
                <?php if(is_array($most) || $most instanceof \think\Collection || $most instanceof \think\Paginator): $i = 0; $__LIST__ = $most;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <div class="img-box">
                    <div class="img-x2">
                        <figure class="insets">
                            <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><img src="/<?php echo htmlspecialchars($vo['img_url']); ?>" alt="<?php echo htmlspecialchars($vo['title']); ?>" /></a>
                            <div class="img-title">
                                <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>" rel="bookmark"><?php echo htmlspecialchars($vo['title']); ?></a>
                            </div>
                        </figure>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="clear"></div>
    </aside>

    <!-- 人们标签开始-->
    <div class="sidebar-roll">
        <aside id="tag_cloud-2" class="widget tag_cloud">
            <h3 class="widget-title"><i class="iconfont icon-viewgrid"></i>热门标签</h3>
            <div class="tagcloud"><?php if(is_array($tags) || $tags instanceof \think\Collection || $tags instanceof \think\Paginator): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <a href="<?php echo url('/tag/'.encrypt($vo['tag'])); ?>" class="tag-cloud-link tag-link-14 tag-link-position-3" style="color:#84dde8;font-size: 15px;;"><?php echo htmlspecialchars($vo['tag']); ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </aside>
    </div>
    <!-- 热门标签结束-->
</div>
<div class="clear"></div>
</div>

<!-- 友情链接 -->
<!-- 版权说明 -->
    <!-- 友情链接 -->
<!-- 版权说明 -->
<footer id="footer">
    <div class="bottom-nav">
        <div class="menu-container">
            <ul id="menu" class="bottom-menu">
                <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="">文章归档</a></li>
                <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="">站点地图</a></li>
                <li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="">给我留言</a></li>
                <li id="menu-item-66" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66"><a href="">友情链接</a></li>
            </ul>
        </div>
    </div>
    <div id="contentinfo">
        Copyright &copy; 2007-2018
        <a href="" rel="home">Fallen</a> All rights reserved. by zyt-fallen
    </div>
</footer>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true, /**循环**/
        autoplayDisableOnInteraction: false,
        direction: 'vertical',	/**切换方向**/
        speed: 500,  /**幻灯片切换时间**/
        autoplay: 5000, /**设置，自动播放开启，并设置停留时间**/
        paginationClickable: true, /**导航可以点击**/
        effect: 'flip', /**切换效果**/
    });
</script>

<!-- 返回顶部 -->
<ul id="scroll">
 <li><a class="hidden-widget" href="javascript:hiddenwidget()" title="隐藏侧边栏"><i class="iconfont icon-windowclose"></i></a></li>
 <li><a class="scroll-top" title="返回顶部"><i class="iconfont icon-chevronup"></i></a></li>
 <li><a class="scroll-bottom" title="转到底部"><i class="iconfont icon-chevrondown"></i></a></li>
</ul>
</header>
</body>
</html>
    <script>
            $('#share-s').click(function () {
                $('#share').toggle();
            });
        window._bd_share_config = {
            common : {
                bdText : '<?php echo htmlspecialchars($data['title']); ?>',
                bdDesc : '<?php echo htmlspecialchars($data['summary']); ?>',
                bdUrl : window.location.href,
                bdPic : "<?php echo htmlspecialchars(app('request')->domain()); ?>/<?php echo htmlspecialchars($data['img_url']); ?>",
            },
            share : [{
                "bdSize" : 16
            }],
        }
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
    </script>