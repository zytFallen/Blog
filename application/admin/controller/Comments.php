<?php
/**
 * Created by PhpStorm.
 * 评论管理
 */

namespace app\admin\controller;


use app\admin\common\Base;

class Comments extends Base
{
    public function index()
    {
        return $this->fetch('comment-list',['title'=>'评论列表']);
    }
    public function feedback(){
        return $this->fetch('comment-list',['title'=>'意见反馈']);
    }

}