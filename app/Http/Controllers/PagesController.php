<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //新增root()方法
    public function root()
    {
        session()->flash('success', 'This is a success alert—check it out!');
        session()->flash('danger', 'This is a danger alert—check it out!');
        session()->flash('warning', 'This is a warning alert—check it out!');
        session()->flash('info', 'This is a info alert—check it out!');
        return view('pages.root');
    }
}
