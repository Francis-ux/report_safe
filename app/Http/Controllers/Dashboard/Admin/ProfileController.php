<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminProfileUpdateRequest;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $data = ['title' => 'Profile'];

        return view('dashboard.admin.profile.index', $data);
    }

    public function update(AdminProfileUpdateRequest $request)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();

            if (!empty($request->password)) {
                $data['password'] = Hash::make($request->password);
            }

            User::where('id', Auth::user()->id)->where('role', 'admin')->update($data);

            DB::commit();
            return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->route('admin.profile.index')->with('error', 'Something went wrong');
        }
    }
}
