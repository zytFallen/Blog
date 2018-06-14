<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/5/8
 * Time: 17:55
 */

namespace app\admin\common;


use think\Controller;
use think\facade\Session;

class Base extends Controller
{
  protected function isLogin(){
      if (!Session::get('admin')){
          return false;
      }else{
          return true;
      }
  }

}