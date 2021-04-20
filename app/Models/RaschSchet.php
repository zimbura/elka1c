<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaschSchet extends Model
{
    use HasFactory;
    protected $table = "raschshet_kontragent";
    public $timestamps = false;
    public function kontragent() {
        return $this->belongsTo(Kontragent::class, "id_kontragent");
    }
}
