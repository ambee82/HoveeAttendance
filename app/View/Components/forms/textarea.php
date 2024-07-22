<?php

namespace App\View\Components\forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class textarea extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name = '',
        public string $label = '',
        public string $value = '',
        public string $placeholder = '',
        public int $rows = 3,
    ) {
        //

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.textarea');
    }
}
