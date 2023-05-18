<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnStatus extends Migration
{
    public function up()
    {
        $fields = [
            "status" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];

        $this->forge->addColumn('danaDarurat', $fields); //If NOT EXISTS create table products
    }

    public function down()
    {
        //
    }
}
