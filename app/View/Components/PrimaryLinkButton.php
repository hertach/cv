<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 *
 *
 * Class PrimaryLinkButton
 * @package App\View\Components
 */
class PrimaryLinkButton extends Component
{

    /**
     * the route
     *
     * @var string
     */
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.primary-link-button');
    }
}
