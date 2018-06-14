<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/5/7
 * Time: 13:42
 */

namespace app\admin\controller;


use app\admin\common\Base;
use app\admin\common\Verify;
use app\admin\model\Admin as AdminModel;
use think\captcha\Captcha;
use think\facade\Config;
use think\facade\Session;
use think\Request;

class Login extends Base
{
    /**
     * 渲染登录页面
     * @return mixed
     */
    public function login ()
    {
        if ($this->isLogin()){
            return "<script>location.href='/admin/index'</script>";
        }
        $this->assign('title', 'Blog-后台登录');
        return $this->fetch('index/login');
    }

    public function check (Request $request)
    {
        $status=0;//获取初始登录状态
        $data=$request->param();
        $verify=new Verify();
        if (!$verify->check($data)){//数据校验
            $message=$verify->getError();
        }else{
            $username=$data['username'];//用户名
            $result=AdminModel::get(['username'=>$username]);
            $password=md5($data['password'].$result['salt']);//密码
            if (!$result){
                $message='该用户不存在';
            }elseif ($result['password']!==$password){
                $message='密码错误';
            }else{
                $message='用户名密码匹配成功';
                $status=1;
                $result->setInc('login_count');
                Session::set('admin',$result->getData());
            }
        }
        return ['message'=>$message,'status'=>$status];
    }

    /**
     * 生成验证码
     * @return \think\Response
     */
    public function captcha ()
    {
        Config::set('captcha.useNoise',false);//[ 'useNoise' => false], 'captcha'
        $config = Config::pull('captcha');//Config::get('captcha.')
        $verify = new Captcha($config);
        return $verify->entry();
    }

    /**
     * 注销登录
     */
    public function logout()
    {
        Session::delete('admin');
        return "<script type='text/javascript'>location.href='/admin/login'</script>";
    }
}