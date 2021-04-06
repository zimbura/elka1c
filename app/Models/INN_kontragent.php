<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class INN_kontragent extends Model
{
    use HasFactory;
    protected $table = "inn_kontragent";
    public $timestamps = false;

    public function kontragent() {
        return $this->belongsTo(Kontragent::class, "id_kontragent");
    }
}
