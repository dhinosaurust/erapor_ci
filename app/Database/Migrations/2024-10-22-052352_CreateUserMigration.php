<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 12,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'photo_url' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'pegawai_id' => [
                'type' => 'BIGINT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('pegawai_id', 'tbl_pegawai', 'id', 'CASCADE', 'RESTRICT' );
        $this->forge->createTable('tbl_user');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_user');
    }
}
