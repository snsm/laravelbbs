<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
    public function index()
    {

        $discussions = Discussion::all();
        return view('forum.index',compact('discussions'));
    }
}
