<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_authors')->insert([
            'author_name' => 'Andrea Hirata',
            'birthday' => '1967-10-24'
        ]);
        DB::table('book_authors')->insert([
            'author_name' => 'Tere Liye',
            'birthday' => '1979-05-21'
        ]);
    }
}
