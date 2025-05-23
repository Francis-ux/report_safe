<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Report;
use App\Trait\FileUpload;
use App\Enum\ReportStatus;
use Illuminate\Http\Request;
use App\Mail\ReportReplyMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ReportReplyRequest;
use App\Http\Requests\ReportUpdateRequest;

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

    public function edit(string $uuid)
    {
        $report = Report::where('uuid', $uuid)->firstOrFail();

        $data = [
            'title' => 'Edit Report Status',
            'report' => $report,
            'reportStatuses' => ReportStatus::cases(),
        ];
        return view('dashboard.admin.report.edit', $data);
    }

    public function update(ReportUpdateRequest $request, string $uuid)
    {
        $data = $request->validated();

        try {
            DB::beginTransaction();

            $report = Report::where('uuid', $uuid)->firstOrFail();

            $report->update($data);

            DB::commit();
            return redirect()->back()->with('success', 'Report status updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while updating the report status.');
        }
    }

    public function action(string $uuid)
    {
        $report = Report::where('uuid', $uuid)->firstOrFail();

        $data = [
            'title' => 'Report Action',
            'report' => $report,
        ];
        return view('dashboard.admin.report.action', $data);
    }

    public function reply(ReportReplyRequest $request, string $uuid)
    {
        $data = $request->validated();
        try {
            $report = Report::where('uuid', $uuid)->firstOrFail();

            Mail::to($report->reporter_email)->send(new ReportReplyMail($data, $report, 'Response to Your Submitted Child Abuse Report'));


            return redirect()->back()->with('success', 'Reply sent successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while sending the reply.');
        }
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
