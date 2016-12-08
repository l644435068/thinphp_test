<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class AdminController extends Controller{
    public function index(){
        $user = new Model('User');
        var_dump($user->select());
    }
}