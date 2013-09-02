<?php

namespace ApiDocs\Models;

use Phalcon\Mvc\Model\Relation;


/**
 * Class Versions
 * @package ApiDocs\Models
 * @property Classes[] $classes
 */
class Versions extends Model
{
	public $version;
	public $changelog;
	public $notes;
	public $github_url;

	public function initialize()
	{
		$this->hasMany('version', __NAMESPACE__.'\Classes', 'version', array(
			'alias'      => 'classes',
			'foreignKey' => array('action' => Relation::ACTION_CASCADE)
		));
	}


}