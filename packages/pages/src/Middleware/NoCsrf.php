<?php

namespace Tech5s\PageGrapes\Middleware;

use App\Http\Middleware\VerifyCsrfToken;

class NoCsrf extends VerifyCsrfToken
{
    protected $exceptCustom = [
    ];

    protected function inExceptArray($request)
    {
        $this->except = array_merge($this->except, $this->exceptCustom);
        foreach ($this->except as $except) {
            if ($except !== '/') {
                $except = trim($except, '/');
            }

            if ($request->fullUrlIs($except) || $request->is($except)) {
                return true;
            }
        }

        return false;
    }
}
