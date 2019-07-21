<?php

class ShufflingModel extends RelationModel{
	protected $_validate = array(
				array('title','/^[\w\x{4e00}-\x{9fa5}]+$/u','标题有误！'),
				array('title','','标题已经存在',0,'unique'),
				array('type','require','类型有误！'),
				array('img','require','图片有误！'),
                array('state','number','状态有误！'),
                array('order','number','排序有误！'),
				array('url','require','url有误！'),
		);
}
?>