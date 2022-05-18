<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function register()
    {
        return view('auth.formregister');
    }
    public function post_register(Request $request)
    {
        user::create([
            'phone' => $request->phone,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('auth.formlogin');
    }

    public function login()
    {
        return view('auth.formlogin');
    }

    public function post_login(Request $request)
    {
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect()->route('homepage');
        } else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }

    public function personalpage()
    {
        return view('auth.personalpage');
    }

    // language
    public function changeLanguage(Request $request, $language)
    {
        if ($language) {
            Session::put('website_language', $language);
        }

        return redirect()->back();
    }


    // Search product
    public function search()
    {
        return view('search');
    }

    public function searchFullText(Request $request)
    {
        if ($request->search != '') {
            $data = User::where('name', $request->search)->get();
            foreach ($data as $key => $value) {
                echo $value->name;
            }
        }
    }
}
