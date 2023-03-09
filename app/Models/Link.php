<?php

namespace App\Models;

use App\Http\Filters\FilterableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory, FilterableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'url',
        'key',
    ];

    public function toggleStatus()
    {
        $this->status = !$this->status;
        return $this;
    }
}
