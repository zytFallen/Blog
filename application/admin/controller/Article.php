<?php

namespace app\admin\controller;

use app\admin\common\Base;
use app\admin\model\Cate;
use think\Request;
use app\admin\model\Article as ArticleModel;

class Article extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     * @throws \think\exception\DbException
     */
    public function index ()
    {
        $art  = new ArticleModel();
        $cate = Cate::all();
        $data=$art->alias('art')->field(['art.id', 'art.title', 'art.author', 'art.view_count', 'category.cate_name','art.update_time'])->join('category','art.cate_id=category.id')->paginate(4);
       //$data = $art->field(['id', 'title', 'author', 'view_count', 'cate_id','create_time'])->select();
       return $this->fetch('index', ['title' => '文章列表', 'data' => $data,'cate'=>$cate,'count'=>$art->count()]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     * @throws \think\exception\DbException
     */
    public function create ()
    {
        $cate = Cate::all();
        if (!$cate){
            return $this->redirect('/cate');
        }
        return $this->fetch('add', ['title' => '文章添加', 'cate' => $cate]);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request $request
     * @return \think\Response
     */
    public function save (Request $request)
    {
        $data   = $request->except(['file']);
        $result = ArticleModel::saveArticle($data);
        $mes    = !$result ? "<script>alert('添加失败'); location.href='/article/create';</script>" : "<script>alert('添加成功'); location.href='/article/create';</script>";
        return  $mes;
    }

    /**
     * 显示指定的资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function read ($id)
    {
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int $id
     * @return \think\Response
     */
    public function edit ($id)
    {
        $data=ArticleModel::getOne($id);
        $cate = Cate::all();
        return $this->fetch('edit',['title'=>'文章编辑','data'=>$data,'cate'=>$cate]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request $request
     * @param  int $id
     * @return \think\Response
     */
    public function update (Request $request, $id)
    {
        $data=$request->except(['_method','file']);
        $res=ArticleModel::updateOne($data,$id);
        if (!$res){
            return $this->error('更新失败','/article','2');
        }
        return $this->success('更新成功','/article','','1');
    }

    /**
     * 删除指定资源
     *
     * @param  int $id
     * @return \think\Response
     */
    public function delete ($id)
    {

        $result=ArticleModel::deleteOne($id);
        if ($result){
            $message='删除成功';
            $status=1;
        }else{
            $message='删除失败';
            $status=0;
        }
        return ['message'=>$message,'status'=>$status];
    }
    public function delSum(Request $request){
        $data=$request->only('ck');
        $res=ArticleModel::destroy($data['ck']);
        if ($res){
            return '删除成功';
        }else{
            return '删除失败';
        }
    }
}
