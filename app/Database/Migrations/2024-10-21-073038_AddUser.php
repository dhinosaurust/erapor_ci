<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '20'
            ],
            'photo_url' => [
                'type' => 'varchar',
                'constraint' => '100'
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('tbl_user');
    }

    public function down()
    {
        //
    }
}
