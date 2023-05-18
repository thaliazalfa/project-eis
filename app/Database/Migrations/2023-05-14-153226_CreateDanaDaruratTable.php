<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDanaDaruratTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "bulan" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
                "null" => false,
            ],
            "pengeluaran_tetap" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "pengeluaran_tambahan" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "dana_darurat" => [
                "type"=> "INT",
                "null" => true,
                "default" => null,
            ],
            "status" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('danaDarurat', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('danaDarurat', true); //If Exists drop table products
    }
}
