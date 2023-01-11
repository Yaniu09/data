<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function Catergory()
    {
        return $this->BelongsTo('App\Models\Catergory','catergory_id' );
        
    }
}
