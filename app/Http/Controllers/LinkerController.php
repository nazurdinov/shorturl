<?php

namespace App\Http\Controllers;

use App\Shorturl;
use App\ShorturlStats;
use Illuminate\Support\Facades\Redirect;

class LinkerController extends Controller
{
    public function redirect($slug)
    {

        $shortUrl = Shorturl::where('slug', $slug);
        if($shortUrl->exists()){

            Shorturlstats::create(['shorturl_id' => $shortUrl->first()->id]);

            return Redirect::to($shortUrl->first()->link);
        }

        abort(404);
    }
}
