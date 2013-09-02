<?php

namespace ApiDocs\Models;

use Phalcon\Mvc\Model\Relation;


class Methods extends Model
{
	public $id;
	public $class_id;
	public $name;
	public $visibility;
	public $is_static;
	public $is_abstract;
	public $is_final;
	public $returns;
	public $docs;
	public $example;
	public $line;
	public $defined_by;

	const VISIBILITY_PUBLIC    = 'public';
	const VISIBILITY_PROTECTED = 'protected';
	const VISIBILITY_PRIVATE   = 'private';

	protected $_validation = array(
		'visibility' => array(
			'Ph\InclusionIn' => array(
				'domain' => array(
					self::VISIBILITY_PUBLIC,
					self::VISIBILITY_PROTECTED,
					self::VISIBILITY_PRIVATE,
				),
			),
		),
	);

	public function initialize()
	{
		$this->belongsTo('class_id',  __NAMESPACE__.'\Classes', 'id', array(
			'alias'      => 'class',
			'foreignKey' => true,
		));
		$this->hasMany('id', __NAMESPACE__.'\Arguments', 'method_id', array(
			'alias'      => 'arguments',
			'foreignKey' => array('action' => Relation::ACTION_CASCADE)
		));
	}
}