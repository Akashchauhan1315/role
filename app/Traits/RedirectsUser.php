<?php

namespace App\Traits;

use Illuminate\Support\Collection;

use Illuminate\Http\Request;


trait RedirectsUser
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/admin/home';
    }
}