<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreShorturls;
use App\Shorturl;
use App\Http\Controllers\Controller;
use Tuupola\Base62;


class ShorturlsController extends Controller
{
    public function index()
    {
        $shortUrls = Shorturl::all();
        return response()->json($shortUrls, 200);
    }

    public function store(StoreShorturls $request, Base62 $base62)
    {

        $validated = $request->validated();

        $validated['slug'] = $this->uniqueSlug($base62);

        $shortUrl = Shorturl::create($validated);
        return response()->json($shortUrl, 201);
    }

    public function show($id)
    {
        $shortUrl = Shorturl::findOrFail($id);

        return response()->json($shortUrl, 200);
    }

    public function update(StoreShorturls $request, Shorturl $shorturl, Base62 $base62)
    {
        $validated = $request->validated();
        $validated['slug'] = $this->uniqueSlug($base62);

        $shorturl->update($validated);
        return response()->json($shorturl, 200);
    }

    public function destroy(Shorturl $shorturl)
    {
        $shorturl->delete();

        return response()->json(null, 204);
    }

    public function uniqueSlug(Base62 $base62)
    {
        while (true){
            $slug = $base62->encode(random_bytes(5));

            if(Shorturl::where('slug', $slug)->doesntExist()){
                break;
            }
        }

        return $slug;
    }
}