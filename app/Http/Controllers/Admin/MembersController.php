<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::orderBy('created_at', 'desc')->get();
        return view('admin.members.members', ['members' => $members]);
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, Member::$rules);

        if ($file = $request->profile_img) {
            // 保存するファイルに名前をつける
            $fileName = time() . $file->getClientOriginalName();
            //Laravel直下のpublicディレクトリに新フォルダをつくり保存する
            $target_path = public_path('uploads/');
            $file->move($target_path, $fileName);
        } else {
            $fileName = "";
        }

        $member = new Member;
        $member->name = $request->name;
        $member->year = $request->year;
        $member->shot = $request->shot;
        $member->comment = $request->comment;
        $member->profile_img = $fileName;
        $member->save();
        
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

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        \DB::transaction(function() use ($member) {
            $member->delete();
        });

        return redirect()->route('admin.members');
    }
}
