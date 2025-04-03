<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Title;

class BookList extends Component
{
    public $name = 'mario';

    public function delete(Book $book)
    {
        $book->delete();
    }

    #[Title('book-list')]
    public function render()
    {
        return view('livewire.book-list', [
            'books' => Book::all()
        ]);
    }
}
