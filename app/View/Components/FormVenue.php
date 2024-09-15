<?php

declare(strict_types=1);

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class FormVenue extends Component
{
    public function __construct(
        public ?string $name,
        public ?string $slug,
        public string $route,
        public string $buttonText,
        public string $method
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-venue');
    }
}
