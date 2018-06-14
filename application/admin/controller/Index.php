<?php

namespace app\admin\controller;

use app\admin\common\Base;

class Index extends Base
{
    public function index ()
    {
        if (!$this->isLogin()){
            return "<script>location.href='/admin/login'</script>";
        }
        $this->assign('title', '博客天地-后台管理');
        return $this->fetch();
    }

    public function welcome ()
    {
        $this->assign('title', '我的桌面');
        $this->assign('ip', $_SERVER['REMOTE_ADDR']);
        return $this->fetch();
    }

}
