<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        return view('admin.members.members');
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        
    }
}
