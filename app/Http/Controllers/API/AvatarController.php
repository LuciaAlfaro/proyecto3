<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AvatarController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();
        $path = $request->file('avatar')->store('public/avatars');
        $user->avatar = $path;
        $user->save();
        return response()->json($user);
    }

    public function getAvatar(Request $request)
    {
        $user = $request->user();
        return Storage::get($user->avatar);
    }

    public function getAvatarbyId($userID)
    {
        $user = User::findOrFail($userID);
             return Storage::get($user->avatar);
    }

    public function getAvatarByUserName($userName)
    {
        $user = User::where('name', $userName )->first();
             return Storage::get($user->avatar);
    }
}
