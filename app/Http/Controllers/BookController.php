<?php

namespace App\Http\Controllers;

use App\Services\BookService;

class BookController extends Controller
{

    /**
     * @var $bookService
     */
    protected $bookService;

    /**
     * BookController constructor.
     * @param $bookService
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }


    public function index()
    {
        $books = [];
        try {
            $books = $this->bookService->getAll();
        } catch (\Exception $e) {

        }
        return view('simpleview', ['books' => $books]);
    }
}
