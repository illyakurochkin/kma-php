<?php

namespace App\Services;

use App\Repositories\BookRepository;

class BookService
{
    /**
     * @var $bookRepository
     */
    protected $bookRepository;

    /**
     * PostService constructor.
     * @param $bookRepository
     */
    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    /**
     * @return \App\Models\Book
     */
    public function getAll()
    {
        return $this->bookRepository->getAllBooks();
    }
}
