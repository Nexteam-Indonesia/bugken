<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonPrimary extends Component
{
    /**
     * The fill button.
     *
     * @var
     */
    public $fill;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $fill)
    {
        $this->fill  = $fill;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-primary');
    }
}
