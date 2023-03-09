<?php

namespace App\Http\Controllers\Api;

use App\Models\Link;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\LinkRequest;
use App\Http\Controllers\Controller;
use App\Http\Filters\LinkFilter;
use App\Http\Resources\LinkResource;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(LinkFilter $linkFilter)
    {
        return LinkResource::collection(Link::filter($linkFilter)->latest()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LinkRequest $request)
    {
        $link = Link::create(['url' => $request->url, 'key' => Str::random(8)]);

        return response()->json($link, Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();
        return response()->noContent();
    }

    public function updateStatus(Link $link)
    {
        $link->toggleStatus()->save();
        return response()->json($link);
    }
}
