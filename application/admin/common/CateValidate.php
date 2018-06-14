<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/5/9
 * Time: 10:32
 */

namespace app\admin\common;


use think\Validate;

class CateValidate extends Validate
{
    protected $rule=[
        'cate_name'=>'require|length:2,15|unique:category|token',
        'cate_desc'=>'require|length:5,50',
    ];
    protected $message=[
        'cate_name.require'=>'请输入分类名称',
        'cate_desc.require'=>'请输入分类描述',
        'cate_name.length'=>'请检查分类名称输入长度',
        'cate_desc.length'=>'请检查类描述输入长度',
    ];
}