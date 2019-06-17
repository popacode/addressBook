<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'users' => User::latest()->get(),
            'count' => User::count()
        ];
        return view('pages.messages.index', $data);
    }
    
    public function database()
    {
        return view('pages.messages.database');
    }
}
