<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Milestone extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_milestone'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100'
            ],
            'description' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'year'       => [
                'type'           => 'varchar',
                'constraint'     => '4'
            ],
            'image'       => [
                'type'           => 'varchar',
                'constraint'     => '100'
            ],

        ]);

        // Membuat primary key
        $this->forge->addKey('id_milestone', TRUE);

        // Membuat tabel milestone
        $this->forge->createTable('milestone', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('milestone');
    }
}
