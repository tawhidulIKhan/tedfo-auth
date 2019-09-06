<?php

namespace App\Http\Controllers;

use App\Http\Requests\FooRequest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.setfoo');
    }

    public function setSession(FooRequest $request)
    {
        session()->put('foo', $request->foo_data);
        return redirect()->route('home');
    }
}
