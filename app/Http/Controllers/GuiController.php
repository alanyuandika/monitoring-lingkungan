<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
class GuiController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
