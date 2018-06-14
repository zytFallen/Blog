<?php

namespace app\home\model;


use app\admin\model\Cate;
use think\Db;
use think\Model;

class Article extends Model
{
    public $autoWriteTimestamp='int';
    protected $createTime='create_time';
    protected $updateTime='update_time';

    /**
     * 获取文章分页
     * @return \think\Paginator
     * @throws \think\exception\DbException
     */
    public  function getAllArticle()
    {
        $data=$this->alias('art')->field(['art.id','art.tag','art.cate_id','art.comment', 'art.title','art.summary' ,'art.author','art.img_url', 'art.view_count', 'category.cate_name','art.update_time'])->join('category','art.cate_id=category.id')->order('id')->paginate(3);
       return $data;
    }

    /**
     * 获取所有文章分类
     */
    public function getCate()
    {
        $data=Cate::all();
        return $data;
    }

    /**
     * 获取分类文章
     */
    public function getCateArticle($cate_id)
    {
        $data=$this->alias('art')->field(['art.id','art.tag' ,'art.title','art.summary', 'art.comment','art.author','art.img_url', 'art.cate_id','art.view_count', 'category.cate_name','art.update_time'])->join('category','art.cate_id=category.id')->where('cate_id',$cate_id)->order('id')->paginate(2);
        return $data;
    }
    //添加浏览次数
    public function addViews($id){
        $res=$this->where('id',$id)->setInc('view_count');
        return $res;
    }
    //获取最新文章
    public function newArt(){
        return $this->field('id,title')->order('update_time DESC')->limit(6)->select();
    }
    //获取热门标签
    public function getHotTag(){
        $res=$this->field('tag,view_count,id')->order('view_count DESC')->limit(4)->select();
        return $res;
    }
    //获取随机两篇分类文章
    public function getRandArt($id){
        $cate_id=$this->where('id',$id)->value('cate_id');
        $rand=Db::query("SELECT `id`, `title`,`img_url` FROM blog_article WHERE `cate_id`=$cate_id ORDER BY RAND()  LIMIT 2");
        return $rand;
    }
    public function getPreArticle($id){
        $preArt=$this->where('id','<',$id)->field('id,title')->order('id DESC')->limit(1)->select();
        return $preArt;
    }
    //下一篇文章
    public function getNextArt($id){
        $next=$this->where('id','>',$id)->field('id,title')->order('id')->limit(1)->select();
        return $next;
    }
    public function getTagArticle($tag)
    {
        $res=$this->alias('art')->field(['art.id','art.tag' ,'art.title','art.summary' ,'art.author','art.img_url', 'art.cate_id','art.view_count','art.comment', 'category.cate_name','art.update_time'])->join('category','art.cate_id=category.id')->where('tag','like',"%$tag%")->order('id')->paginate(2);;
        return $res;
    }
    public function addComment ($id)
    {
       return $this->where('id',$id)->setInc('comment');
    }
    //获得评论数最多的文章
    public function getMostComment()
    {
        $res=$this->field('id,title,img_url')->order('comment DESC')->limit(4)->select();
        return $res;
    }
}