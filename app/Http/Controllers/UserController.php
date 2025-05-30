<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validate = [
            "name" => "required|min:2|max:255",
            "surname" => "required|min:2|max:255",
            "email" => "required|email|min:4|max:255",
            "password" => "required|min:4|max:255"
        ];
        $message = [
            "email.required" => "Поля пустой",
            "password.required" => "Поля пустой",
            "surname.required" => "Поля пустой",
            "surname.min" => "Поля должен быть минумум 2 символ",
            "email.min" => "Поля должен быть минумум 2 символ",
            "password.min" => "Поля должен быть минумум 2 символ",
            "email" => "Поля должен быть максимум 255 символ",
            "name" => "Поля должен быть максимум 255 символ",
            "name.required" => "Поля пустой",
            "name.min" => "Поля должен быть минумум 2 символ",
            "name" => "Поля должен быть максимум 255 символ"
        ];
        $request->validate($validate, $message);
        if (User::where("email", $request->email)->first()) {
            return redirect()->route("indexLogin");
        } else {
            User::create($request->all());
            return redirect()->route("index");
        }
    }
    public function auth(Request $request)
    {
        $validate = [
            "email" => "required|email",
            "password" => "required|min:4|max:255"
        ];
        $message = [
            "email.required" => "Поля пустой",
            "password.required" => "Поля пустой",
            "email.min" => "Поля должен быть минумум 2 символ",
            "password.min" => "Поля должен быть минумум 2 символ",
            "email" => "Поля должен быть максимум 255 символ",
            "name" => "Поля должен быть максимум 255 символ",
            "name.required" => "Поля пустой",
            "name.min" => "Поля должен быть минумум 2 символ",
            "name" => "Поля должен быть максимум 255 символ"
        ];
        $request->validate($validate, $message);
        if (Auth::attempt($request->only("email", "password"))) {
            return redirect()->route("index");
        }
        return redirect()->route("indexLogin");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("indexLogin");
    }
}
