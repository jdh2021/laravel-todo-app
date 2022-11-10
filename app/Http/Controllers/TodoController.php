<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index () {
        // Response function allows us to send response
        return response(Todo::all(), 200)
        ->header('Content-Type', 'application/json');
    }
    public function show($id){
        return response(Todo::findOrFail($id), 200)
        ->header('Content-Type', 'application/json');
    }
}
