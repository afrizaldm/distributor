<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    function main() {
        return view('app.main');
    }

    function ping() {
        return 'pong';
    }
}
