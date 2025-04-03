<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CreateBook extends Component
{
    #[Rule('string|required|min:3|max:50')]
    public $title;

    #[Rule('string|required|min:3|max:50')]
    public $author;

    #[Rule('integer|required|min:1|max:10')]
    public $rating;

    public function save()
    {
//        $this->validate([
//            'title' => 'string|required|min:3|max:50',
//            'author' => 'string|required|min:3|max:50',
//            'rating' => 'integer|required|min:1|max:10'
//        ]);

        $this->validate();

        Book::create([
            'title' => $this->title,
            'author' => $this->author,
            'rating' => $this->rating
        ]);

        $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
