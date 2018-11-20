<?php
namespace app\web\controller;
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 2018/11/20
 * Time: 12:04
 */
use think\Controller;
use think\Db;
use think\Log;
use think\Request;

class Index extends Controller
{
    /**
     * 轮播图
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $images = Db::table('fa_images')->where('staswitch',1)->order('weigh','desc')->select();
        $this->assign('images',$images);
        return $this->fetch();
    }
}