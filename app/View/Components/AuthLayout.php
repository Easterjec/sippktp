<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AuthLayout extends Component
{
    public function __construct()
    {
        //
    }
    public function render()
    {
        return view('themes.auth.main');
    }
}
