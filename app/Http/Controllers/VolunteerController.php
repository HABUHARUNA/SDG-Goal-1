<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuser;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VolunteerController extends Controller
{
    //
    public function webDev(){
        return view('volunteer.pages.baking');
    }
    public function baking(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('student.pages.baking', compact('posts'));
    }
    public function tailor(){
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('student.pages.tailoring', compact('posts'));
    }
    
    public function register(){
        return view('volunteer.auth.register');
    }
    public function login(){
        return view('volunteer.auth.login');
    }
    public function create(Request $request){
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:vusers',
            'phone' => 'required|min:11|max:15',
            'address' => 'required',
            'profile_photo' => 'required||mimes:jpg,png,jpeg|max:1999',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required'
        ]);
        // dd($form_data);
        $profile_photo = $request->file('profile_photo')->store('public/users');
        $student = new Vuser();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->profile_photo = $profile_photo;
        $student->password = Hash::make($request->password);
        $user = $student->save();
        return redirect('/volunteer/login')->with('success', 'Volunteer created successfully');
    }

    public function check(Request $request){
        if(Auth::guard('vuser')->attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerateToken();
            $request->session()->put('name', Auth::user()->firstname);
            return redirect('/volunteer/dashboard')->with('success', 'Volunteer Logged in');
        }
        return back()->withErrors(['error' => 'Invalid Username/Password!']);
    }
    public function dashboard(){
        return view('volunteer.pages.dashboard');
        
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
