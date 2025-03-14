<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user=User::orderBy('id','DESC')->with(['post','profile','role'])->get();
        return $user;
    }
}
