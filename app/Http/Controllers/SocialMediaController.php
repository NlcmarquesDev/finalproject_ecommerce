<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SocialMediaController extends Controller
{
    //

    public function socialMedia(Request $request)
    {
        $socialMediaArray = [
            ['name' => 'Facebook', 'url' => $request->facebook],
            ['name' => 'Instagram', 'url' => $request->instagram],
            ['name' => 'Pinterest', 'url' => $request->pinterest],
            ['name' => 'YouTube', 'url' => $request->youtube],
            ['name' => 'TikTok', 'url' => $request->tiktok]
        ];

        foreach ($socialMediaArray as $socialData) {

            $social = new SocialMedia();
            $social->name = $socialData['name'];
            $social->url = $socialData['url'];
            $social->save();
        }

        Alert::success('Social Media added successfully');
        return back();
    }
}
