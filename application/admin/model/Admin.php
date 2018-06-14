<?php

namespace app\admin\model;

use think\Model;

class Admin extends Model
{
    protected $prefix='blog_';
    protected $pk='id';
    protected $autoWriteTimestamp='int';
    protected $createTime='create_time';
    protected $updateTime='update_time';
    public function getAllAdmin()
    {
        $res=$this->field('password',true)->paginate(3);
        return $res;
    }
}
