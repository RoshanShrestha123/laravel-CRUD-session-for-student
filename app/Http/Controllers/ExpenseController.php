<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    // Just display page
    public function index()
    {
        return view("welcome");
    }

    public function displayCreateForm()
    {
        return view('create');
    }

    public function displayEditForm()
    {
        return view('edit');
    }
}
