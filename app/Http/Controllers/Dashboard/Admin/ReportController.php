<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Report;
use App\Trait\FileUpload;
use App\Enum\ReportStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    use FileUpload;
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

    public function show(string $uuid)
    {
        $report = Report::where('uuid', $uuid)->firstOrFail();

        $data = [
            'title' => 'Report Details',
            'report' => $report,
        ];
        return view('dashboard.admin.report.show', $data);
    }

    public function delete(string $uuid)
    {
        try {
            DB::beginTransaction();

            $report = Report::where('uuid', $uuid)->firstOrFail();

            $this->deleteFile($report->evidence);

            $report->delete();

            DB::commit();
            return redirect()->back()->with('success', 'Report deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting the report.');
        }
    }
}
