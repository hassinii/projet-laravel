<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    function signup(Request $request)
    {


        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['email'],
            'pwd' => ['required'],
        ]);
        try {
           $user =   DB::table('users')->insertGetId(
                ['email' => $validatedData['email'], 'password' => Hash::make($validatedData['pwd']), 'name' => $validatedData['name'], 'role_id' => 4]
            );
            DB::table('professeurs')->insert(['user_id'=> $user]);

          
            return redirect('admin');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
