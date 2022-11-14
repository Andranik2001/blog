<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = DB::table('countries')
            ->where('name', '=', 'Armenia')->get();
            $armenia = $countries[0];
            $artsakh = $armenia;

            //$artsakh->name = 'Artsakh';
            unset($artsakh->id);
            unset($artsakh->name);

            $artsakh = (array)$artsakh;

            DB::table('countries')
            ->updateOrInsert(
                ['name' => 'Artsakh'],
                $artsakh
            );

        // echo "<pre>";print_r($artsakh);echo "</pre>";
    }
}
