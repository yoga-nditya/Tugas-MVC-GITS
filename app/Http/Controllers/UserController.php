<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = "users";

        $data['modelUser'] = User::all();

        return view('index', $data);
    }
}
