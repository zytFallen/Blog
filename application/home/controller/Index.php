<?php
namespace app\home\controller;
use  app\home\model\Article as Art;

class Index extends Base
{

    public function index()
    {
        $art=new Art();
        $article=$art->getAllArticle();
        // dump($art->getAllArticle());
        $this->assign('cur','cur');
        return $this->fetch('',['article'=>$article,]);
    }
}
