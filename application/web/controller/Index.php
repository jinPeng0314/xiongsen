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
    public function index()
    {
        return $this->fetch();
    }
}