<?php

/**
 * Created by PhpStorm.
 * User: wujunyuan
 * Date: 2017/7/3
 * Time: 13:19
 * 游戏大厅控制器，继承Common，作用是从Common中统一控制用户登录
 */
namespace app\game\controller;

use think\Db;
use think\Controller;

class Redirect extends Common
{
    /**
     * 显示游戏大厅界面
     */
    public function index()
    {
        $this->success('2', url('Index/index'),null,5);
    }
    /**
     * 跳转到指定页面
     */
    public function jumpToUrl()
    {
        //控制器名称
        $jumpToController = input('jumpToController');
        //控制器指定跳到的方法
        $jumpToModel = input('jumpToModel');
        //参数名
        $jumpParamName = input('jumpParamName');
        //参数值
        $jumpParamValue = input('jumpParamValue');
        //拼接跳转的路径，PHP用的是点符号拼接字符串
        $jumpTourl=$jumpToController.'/'.$jumpToModel;
        //code指定为整数型2，会展示默认加载图片
        $this->success('2', url($jumpTourl, array($jumpParamName => $jumpParamValue)));
    }


}
