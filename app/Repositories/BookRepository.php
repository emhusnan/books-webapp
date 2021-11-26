<?php

namespace App\Repositories;

use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookRepository
{
    private $request;

    public function setHttpRequest($r)
    {
        $this->request = $r;
    }

    public function addBook()
    {

    }

    public function updateBook()
    {

    }

    public function listBook()
    {
        echo var_dump($this->request);
        return DB::table('books')->simplePaginate(15);
    }

    public function deleteBook()
    {

    }

}
