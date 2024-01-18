<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator as ContractsValidationValidator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends User
{
    public function index()
    {
        if (auth()->user()->role == 1) {
            return view('student.dashboard');
        } elseif (auth()->user()->role == 2) {
            return view('teacher.dashboard');
        } else {
            abort(403, 'Unauthorized action.');
        }
    }  
}
