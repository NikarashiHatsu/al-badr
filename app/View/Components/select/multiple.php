<?php

namespace App\View\Components\select;

use Illuminate\View\Component;

class multiple extends Component
{
    public $tags = [];

    /**
     * Create a new component instance.
     *
     * @param array $tags
     * @return void
     */
    public function __construct($tags)
    {
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select.multiple');
    }
}
