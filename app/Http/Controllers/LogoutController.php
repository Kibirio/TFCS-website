<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        auth()->logout();

        return redirect()->route('login');
    }
}

require __DIR__.'/auth.php';
