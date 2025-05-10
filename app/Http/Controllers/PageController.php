<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function reportAbuse()
    {
        $data = ['title' => "Report Abuse"];

        return view('pages.report_abuse', $data);
    }
}
