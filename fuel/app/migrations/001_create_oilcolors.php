<?php

namespace Fuel\Migrations;

class Create_oilcolors
{
	public function up()
	{
		\DBUtil::create_table('oilcolors', array(
			'id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'PantoneName' => array('constraint' => 255, 'type' => 'varchar'),
			'PantoneId' => array('constraint' => 255, 'type' => 'varchar'),
			'C' => array('constraint' => 11, 'type' => 'int'),
			'M' => array('constraint' => 11, 'type' => 'int'),
			'Y' => array('constraint' => 11, 'type' => 'int'),
			'K' => array('constraint' => 11, 'type' => 'int'),
			'R' => array('constraint' => 11, 'type' => 'int'),
			'B' => array('constraint' => 11, 'type' => 'int'),
			'G' => array('constraint' => 11, 'type' => 'int'),
			'A' => array('constraint' => 255, 'type' => 'varchar'),
			'notes' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('oilcolors');
	}
}