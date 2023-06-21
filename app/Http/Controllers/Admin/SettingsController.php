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
        request()->validate([
            'favicon' => ['nullable', 'image', 'mimes:png'],
        ], [
            'favicon.image' => 'Format image invalid',
            'favicon.mimes' => 'The image need to be in format PNG',
        ]);

        if ($request->hasFile('favicon')) {

            $image = $request->file('favicon');

            $destinationPath = public_path();
            $fileName = 'favicon.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $fileName);
            Alert::success('Favicon added successfully');
            return view('admin.settings-admin');
        }
    }
}
