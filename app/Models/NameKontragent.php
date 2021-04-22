<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameKontragent extends Model
{
    use HasFactory;
    protected $table = "name_kontragent";
    public $timestamps = false;

    public function kontragent() {
        return $this->belongsTo(Kontragent::class, "id_kontragent");
    }
    
}
