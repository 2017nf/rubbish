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

class Index extends Common
{
    /**
     * 显示游戏大厅界面
     */
    public function index()
    {
        //model('room') -> accounttemp(2);
        //echo '这里游戏大厅';
        $room = model('room')->where(array('id' => $this->memberinfo['room_id']))->find();
        if ($room) {
            $room = $room->toArray();
            $this->assign('room', $room);
        }else{
            $this->assign('room', null);
        }
        return $this->fetch();
    }
    public function gotoroom()
    {
        $room_id = input('room_id');
        $this->success('创建成功', url('Redirect/jumpToUrl', array('jumpParamName' => 'room_id','jumpToController' => 'Douniuplaywjy','jumpToModel' => 'index','jumpParamValue' =>$room_id )));
    }


}
