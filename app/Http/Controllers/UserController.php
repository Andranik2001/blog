<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request )
    {
        // $users = DB::table('users')
        //     ->join('companies', 'users.company_id', '=', 'companies.id')
        //     ->select(['name', 'title as company_title'])
        //     ->get();
        // foreach ($users as $user) {
        //     echo $user->name . " " . $user->company_title . "<br>";
        // }

        //     DB::table('users')
        // ->updateOrInsert(
        //     ['email' => 'john@example.com', 'name' => 'John'],
        //     ['password' => '123']

        // );

        $user = Auth::user();
        echo $user->name;

        $parametr =  $request->all();
        dd($parametr);
    }

    public function show($id)
    {

        // echo "This is User with ID $id";
    }
}
