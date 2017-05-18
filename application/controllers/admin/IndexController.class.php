<?php
//后台首页控制器
class IndexController extends Controller
{
    public function indexAction()
    {
        include CUR_VIEW_PATH . 'index.html';
    }

    public function mainAction()
    {
        $adminModel = new AdminModel('admin');
        $admins = $adminModel->getAdmins();
        echo "<pre>";
        var_dump($admins);
        include CUR_VIEW_PATH . 'main.html';
    }

    public function topAction()
    {
        include CUR_VIEW_PATH . 'top.html';
    }

    public function menuAction()
    {
        include CUR_VIEW_PATH . 'menu.html';
    }

    public function codeAction()
    {
        //引入验证码类
        $this->library('Captcha');
        //实例化对象
        $captcha = new Captcha();
        //调用方法生成验证码
        $captcha->generateCode();
    }
}
