<?php
/**
 * 验证器类
 */
namespace app\admin\common;


use think\Validate;

class Verify extends Validate
{
    protected $rule=[
        'username'=>'require',
        '__token__'=>'require',
        'password'=>'require',
        'captcha'=>'require|captcha',
    ];
    protected $message=[
        'username.require'=>'请输入用户名',
        'password'=>'请输入密码',
        '__token__'=>'表单令牌无效',
        'captcha.require'=>'请输入验证码',
        'captcha.captcha'=>'验证码错误，验证码为四位数字',
    ];
}