<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Psy\VersionUpdater\Downloader;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $data[] = null;
        $data['page_title'] = 'Employee';
        $data['users'] = User::latest()
            ->when($request->search, function ($query) use ($request) {
                $query->where('username', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%')
                    ->orWhere('first_name', 'like', '%' . $request->search . '%')
                    ->orWhere('last_name', 'like', '%' . $request->search . '%');
            })
            ->paginate(5);
        return view('welcome', $data);
    }
    public function profile(User $user)
    {
        $data[] = null;
        $data['page_title'] = 'User Profile';
        $data['model'] = 'Users';
        $data['user'] = $user->load(['educations', 'skills', 'socialMedia', 'projects', 'experiences', 'certifications']);

        return view('user-profile', $data);
    }
    public function cvDownload(User $user)
    {
        $filename = 'zakat.pdf';
        $filePath = storage_path("app/public/cv/{$filename}");
        if (file_exists($filePath)) {
            return response()->download($filePath, $filename);
        } else {
            abort(404, 'File not found');
        }
    }
}
