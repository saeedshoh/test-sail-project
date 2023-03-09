<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinkController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($key)
    {
        $link = Link::where(['key' => $key, 'status' => true])->first();

        if (!$link)
            abort(404);

        $link->increment('counter');
        $link->save();

        return redirect($link->url, 301);
    }
}
