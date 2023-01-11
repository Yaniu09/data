<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catergory extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function vendor()
    {
        return $this->hasMany('App\Models\Vendor');
    }
}