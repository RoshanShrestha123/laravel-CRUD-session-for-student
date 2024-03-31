<?php

use App\Http\Controllers\ExpenseController;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome', ['expenses' => Expense::all()]);
});
Route::get('/create', [ExpenseController::class, 'displayCreateForm']);
Route::get('/edit/{id}', function ($id) {
  $data =  Expense::find($id);

  return view('edit', ['data' => $data]);
});
Route::post('/submit-form', function (Request $req) {
  // form bata data lyawo
  $title = $req->title;
  $amount = $req->amount;
  $category = $req->category;

  $exp = new Expense();
  $exp->title = $title;
  $exp->amount = $amount;
  $exp->category = $category;
  //POST REQUEST
  $exp->save();

  return redirect('/');
});
