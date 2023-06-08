<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class SettingsController extends Controller
{
    //

    public function favicon()
    {
        return view('admin.settings-admin');
    }

    public function addFavicon(Request $request)
    {

        // $request->validate([
        //     'favicon' => 'required',
        // ]);

        $file = $request->file('favicon');

        if (File::exists(public_path('favicon.png'))) {
            File::delete(public_path('favicon.png'));
        }
        $file->move(public_path(), 'favicon.png');

        Alert::success('Favicon added successfully');
        return view('admin.settings-admin');
    }
}
