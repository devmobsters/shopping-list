<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'brand', 'picture'];

    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }
}
