<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Citation;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $citations = Citation::all();
        $user = Auth::user();

        // if($user){
        //     return response()->json([
        //         'logged' => true,
        //         'user' => $user
        //     ]);
        // }else{
        //     return response()->json([
        //         'logged' => false,
        //         'user' => null
        //     ]);
        // }

        return view('index', [
            'citation' => $citations[rand(0, $citations->count() - 1)],
            'user' => $user
        ]);
    }
}
