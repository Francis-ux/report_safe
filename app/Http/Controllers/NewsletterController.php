<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\NewsletterStoreRequest;

class NewsletterController extends Controller
{
    public function subscribe(NewsletterStoreRequest $request)
    {
        $data = $request->validated();

        DB::beginTransaction();
        try {
            $newsletter = Newsletter::firstOrNew(
                ['email' => $data['email']],
                ['uuid' => Str::uuid()]
            );

            if (!$newsletter->exists) {
                $newsletter->save();
            }

            DB::commit();

            return redirect()->back()->with('success', 'Thank you for subscribing! Your request has been processed successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'We encountered an issue while processing your subscription. Please try again later.');
        }
    }

    public function unsubscribe(string $email)
    {
        $newsletter = Newsletter::where('email', $email)->firstOrFail();
        if ($newsletter) {
            $newsletter->update(['status' => 0]);
            return redirect()->route('home')->with('success', 'You have been unsubscribed from our newsletter.');
        }
    }
}
