<?php

namespace app\admin\controller;


use app\admin\common\Base;
use think\Image;
use think\Request;

class Uploadfile extends Base
{
    /**
     * 上传文章图片缩略图
     * @param Request $request
     */
    public function articleImage(Request $request)
    {
       $validate=[
           'ext'=>'jpg,jpeg,png,gif',
           'size'=>'1048576',
       ];
       $path='uploads/artImage';
        $file=$request->file('file');
        $info=$file->validate($validate)->move($path);
        if ($info){
           $name=$info->getPathname();
           $image=Image::open($name);
           $image->crop(250,150)->save($name);
           $data=['status'=>'success','info'=>$name];
        }else{
            $data=['status'=>'fail','indo'=>$info->getError()];
        }
        return json($data);
    }
}