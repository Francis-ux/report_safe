<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Report;
use App\Enum\ReportStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Reports',
            'reports' => Report::latest()->get(),
        ];

        return view('dashboard.admin.report.index', $data);
    }

    public function physical()
    {
        $data = [
            'title' => 'Physical Abuse Reports',
            'reports' => Report::where('abuse_type', 'physical')->latest()->get(),
        ];

        return view('dashboard.admin.report.physical', $data);
    }

    public function emotional()
    {
        $data = [
            'title' => 'Emotional Abuse Reports',
            'reports' => Report::where('abuse_type', 'emotional')->latest()->get(),
        ];

        return view('dashboard.admin.report.emotional', $data);
    }

    public function sexual()
    {
        $data = [
            'title' => 'Sexual Abuse Reports',
            'reports' => Report::where('abuse_type', 'sexual')->latest()->get(),
        ];

        return view('dashboard.admin.report.sexual', $data);
    }

    public function neglect()
    {
        $data = [
            'title' => 'Neglect Abuse Reports',
            'reports' => Report::where('abuse_type', 'neglect')->latest()->get(),
        ];

        return view('dashboard.admin.report.neglect', $data);
    }

    public function others()
    {
        $data = [
            'title' => 'Other Abuse Reports',
            'reports' => Report::where('abuse_type', 'other')->latest()->get(),
        ];

        return view('dashboard.admin.report.others', $data);
    }
}
