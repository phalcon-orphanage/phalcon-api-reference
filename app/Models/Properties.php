<?php

namespace ApiDocs\Models;


class Properties extends Model
{
	public $id;
	public $class_id;
	public $name;
	public $visibility;
	public $is_static;
	public $type;
	public $access;
	public $getter;
	public $setter;
	public $docs;
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
	}


	public function beforeValidation()
	{
		parent::beforeValidation();
		if($this->access === null)
			$this->access = new \Phalcon\Db\RawValue('""');
	}
}