<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        // $user = Auth::user();
        // echo $user->name;

        // $parametr =  $request->all();
        // dd($parametr);

        $users = User::with(['identity'])->get();
        foreach($users as $user){
            echo '<b>User ID</b> : ' . $user->name . '<br />';
            echo '<b>id card</b> : ' . $user->identity?->identity_number. '<br />';

        }
    }

    public function show($id)
    {

        // echo "This is User with ID $id";
    }
}
