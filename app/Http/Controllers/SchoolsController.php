<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function index()
    {
        return Schools::with('student')->get();
    }
}
