<?php
namespace Common\Model;

use Think\Model;

/**
 * 留言模型
 */
class MessageModel extends Model
{
	protected $_validate = array(
		array('phone', '/^1\d{10}$/', '手机格式不正确', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
		array('email', 'email', '邮箱格式不正确', self::EXISTS_VALIDATE, 'regex', self::MODEL_BOTH),
	);


	
}