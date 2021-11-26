<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Sang Pemimpi',
            'synopsis' => 'Sang Pemimpi Baru adalah novel kedua dalam tetralogi Laskar Pelangi karya Andrea Hirata yang diterbitkan oleh Bentang Pustaka pada Juli 2006. Dalam novel ini, Andrea mengeksplorasi hubungan persahabatannya dengan dua anak yatim piatu, Arai Ichsanul Mahidin dan Jimbron, serta kekuatan mimpi yang dapat membawa Andrea dan Arai melanjutkan studi ke Sorbonne, Paris, Prancis',
            'cover_image_url' => 'https://upload.wikimedia.org/wikipedia/id/thumb/8/89/Sang_Pemimpi_sampul.jpg/220px-Sang_Pemimpi_sampul.jpg',
            'publisher' => 'Yogyakarta: Bentang Pustaka',
            'isbn13' => '9786022916635',
            'isbn10' => '',
            'year' => 2006,
            'language' => 'Bahasa',
            'book_author_id' => 1,
            'created_at'=>Carbon::now()->toDateTimeString()
        ]);
    }
}
