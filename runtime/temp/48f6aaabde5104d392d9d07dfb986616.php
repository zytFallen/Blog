<?php /*a:4:{s:67:"G:\xamp\Apache24\htdocs\Blog\application\home\view\article\tag.html";i:1526989736;s:69:"G:\xamp\Apache24\htdocs\Blog\application\home\view\layout\header.html";i:1526996461;s:67:"G:\xamp\Apache24\htdocs\Blog\application\home\view\layout\side.html";i:1526996308;s:69:"G:\xamp\Apache24\htdocs\Blog\application\home\view\layout\footer.html";i:1526867374;}*/ ?>

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
    <a class="crumbs" title="返回首页" href="/">首页</a>
    <span><i></i></span>
    <i class="iconfont icon-chevronright">  </i>
    <a href="#">技术分享</a>
    <i class="iconfont icon-chevronright">  </i>
    <a href=""><?php echo htmlspecialchars($tag); ?></a>
</div>
<div id="content">
    <div id="primary" class="content-area">
        <div id="page">
            <div class="catepory-title">
                <div class="entry-header">
                    <h1>分类：《<?php echo htmlspecialchars($tag); ?>》</h1>
                </div>
            </div>
            <main id="main" class="site-main" role="main">
                <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <article id="post-112" class="post-112 post type-post status-publish format-standard hentry category-computer-technology tag-ie tag-56">
                    <div class="art-desc">
                        <h3 class="art-t"> <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>" rel="bookmark" title="<?php echo htmlspecialchars($vo['title']); ?>"><?php echo htmlspecialchars($vo['title']); ?></a> </h3>
                        <div class="more">
                            <a href="" rel="bookmark"><i class="iconfont icon-import"></i></a>
                        </div>
                        <div class="clear"></div>
                        <div style="min-height:150px;margin:20px">
                            <div class="art-img">
                                <a href="<?php echo url('/detail',['aid'=>encrypt($vo['id'])]); ?>"><img src="/<?php echo htmlspecialchars($vo['img_url']); ?>" alt="<?php echo htmlspecialchars($vo['title']); ?>" /></a>
                            </div>
                            <span class="art-main"><?php echo htmlspecialchars($vo['summary']); ?></span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="art_ft">
                        <div class="art-pub">
                            <div class="views">
                                <i class="iconfont icon-chartbar"></i> <?php echo htmlspecialchars($vo['view_count']); ?>
                            </div>
                            <div class="cmnt">
                                <a href=""><i class="iconfont icon-messageprocessing"><?php echo htmlspecialchars($vo['comment']); ?></i> 评论</a>
                            </div>
                        </div>
                        <div class="art-info">
                            <span class="archive"><i class="iconfont icon-archive" aria-hidden="true"></i> <a href="<?php echo url('/list',['cid'=>encrypt($vo['cate_id'])]); ?>"><?php echo htmlspecialchars($vo['cate_name']); ?></a></span>
                            <span class="data"><i class="iconfont icon-calendartext"></i><?php echo htmlspecialchars(date('Y-m-d',!is_numeric($vo['update_time'])? strtotime($vo['update_time']) : $vo['update_time'])); ?></span>
                            <span class="tag"><i class="iconfont icon-tagmultiple"></i> <a href="" rel="tag"><?php echo htmlspecialchars($vo['tag']); ?></a></span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </article>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </main>
            <?php echo $article; ?>
        </div>
        <nav id="nav-below">
            <div class="nav-next"></div>
            <div class="nav-previous">
                <a href=""></a>
            </div>
        </nav>
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