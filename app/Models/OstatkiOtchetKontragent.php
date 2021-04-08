<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OstatkiOtchetKontragent extends Model
{
    use HasFactory;
    protected $table = "ostatki_schet_kontragent";
    public $timestamps = false;
}
