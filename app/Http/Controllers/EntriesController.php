<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
class EntriesController extends Controller
{
     public function __construct()
    {

        $this->middleware('auth');
    }


}
