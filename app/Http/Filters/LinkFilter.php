<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class LinkFilter extends QueryFilter
{

    /**
     * Filtering with given url
     *
     * @param  int  $url
     *
     * @return Builder
     */
    public function url($url = '')
    {
        if ($url != '')
            return $this->builder->where('url', 'like', "%$url%");
    }

    /**
     * Filtering with given key
     *
     * @param  int  $key
     *
     * @return Builder
     */
    public function key($key = '')
    {
        if ($key != '')
            return $this->builder->where('key', 'like',  "%$key%");
    }


    /**
     * Filtering with given status
     *
     * @param  int  $status
     *
     * @return Builder
     */
    public function status($status = '')
    {
        if ($status != '')
            return $this->builder->where('status', $status);
    }
}
