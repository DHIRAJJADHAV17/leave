<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration

{
    public function up()
    {
        $this->forge->addField([
            'co_id' => [
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
            'teacher' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            
            'created_at' => [
                'type' => 'TIMESTAMP',
                
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                
            ],
        ]);
        $this->forge->addKey('co_id', true);
        $this->forge->createTable('course');
    }

    public function down()
    {
        $this->forge->dropTable('course');
    }
}