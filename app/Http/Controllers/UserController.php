<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            User::get()
        ]);
    }

    public function show(Request $request)
    {
        return response()->json([
            User::find($request->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        return response()->json([
            User::insert($request)
        ]);
    }

    public function update(Request $request)
    {
        return response()->json([
            User::where('id', $request->id)->update($request)
        ]);
    }
}
