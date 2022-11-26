<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function index()
    {
        echo "<br>Test Controller.";
        exit;
    }
}
