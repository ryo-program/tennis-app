<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
    public function membersDisplay()
    {
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('user.members.members', ['members' => $members]);
    }

    public function first()
    {
        $members = Member::orderBy('created_at', 'desc')->where('year', '1')->get();
        return view('user.members.first', ['members' => $members]);
    }

    public function second()
    {
        $members = Member::orderBy('created_at', 'desc')->where('year', '2')->get();
        return view('user.members.second', ['members' => $members]);
    }

    public function third()
    {
        $members = Member::orderBy('created_at', 'desc')->where('year', '3')->get();
        return view('user.members.third', ['members' => $members]);
    }
}
