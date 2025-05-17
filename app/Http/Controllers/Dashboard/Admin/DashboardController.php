<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome' . ' ' . env('APP_NAME') . ' ' . 'Administrator',
            'totalAbuseReportCount' => Report::count(),
            'totalPhysicalAbuseReportCount' => Report::where('abuse_type', 'physical')->count(),
            'totalEmotionalAbuseReportCount' => Report::where('abuse_type', 'emotional')->count(),
            'totalSexualAbuseReportCount' => Report::where('abuse_type', 'sexual')->count(),
            'totalNeglectAbuseReportCount' => Report::where('abuse_type', 'neglect')->count(),
        ];

        return view('dashboard.admin.index', $data);
    }
}
