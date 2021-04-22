<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontragent extends Model
{
    use HasFactory;
    protected $table = "kontragent";
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class, "id_user");
    }

    public function schets() {
        return $this->hasMany(RaschSchet::class, "id_kontragent");
    }

    public function names() {
        return $this->hasMany(NameKontragent::class, "id_kontragent");
    }
}
