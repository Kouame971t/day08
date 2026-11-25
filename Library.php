<?php
require_once __DIR__ . '/Book.php';

class Library
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function listBooks(): void
    {
        foreach ($this->books as $book) {
            echo $book->getTitle() . "\n";
        }
    }
}
