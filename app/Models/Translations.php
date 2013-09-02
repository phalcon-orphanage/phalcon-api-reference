<?php

namespace ApiDocs\Models;

class Translations extends Model
{
	public $lang;
	public $version;
	public $class_id;
	public $constant_id;
	public $property_id;
	public $method_id;
	public $argument_id;
	public $text;


	public function initialize()
	{
		$this->belongsTo('version', __NAMESPACE__.'\Versions', 'version', array(
			'alias'      => 'versionObj',
			'foreignKey' => true,
		));
		$this->belongsTo('class_id', __NAMESPACE__.'\Classes', 'id', array(
			'alias'      => 'classObj',
			'foreignKey' => true,
		));
		$this->belongsTo('constant_id', __NAMESPACE__.'\Constants', 'id', array(
			'alias'      => 'constantObj',
			'foreignKey' => true,
		));
		$this->belongsTo('property_id', __NAMESPACE__.'\Properties', 'id', array(
			'alias'      => 'propertyObj',
			'foreignKey' => true,
		));
		$this->belongsTo('method_id', __NAMESPACE__.'\Methods', 'id', array(
			'alias'      => 'methodObj',
			'foreignKey' => true,
		));
		$this->belongsTo('argument_id', __NAMESPACE__.'\Arguments', 'id', array(
			'alias'      => 'argumentObj',
			'foreignKey' => true,
		));
	}
}