<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vendor;

class Catergory extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function vendors()
    {
        return $this->hasMany('App\Models\Vendor');
    }
}
