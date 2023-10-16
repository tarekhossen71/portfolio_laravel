<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Gate::authorize('app.dashboard');
        return view('layouts.backend.index');
    }
}
