<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Mail\ContactMail;
use App\Trait\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ReportStoreRequest;
use App\Http\Requests\ContactStoreRequest;

class PageController extends Controller
{
    use FileUpload;
    public function about()
    {
        $data = ['title' => "About"];

        return view('pages.about', $data);
    }

    public function service()
    {
        $data = ['title' => "Service"];

        return view('pages.service', $data);
    }

    public function contact()
    {
        $data = ['title' => "Contact"];

        return view('pages.contact', $data);
    }

    public function contactStore(ContactStoreRequest $request)
    {
        $data = $request->validated();

        try {
            // Send Mail
            Mail::to(env('APP_EMAIL'))->send(new ContactMail($data, 'New Contact Request'));
            return redirect()->route('contact')->with('success', 'Your message has been sent successfully');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('contact')->with('error', 'Something went wrong');
        }
    }

    public function reportAbuse()
    {
        $data = ['title' => "Report Abuse"];

        return view('pages.report_abuse', $data);
    }

    public function reportAbuseStore(ReportStoreRequest $request)
    {
        $data = $request->validated();
        // dd($data);
        try {
            DB::beginTransaction();

            $data['uuid'] = str()->uuid();
            $data['anonymous'] = $request->has('anonymous') ? 1 : 0;

            $report = Report::create($data);

            if (!$report) {
                DB::rollBack();
                return redirect()->route('report.abuse')->with('error', 'An error occurred while submitting your report.');
            }

            $report->update(['evidence' => $this->uploadFile($request, 'evidence', 'uploads/report/evidence/')]);

            DB::commit();

            return redirect()->route('report.abuse')->with('success', 'Your report has been submitted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->route('report.abuse')->with('error', 'An error occurred while submitting your report.');
        }
    }
}
