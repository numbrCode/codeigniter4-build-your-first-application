<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNewTable extends Migration
{
	/*
		CREATE TABLE `news` (
			`id` int(11) NOT NULL,
			`title` varchar(128) NOT NULL,
			`slug` varchar(128) NOT NULL,
			`body` text NOT NULL
		) 
	*/
	public function up()
	{
		$this->forge->addField([
				'id'          => [
						'type'           => 'INT',
						'constraint'     => 11,
						'unsigned'       => TRUE,
						'auto_increment' => TRUE
				],
				'title'       => [
						'type'           => 'VARCHAR',
						'constraint'     => '128',
						'null'           => FALSE,
				],
				'slug'       => [
						'type'           => 'VARCHAR',
						'constraint'     => '128',
						'null'           => FALSE,
				],
				'body' => [
						'type'           => 'TEXT',
						'null'           => FALSE,
				],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('news');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('news');
	}
}
