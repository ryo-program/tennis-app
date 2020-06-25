<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
    public function index()
    {
        return view('user.members');
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
