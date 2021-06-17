<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $groups = Group::with('users')->get();

        return view('pages.index', compact('groups'));
    }
}
