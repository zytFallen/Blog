<?php

namespace app\admin\controller;

use app\admin\common\Base;
use app\admin\common\CateValidate;
use app\admin\model\Cate;
use think\Request;

class Category extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        /**
         * 获取所有信息并分页
         */
        $count=count(Cate::all());
        $data=Cate::where('id','>=',1)->paginate(3);
        return $this->fetch('',['title'=>'分类列表','list'=>$data,'count'=>$count]);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        return $this->fetch('',['title'=>'分类编辑']);
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $validate=new CateValidate();
        if ($request->isPost()){
            $data=$request->param();
            if (!$validate->check($request->param())){
                $mes="<script type='text/javascript'>alert('添加失败，请确认该分类是否存在，并检查你的表单数据');history.go(-1);</script>";
            }else{
            $cate=Cate::add($data['cate_name'], $data['cate_desc']);
                $mes = $cate ? "<script type='text/javascript'>alert('添加成功');location.href='/cate';</script>" : "<script type='text/javascript'>alert('添加失败');history.go(-1);</script>";
        }
        }
        return $mes;
    }

    /**
     * 显示指定的资源
     *
     * @return \think\Response
     */
    public function read()
    {

    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        $data=Cate::getOne($id);
        $count=count(Cate::all());
        $page=Cate::where('id','>=',1)->paginate(3);
        return $this->fetch('index',['title'=>'分类列表','list'=>$page,'cate'=>$data,'count'=>$count]);
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        $validate=new CateValidate();
        $data=$request->only(['cate_name','cate_desc']);
        if ($validate->check($data)){
           $mes= "<script type='text/javascript'>alert('更新失败，请确认该分类是否存在，并检查你的表单数据');history.go(-1);</script>";
        }else{
            $admin=Cate::get($id);
            $res=$admin->isUpdate(true)->save($data);{
                $mes = $res ? "<script type='text/javascript'>alert('更新成功');location.href='/cate';</script>" : "<script type='text/javascript'>alert('更新成功');location.href='/cate';</script>";
            }
        }
        return $mes;
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $res=Cate::deleteOne($id);
        return $res;
    }
}
