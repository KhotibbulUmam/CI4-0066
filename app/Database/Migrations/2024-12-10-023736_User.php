<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

// Class Table User
class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [                           // nama field
                'type'           => 'INT',      // TYPE DATA
                'constraint'     => 5,          // panjang/ukuran
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'unique'     => true,           // tidak boleh sama (unik)
            ],
            'password' => [
                'type'      => 'VARCHAR',
                'constraint'  => '100',
            ],
            'nama_lengkap' => [
                'type'      => 'VARCHAR',
                'constraint'  => '100',
            ],
            'email' => [
                'type'      => 'VARCHAR',
                'constraint' => '100',
                'unique'    => true,
            ],
            'token' => [
                'type'      => 'VARCHAR',
                'constraint'  => '100',
            ],
            'last_login timestamp default now()'
            
        ]);
        $this->forge->addKey('id', true);       // Primary Key
        $this->forge->createTable('user');      // Nama table
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
