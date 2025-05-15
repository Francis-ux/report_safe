<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome' . ' ' . env('APP_NAME') . ' ' . 'Administrator',
        ];

        return view('dashboard.admin.index', $data);
    }
}
