<?php

namespace App\Livewire;

use Livewire\Component;

class PageHeader extends Component
{
    public $name = 'Amer';

    public function render()
    {
        return view('livewire.page-header');
    }
}
