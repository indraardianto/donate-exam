<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $table = "program";
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id','id');
    }
}
