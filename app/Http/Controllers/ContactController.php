<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct() {
    $this->middleware('auth');
    }
    public function index()
    {
        $contacts = auth()->user()->contacts;
        return view('contacts.index', compact('contacts'));
    }
}

