<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Content;
class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('content/index', compact('contents'));
    }

    public function create()
    {
        $content = new Content();
        return view('baby/create', compact('baby'));
    }
}
