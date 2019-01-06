<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inboxController extends Controller
{
    // public function index(){
    //     return 'index from inboxController';
    // }

    public function index(){
        $title = 'this is a title';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['inbox', 'sent']
        );
        return view('pages.services')->with($data);
    }
}
