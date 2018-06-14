<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/5/10
 * Time: 10:09
 */

namespace app\home\controller;
use think\Db;
use think\Request;
use Predis\Client as Redis;

class Article extends Base
{
    //展示文章
    public function articleList($cid)
    {
        $cate_id=decrypt($cid);
        $cate_name=Db::name('category')->where('id',$cate_id)->field('cate_name')->find();
        $article=new \app\home\model\Article();
        $art=$article->getCateArticle($cate_id);
        return $this->fetch('list',['article'=>$art,'cate_name'=>$cate_name['cate_name'],'cate_id'=>$cate_id]);
    }
    //显示文章详情
    public function detail($aid)
    {
        $id=decrypt($aid);
        $art=new \app\home\model\Article();
        $data=Db::name('article')->where('id',$id)->find();
        $randArt=$art->getRandArt($id);
        $preArt=$art->getPreArticle($id);
        $nextArt=$art->getNextArt($id);
        //dump($nextArt);
        $art->addViews($id);
        $config=config('redis.');
        $redis=new Redis($config);
        $key='article_'.$id;
        $res=$redis->smembers($key);
        if (count($res)!==0){
            $comments=$this->dodata($res);
        }else{
            $comments='';
        }
        $this->assign('comments',$comments);
        return $this->fetch('detail',['data'=>$data,'cate_id'=>$id,'randArt'=>$randArt,'preArt'=>$preArt,'nextArt'=>$nextArt]);
    }
    //AU3
    public function au3()
    {
        return $this->fetch();
    }
    //根据标签查询文章
    public function getTagArt($tag)
    {
        $tagle=decrypt($tag);
        $article=new \app\home\model\Article();
        $art=$article->getTagArticle($tagle);
        //dump($art);
        return $this->fetch('tag',['article'=>$art,'tag'=>$tagle]);
    }
    public function comment()
    {
        $comment=input('post.comment','','htmlspecialchars,trim');
        $artid=input('post.art');
        $time=time();
        $config=config('redis.');
        $key='article_'.$artid;
        $vaule=$comment.'==|=='.$time;
        $redis=new Redis($config);
        $res=$redis->sadd($key,$vaule);
        if (!$res){
            return $this->error('评论失败','','',1);
        }
        $article=new \app\home\model\Article();
        $article->addComment($artid);
        return "<script>alert('评论成功');history.back();</script>";
    }
    public function dodata($res){
        foreach ($res as $item) {
            list($content,$time)=explode('==|==',$item);
            $arr[$time]=$content;
        }
        krsort($arr);
        return $arr;
    }

}