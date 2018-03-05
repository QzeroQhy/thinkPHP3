<?php
namespace Admin\Controller;
use Think\Controller;
class RoleController extends Controller {
    public function indexAction(){
		$data["total"]=0;
    	$data["rows"]=array();
	    if(IS_POST){
	    	$Role=D("Role");
			$params=I('post.');
			unset($_POST);
			$data=array(
				'total'=>0,
				'rows'=>array()
			);
			$condition='';
			$data["total"]=$Role->where($condition)->count();
			$data["rows"]=$Role->where($condition)->order($orderby)->limit($params["offset"],$params["pageSize"])->select();
			echo json_encode($data);
		}else{
			$this->display();
		}
    }
	public function addAction(){
		if(IS_POST){
			$data=I('post.');
			unset($data['id']);
			$result=D('role')->addData($data);
			if($result){
				$this->success('添加成功',U('Admin/Role/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->display();
		}
    }
	public function editAction(){
        $this->display();
    }
}