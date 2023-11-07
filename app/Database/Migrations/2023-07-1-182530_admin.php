<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'TEXT',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'phone' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'address' => [
                'type' => 'TEXT',
                'constraint' => '100',
            ],
            'user_type' => [
                'type' => 'ENUM("admin","user")',
                'default '=> 'user',
                'null'=>false,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
               
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
               
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('admin');
    }
}