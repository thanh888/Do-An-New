<?php

namespace App\Http\Controllers;

use App\Models\UserInformation;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = UserInformation::firstWhere('user_id', auth()->user()->id);
        return view('homeUser.profile.index');
    }

}
