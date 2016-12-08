<?php
namespace Home\Controller;
use Think\Controller;
// use Think\Model;
//use Home\Model\UserModel;
class UserController extends Controller {
    public function index(){
        echo 'user index';
    }
    public function test($user,$pass){
        echo 'user:'.$user.'<br>pass:'.$pass;
    }
    public function model(){
//        echo 'model';
//        创建Model基类，传递User表，think_user,第一个字母大写
//        $user = new Model('User');
//        $user = M('user');
//        var_dump($user->select());
//        $user = new UserModel();
//        var_dump($user->select());
//        $user = D('Admin/User');
//        var_dump($user->select());
//        $user = D('User');
//        var_dump($user->query("SELECT * FROM think_user WHERE user = '蜡笔小新'"));
//        var_dump($user->select());
//        var_dump($user->getDbFields());
//        $user = M('User');
//        var_dump($user->where('id=1')->select());
//        $condition['id']= 1;
//        $condition['user']='蜡笔小新';
//        $condition['_logic']='OR';
//        $condition = new \stdClass();
//        $condition -> id =1;
//        $condition -> user = '蜡笔小新';
//        $condition -> _logic = 'OR';
//        var_dump($user->where($condition)->select());
//        $map['user'] = array('like',array('%小%','%蜡%'),'AND',);
//        $map['id'] = array('between','1,3');
//        $map['id'] = array('not in','1,2,4');
//        $map['id'] = array('exp','=1');
//        $map['id'] = array('exp','=1 AND user ="蜡笔小新"');
//        $map['id'] = array('exp','=1');
//        $map['_logic'] = 'OR';
//        $map['user'] = array('exp','="蜡笔小新"');
//        $map['id&user'] = array(array('gt',0),'蜡笔小新','_multi'=>true);
//        $map['id'] = array(array('gt',0),array('lt',2),'OR');
//        $map['id'] = array('eq',1);
//        $map['_string'] = 'user = "蜡笔小新" OR email = "xiaowanzi@163.com"';
//        $map['_logic'] = 'OR';
        //$map['_query'] = 'user=蜡笔小新&email=xiaoin@163.com&_logic=OR';
//        $where['id'] = 2;
//        
//        $map['_complex'] = $where;
//        $map['_logic'] = 'OR';
        
//        var_dump($user->getByUser('蜡笔小新'));
//        var_dump($user->query("SELECT * FROM think_user"));
//      $user = M('User');
//            var_dump($user->execute("UPDATE think_user SET user='蜡笔大新' WHERE id =1"));
//        var_dump($user->where('id>1')->order('date DESC')->limit(2)->select());
//        var_dump($user->where($map)->where('user="蜡笔小新"')->select());
//        var_dump($user->order(array('id'=> 'DESC'))->select());
//        var_dump($user->order('id desc,email desc')->select());
//        var_dump($user->field('id,user')->select());
        // var_dump($user->field(array('id','user'))->select());
        // var_dump($user->table('__USER__')->select());
        // var_dump($user->table('__INFO__')->select());
        // var_dump($user->field('a.id,b.id')->table(array('think_user'=>'a','think_info'=>'b'))->select());
        // var_dump($user->join('think_user ON think_info.id=think_user.id')->select());
        // var_dump($user->select());
        $user = D('User');
//      var_dump($user->cache(true)->select());
//		var_dump($user->scope('sql2',array('limit'=>4))->select());
//		var_dump($user->scope(array('where'=>1,'order'=>'date DESC','limit'=>2))->select());
		var_dump($user->sql2()->select());
    }
}