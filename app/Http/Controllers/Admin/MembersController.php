<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;

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
        $params = $request->validate([
            'name' => 'required|max: 30',
            'year' => 'required',
            'shot' => 'required|max: 50',
            'comment' => 'max: 1000',
        ]);

        Member::create($params);
        return redirect()->route('admin.members');
    }

    public function first()
    {
        $members = Member::orderBy('created_at', 'desc')->where('year', '1')->get();
        return view('admin.members.first', ['members' => $members]);
    }

    public function second()
    {
        $members = Member::orderBy('created_at', 'desc')->where('year', '2')->get();
        return view('admin.members.second', ['members' => $members]);
    }

    public function third()
    {
        $members = Member::orderBy('created_at', 'desc')->where('year', '3')->get();
        return view('admin.members.third', ['members' => $members]);
    }
}
