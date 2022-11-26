<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ABCController extends Controller
{

    public function index(Request $request)
    {
        // $request->session()->put('key', 'value');
        // dd($request->session()->all());
        $countries = DB::table('countries')->paginate(15);
        return view(
            'countries.index',
            ['countries' => $countries]
        );
    }
}
