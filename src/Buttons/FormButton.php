<?php

declare(strict_types=1);

namespace BladeUIKit\Buttons;

use BladeUIKit\BladeComponent;
use Illuminate\Contracts\View\View;

class FormButton extends BladeComponent
{
    /** @var string */
    public $action;

    /** @var string */
    public $method;

    public function __construct(string $action, string $method = 'POST')
    {
        $this->action = $action;
        $this->method = strtoupper($method);
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.buttons.form-button');
    }
}
