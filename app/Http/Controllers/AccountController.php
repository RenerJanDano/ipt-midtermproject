<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $accnt = account::orderBy('acct_name')->get();
        return view('accounts.index', ['accounts' =>$accnt]);
    }
}
