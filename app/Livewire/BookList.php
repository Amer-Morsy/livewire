<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookList extends Component
{
    public $name = 'mario';



    public function render()
    {
        return view('livewire.book-list', [
            'books' => Book::all()
        ]);
    }
}
