<?php

namespace Hexters\Ladmin\Components;

use Illuminate\View\Component;

class Layout extends Component {
    public $user;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->user = auth()->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('ladmin::layout.app', ['user' => $this->user]);
    }
}
