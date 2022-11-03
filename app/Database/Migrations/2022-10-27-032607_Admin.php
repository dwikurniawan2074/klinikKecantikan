<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'alamat'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'nomor_handphone' => [
				'type'           => 'VARCHAR',
				'constraint'           => '255',
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('news', TRUE);
    }

    public function down()
    {
        //
    }
}
