<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    
    public function index()
    {
        return view('user.home');
    }

    // public function create()
    // {
        
    // }

    // public function store(Request $request)
    // {
        
    // }

    // public function show($id)
    // {
        
    // }

    // public function edit($id)
    // {
        
    // }

    // public function update(Request $request, $id)
    // {
        
    // }

    // public function destroy($id)
    // {
        
    // }
}
