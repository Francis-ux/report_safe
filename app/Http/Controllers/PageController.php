<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
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
}
