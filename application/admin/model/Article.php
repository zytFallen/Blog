<?php
/**
 * Created by PhpStorm.
 * User: Fallen
 * Date: 2018/5/9
 * Time: 23:07
 */

namespace app\admin\model;


use think\Model;

class Article extends Model
{
    protected $autoWriteTimestamp='int';
    protected $createTime='create_time';
    protected $updateTime='update_time';

    //插入一条数据
    public static function saveArticle($data)
    {
        $res=self::create($data);
        return $res;
    }
    //获取一条数据
    public static function getOne($id)
    {
        $data=self::where('id',$id)->field(['view_count','create_time','update_time'],true)->find();
        return $data;
    }
    //更新一条记录
    public static function updateOne($data,$id)
    {
        $res=self::where('id',$id)->update($data);
        return $res;
    }
    //删除一条记录
    public static function deleteOne($id)
    {
        $res=self::where('id',$id)->delete();
        return $res;
    }

}