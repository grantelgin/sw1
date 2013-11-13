<?php
use Orm\Model;

class Model_OilColor extends Model
{
	protected static $_properties = array(
		'id',
		'id',
		'name',
		'pantonename',
		'pantoneid',
		'c',
		'm',
		'y',
		'k',
		'r',
		'b',
		'g',
		'a',
		'notes',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('id', 'Id', 'required|valid_string[numeric]');
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('pantonename', 'Pantonename', 'required|max_length[255]');
		$val->add_field('pantoneid', 'Pantoneid', 'required|max_length[255]');

		return $val;
	}

}
