<?php

namespace :uc:vendor\:uc:package\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function render()
    {
        return view(':lc:vendor::components.alert');
    }
}
