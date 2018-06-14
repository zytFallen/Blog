<?php

namespace app\admin\model;


use think\Db;
use think\Model;

class Cate extends Model
{
    protected $table='blog_category';
    protected $autoWriteTimestamp='int';
    protected $createTime='create_time';
    protected $updateTime='update_time';

    /**
     * @param $name分类名称
     * @param $desc分类描述
     * @return bool
     */
    public static function add($name,$desc){
        $res=self::create(['cate_name'=>trim($name),'cate_desc'=>trim($desc)]);
        return $res?true:false;
    }

    /**
     * @param $id
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public static function getOne($id){
        $res=self::find($id)->getData();
        return $res;
    }

     public static function deleteOne ($id)
     {
         $res=Db::name('article')->where('cate_id',$id)->find();
         if ($res){
             $message='删除失败，请确认该分类下是否有文章';
             $status=0;
         }else{
             if (!self::where('id',$id)->delete()){
                 $message='删除失败，请确认该分类是否存在';
                 $status=0;
             }else{
                 $message='删除成功';
                 $status=1;
             }
        }
         $data=['message'=>$message,'status'=>$status];
         return $data;
     }

}