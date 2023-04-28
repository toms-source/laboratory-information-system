<?php

namespace App\Http\Controllers\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class client extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect()->route('index');
    }
}
