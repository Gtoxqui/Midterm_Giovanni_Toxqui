<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoice;
use App\Models\Notes;
use App\Models\Manufacturer;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specs',
        'category',
        'manufacture_id'
    ];
    protected $table = 'equipment';

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}

