<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontragent extends Model
{
    use HasFactory;
    protected $table = "kontragent";
    public $timestamps = false;
    public function INNs() {
        return $this->hasMany(INN_kontragent::class, "id_kontragent");
    }
}