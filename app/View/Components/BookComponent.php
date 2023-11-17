<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookComponent extends Component
{

    public $image;
    public $title;
    public $price;
    public $id;
    public $author;
    public $categories;


    /**
     * Create a new component instance.
     */
    public function __construct($image = '', $title = '', $price = '', $id = '', $author= '', $categories = '')
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->id = $id;
        $this->author = $author;
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.book-component');
    }
}
