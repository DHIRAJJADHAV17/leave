<?php
namespace App\Database\Migrations;
use CodeIgniter\Database\Migration;

class Enroll extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'er_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'co_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'id' => [
                'type' => 'INT',
                
                'constraint' => 11,
            ],
            
            'trans_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mode' => [
                'type'       => 'ENUM("Gpay","Phonepay","Paytm","Cash","Other")',
                
            ],
            'amount' => [
                'type'       => 'INT',
                'constraint' => 10,
            ], 
            'duration' => [
                'type'       => 'INT',
                'constraint' => 10,
            ], 
            'status' => [
                'type'       => 'ENUM("Accept","Decline","Pending")',
                
                'default'=>'Pending',
            ],  
            'created_at' => [
                'type' => 'TIMESTAMP',
                
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
              
            ],
        ]);
        $this->forge->addKey('er_id', true);
        $this->forge->createTable('enroll');
    }

    public function down()
    {
        $this->forge->dropTable('enroll');
    }
}