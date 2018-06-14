<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/5/20
 * Time: 23:16
 */

namespace app\home\controller;
use think\Controller;
use think\facade\View;

class Base extends Controller
{
    public function initialize ()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $art=new \app\home\model\Article();
        $cate=$art->getCate();
        $new_art=$art->newArt();
        $tags=$art->getHotTag();
        $mostComment=$art->getMostComment();
        View::share('most',$mostComment);
        View::share('cate',$cate);
        View::share('new_art',$new_art);
        View::share('tags',$tags);
    }
}