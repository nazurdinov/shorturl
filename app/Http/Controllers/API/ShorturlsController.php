<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\StoreShorturls;
use App\Shorturl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ShorturlsController extends Controller
{


    public function index()
    {
        $shortUrls = Shorturl::all();
        return response()->json($shortUrls, 200);
    }

    public function store(StoreShorturls $request)
    {
        $validated = $request->validated();

        $slug = '2KCnBr2'. rand(0,100); // TODO: Generate unique slug

        $validated['slug'] = $slug;

        $shortUrl = Shorturl::create($validated);
        return response()->json($shortUrl, 201);
    }

    public function show($id)
    {
        $shortUrl = Shorturl::findOrFail($id);

        return response()->json($shortUrl, 200);
    }

    public function update(StoreShorturls $request, Shorturl $shorturl)
    {
        $validated = $request->validated();
        $slug = '2KCnBr2'. rand(0,100); // TODO: Generate unique slug

        $validated['slug'] = $slug;

        $shorturl->update($validated);
        return response()->json($shorturl, 200);
    }

    public function destroy(Shorturl $shorturl)
    {
        $shorturl->delete();

        return response()->json(null, 204);
    }
}
