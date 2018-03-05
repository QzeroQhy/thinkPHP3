<?php
namespace Admin\Model;
use Think\Model;
class RoleModel extends Model {
	/**
	 * 自动验证
	 */
	protected $_validate = array(
		array('name','require','角色名称不能为空！'),//角色名称必须
		array('name','','角色名称已经存在！',1,'unique',1),//验证角色名称是否已经存在
	);
	/**
	 * 新增
	 */
	public function addData($data){
		//对data数据进行验证
		if(!$data=$this->create($data)){
			//验证不通过返回错误
			return false;
		}else{
			//验证通过
			$result=$this->add($data);
			return $result;
		}
	}
	/**
	 * 修改
	 */
	public function editData($map,$data){
		//对data数据进行验证
		if(!$data=$this->create($data)){
			//验证不通过返回错误
			return false;
		}else{
			//验证通过
			$result=$this->where(array($map))->save($data);
			return $result;
		}
	}
}