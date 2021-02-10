<?php

namespace Modules\ChatBot\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class ChatBotDatabaseSeeder
 * @package Modules\ChatBot\Database\Seeders
 */
class ChatBotDatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        // $this->call("OthersTableSeeder");
    }
}
