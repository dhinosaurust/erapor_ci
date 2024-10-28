<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePegawaiMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'opd' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 7
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'nip_nik' => [
                'type' => 'BIGINT',
                'constraint' => 20
            ],
            'unit_kerja' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'jabatan' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['L', 'P'],
                'default' => 'L'
            ],
            'tgl_lahir' => [
                'type' => 'DATE',
            ],
            'tk_pendidikan' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'golongan' => [
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'jenisjabatan' => [
                'type' => 'VARCHAR',
                'constraint' => 14,
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_pegawai');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_pegawai');
    }
}
