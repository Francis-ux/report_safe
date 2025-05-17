<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsletterSendMail;
use App\Http\Requests\NewsletterSendMailRequest;

class NewsletterController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Newsletters',
            'newsletters' => Newsletter::latest()->get()
        ];

        return view('dashboard.admin.newsletter.index', $data);
    }

    public function sendEmail(NewsletterSendMailRequest $request)
    {
        $request->validated();

        try {
            $newsletters = Newsletter::where('status', 1)->pluck('email');

            foreach ($newsletters as $email) {
                Mail::to($email)->send(new NewsletterSendMail($request->subject, $request->message, $email));
            }

            return redirect()->back()->with('success', 'Email sent successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while sending email. Please try again.');
        }
    }

    public function delete(string $uuid)
    {
        DB::beginTransaction();
        try {
            $newsletter = Newsletter::where('uuid', $uuid)->firstOrFail();
            $newsletter->delete();

            DB::commit();

            return redirect()->route('admin.newsletter.index')->with('success', 'Subscriber deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting the subscriber. Please try again.');
        }
    }
}
