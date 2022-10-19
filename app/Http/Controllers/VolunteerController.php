<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class VolunteerController extends Controller
{
    //
    public function web(){
        return view('volunteer.pages.baking');
    }
}
