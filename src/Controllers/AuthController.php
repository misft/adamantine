<?php

namespace Adamantine\Adamantine\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller {
    public function index() {
        echo "Hello";
    }
    public function login() {
        return view('adamantine::auth.login');
    }
}
