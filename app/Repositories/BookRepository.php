<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    /**
     * @var Book
     */
    protected $book;

    /**
     * BookRepository constructor.
     * @param Book $book
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    /**
     * Get all posts.
     *
     * @return Book $book
     */
    public function getAllBooks()
    {
        return $this->book->get();
    }

}
