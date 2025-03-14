<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile=Profile::orderBy("id",'DESC')->with('user')->get();
        return $profile;
    }
}
