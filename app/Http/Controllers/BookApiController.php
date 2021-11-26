<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;

class BookApiController extends Controller
{
    private $repository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->repository = $bookRepository;
    }

    public function listBooks()
    {
        $books = $this->repository->listBook();
        return response()->json(['status' => 'OK', 'message' => '//TODO: listBooks', 'data' => $books]);
    }

    public function createBook()
    {
        return response()->json(['status' => 'OK', 'message' => '//TODO: createBook']);
    }

    public function updateBook()
    {
        return response()->json(['status' => 'OK', 'message' => '//TODO: updateBook']);
    }

    public function deleteBook()
    {
        return response()->json(['status' => 'OK', 'message' => '//TODO: deleteBook']);
    }
}
