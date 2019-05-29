<?php
namespace app\admin\controller;

use app\admin\controller\Base;
use think\Db;
use think\Validate;
use think\Loader;
use app\admin\model\Admin as AdminModel;
class Admin extends Base
{

    public function lst()
    {
    	// 分页输出列表 每页显示3条数据
		$list = AdminModel::paginate(3);
		$this->assign('list',$list);
        return view('list');
    }
    
    public function add()
    {
    	//判断是否为post方法提交
    	if(request()->isPost()){

    		$data=[
    			'username'=>input('username'),
    			'password'=>md5(input('password')),
    		];

    		$validate = Loader::validate('Admin');
			if(!$validate->scene('add')->check($data)){
				$this->error($validate->getError()); die;
    		}


    		// if添加成功，就指向success页面
    		if(Db::name('admin')->insert($data)){
    			return $this->success('添加管理员成功！！','lst');
    		}else{
    			return $this->error('添加管理员失败！！');
    		}
    		return;
    	}
        return view();
    }

    public function edit(){

        $id=input('id');//传递过来的登录账号id
        $data=db('admin')->find($id);//根据id查询数据库

        //如果是提交过来的数据  edit.htm提交过来的
        if(request()->isPost()){
            $arr=[
                'id'=>input('id'),
                'username'=>input('username'),
            ];

            if(input('password_old') && input('password_new')){
                if($data['password'] == md5(input('password_old'))){//输入了正确的旧密码
                    $arr['password']=md5(input('password_new'));
                }
                else{
                    return $this->error('旧密码不正确！！');
                }
            }else{
                //如果为空则表示原来的密码不变
                $arr['password']=$data['password'];//查询的数据库数据
            }
            //验证
            $validate = Loader::validate('Admin');
            if(!$validate->scene('edit')->check($arr)){
                $this->error($validate->getError()); die;
            }
            // 更新数据表中的数据
            $edited=db('admin')->update($arr);
            if($edited!==false){
                return $this->success('修改管理员信息成功！！','lst');
            }else{
                return $this->error('修改管理员信息失败！！');
            }
            return;
        }
        $this->assign('data',$data);//在view中直接使用$data
        return $this->fetch();
    }

    public function del(){
        $id=input('id');
        //初始化管理员不能删除
        // 根据主键删除
        if($id!=1){
            //删除操作
            $deleted=db('admin')->delete(input('id'));
            if($deleted){
                return $this->success('删除管理员成功！！','lst');
            }else{
                return $this->error('删除管理员失败！！');
            }
        }else{
            return $this->error('初始化管理员不能删除！！');
        }
        
    }

    public function logout(){
        // 清除session（当前作用域）
        session(null);
        return $this->success('退出成功！！','login/index');
    }

}
