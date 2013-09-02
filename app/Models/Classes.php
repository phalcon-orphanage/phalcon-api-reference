<?php

namespace ApiDocs\Models;

use Phalcon\Mvc\Model\Relation;

/**
 * Class Classes
 * @package ApiDocs\Models
 * @property Versions $versionObj;
 * @property \Phalcon\Mvc\Model\Resultset\Simple $constants;
 * @property \Phalcon\Mvc\Model\Resultset\Simple $properties;
 * @property \Phalcon\Mvc\Model\Resultset\Simple $methods;
 */
class Classes extends Model
{
	public $id;
	public $version;
	public $namespace;
	public $name;
	public $is_interface;
	public $is_abstract;
	public $is_final;
	public $file;
	public $docs;
	public $notes;
	public $initializer_line;
	public $extends;
	public $implements;


	public function initialize()
	{
		$this->belongsTo('version', __NAMESPACE__.'\Versions', 'version', array(
			'alias'      => 'versionObj',
			'foreignKey' => true,
		));
		$this->hasMany('id', __NAMESPACE__.'\Constants', 'class_id', array(
			'alias'      => 'constants',
			'foreignKey' => array('action' => Relation::ACTION_CASCADE)
		));
		$this->hasMany('id', __NAMESPACE__.'\Properties', 'class_id', array(
			'alias'      => 'properties',
			'foreignKey' => array('action' => Relation::ACTION_CASCADE)
		));
		$this->hasMany('id', __NAMESPACE__.'\Methods', 'class_id', array(
			'alias'      => 'methods',
			'conditions' => 'valid >= :dttm:',
			'bind'       => array('dttm', date('Y-m-d H:i:s')),
			'order'      => 'name DESC',
			'foreignKey' => array('action' => Relation::ACTION_CASCADE)
		));
	}
}