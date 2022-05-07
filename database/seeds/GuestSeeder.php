<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guest_book')->insert([
            'name' => Str::random(10),
            'presence' => 1,
            'person' => 2,
            'comment' => Str::random(10),

        ]);
    }
}
