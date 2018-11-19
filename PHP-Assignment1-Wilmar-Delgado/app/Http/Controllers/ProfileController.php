<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }

        $profile = $user->profile;
        $viewData = [
            'user' => $user,
            'profile' => $profile,
        ];

        return view('profile_form', $viewData);
    }

    public function update()
    {
        $user = request()->user();

        if (!$user) {
            return redirect('/');
        }
        
        $formData = request()->all();

        request()->validate([
            'name' => 'required|max:10',
            'description' => 'required|max:255',
            'descriptionLink' => 'required',
            'image' => 'required',
        ]);

        $profile = $user->profile;

        $profile->name = $formData['name'];
        $profile->description = $formData['description'];
        $profile->descriptionLink = $formData['descriptionLink'];
        $profile->image = $formData['image'];

        $profile->save();

        return redirect("/profile");
    }

}

     