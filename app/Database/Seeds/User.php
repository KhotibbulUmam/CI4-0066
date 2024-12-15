<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

// Class menambah data pada table user
class User extends Seeder
{
    public function run()
    {
        // Isi data
        $data = [
            'username'      => 'admin',
            'password'      => password_hash('admin', PASSWORD_DEFAULT),
            'nama_lengkap'  => 'Khotibbul Umam',
            'email'         => 'khotibbulumam@gmail.com',
        ];

        // Query menambah data
        $this->db->table('user')->insert($data);
    }
}
