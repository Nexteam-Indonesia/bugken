<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Exception;
use Illuminate\Http\Request;

class ExceptionController extends Controller
{
    public function show(Exception $exception)
    {
        return view('exception.detail', compact('exception'));
    }
}
